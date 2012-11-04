<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Abstract {

	public function action_test() {

		$user = Auth::instance()->get_user();
		if ($user) {
			if (HTTP_Request::GET == $this->request->method()) {
				$data = $this->request->query();
				//
			}

			$this->template = View::factory('ajax');
			$this->template->data = $this->get_turn_impact($data, $user);
		}
	}

	public function get_turn_impact($data, $user) {
		//Scitani vysledku
		$vydelek = $data['sberKamenu'] * 25;
		$jidlo = ($data['sberBobuli'] + $data['freePopulation']) * 1.5;
		$army_size = 0;

		//Priprava ulozeni posledniho tahu
		$queryDel = DB::delete('user_lastgames')->where('user_id', '=', $user->id);
		$queryDel->execute();
		$query = DB::query(Database::INSERT, 'INSERT INTO user_lastgames (user_id, field, amount) VALUES (:user_id, :field, :amount)')->bind(':user_id', $userid)->bind(':field', $field)->bind(':amount', $amount);

		$userid = $user->id;

		$field = 'sberBobuli';
		$amount = $data['sberBobuli'];
		$query->execute();

		$field = 'sberKamenu';
		$amount = $data['sberKamenu'];
		$query->execute();

		$structures = ORM::factory('structure')->find_all();

		foreach ($structures as $structure) {
			if (array_key_exists('s' . $structure->id, $data)) {
				$vydelek = $vydelek + $structure->gold_prod * $data['s' . $structure->id];
				$jidlo = $jidlo + $structure->food_prod * $data['s' . $structure->id];
				$field = 's' . $structure->id;
				$amount = $data['s' . $structure->id];
				$query->execute();
			}
		}

		$units = $user->get_units();

		foreach ($units as $unit) {
			$jidlo -= $unit['food'];
			$vydelek -= $unit['gold'];
			$army_size += $unit['zivoty'];
		}

		$diffJidla = min($jidlo - $user->population, 2);
		if ($diffJidla > 0) {
			$popDiff = $diffJidla / $user->population;
		} else {
			$popDiff = $diffJidla / $user->population;
		}

		return array('jidlo' => $jidlo, 'vydelek' => $vydelek, 'diffJidla' => $diffJidla, 'popDiff' => $popDiff, 'armySize' => $army_size);
	}

	public function action_index() {
		// Load the user information
		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$content = View::factory('main');
		View::bind_global('user', $user);

		$content->bind('messages', $this->messages);
		$content->structures = $user->get_unlocked_structures();
		$content->units = $user->get_unlocked_units();

		$content->built_structures = $user->get_structures();
		$content->owned_units = $user->get_units();
		$content->lastgames = $user->lastgames->find_all();

		$content->user = $user;

		$this->template->content = $content;
	}

	public function action_turn() {
		// Load the user information
		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$data = $this->request->post();

		//Population change
		$turn = $this->get_turn_impact($data, $user);

		$user->tu = $user->tu - 1;
		$user->round_no++;

		//zmena populace a zlata
		$user->pop_change = $user->pop_change + $turn['popDiff'];
		$user->gold = $user->gold + $turn['vydelek'];
		$user->fights_count = 0;
		$user->save();
		
		if ($user->pop_change >= 1) {//Novi obyvatele
			$user->pop_change = $user->pop_change - 1;
			$user->population = $user->population + 1;
			$user->save();
		}

		while ($user->pop_change <= -1) {//Ubytek obyvatel
			$user->pop_change = $user->pop_change + 1;
			$user->population = $user->population - 1;
			$user->save();
		}

		$round = ORM::factory('user_round');
		$round->user_id = $user->id;
		$round->round = $user->round_no;
		$round->gold = $user->gold;
		$round->population = $user->population;
		$round->army_strenght = $turn['armySize'];
		$round->save();

		Request::current()->redirect('main/index');

	}

	public function action_buy_structure() {
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		if (HTTP_Request::GET == $this->request->method()) {
			$struct_id = $this->request->query('id');

			$structure = ORM::factory('structure', $struct_id);
			if ($user->gold >= $structure->price) {
				$user->gold = $user->gold - $structure->price;
				$user->change_structure($struct_id, 1);
				$user->save();
			}
			$this->messages['nakup'] = $this->request->query('id');
		}

		Request::current()->redirect('main/index');

	}

	public function action_reset() {
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$user->tu = 20;
		$user->gold = 0;
		$user->population = 4;
		$user->pop_change = 0;
		$user->round_no = 1;
		$user->save();

		$query = DB::delete('user_structures')->where('user_id', '=', $user->id);
		$query->execute();
		$query2 = DB::delete('user_units')->where('user_id', '=', $user->id);
		$query2->execute();
		$query3 = DB::delete('fights')->where('user_id', '=', $user->id);
		$query3->execute();
		$query4 = DB::delete('user_rounds')->where('user_id', '=', $user->id);
		$query4->execute();

		Request::current()->redirect('main/index');
	}

	public function action_resetall() {
		$userA = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$userA) {
			Request::current()->redirect('user/login');
		}

		if ($userA->username == 'obiwantin') {

			$uORM = ORM::factory('user');
			$users = $uORM->where('id','>',0)->find_all();

			foreach ($users as $user) {

				$user->tu = 50;
				$user->gold = 0;
				$user->population = 4;
				$user->pop_change = 0;
				$user->round_no = 1;
				
				$user->save();

				$query = DB::delete('user_structures')->where('user_id', '=', $user->id);
				$query->execute();
				$query2 = DB::delete('user_units')->where('user_id', '=', $user->id);
				$query2->execute();
				$query3 = DB::delete('fights')->where('user_id', '=', $user->id);
				$query3->execute();
				$query4 = DB::delete('user_rounds')->where('user_id', '=', $user->id);
				$query4->execute();
			}

		}
		Request::current()->redirect('main/index');
	}

	public function action_addTU() {
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$user->tu += 50;
		$user->save();

		Request::current()->redirect('main/index');
	}

}
?>