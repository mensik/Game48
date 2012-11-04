<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Army extends Controller_Abstract {

	public function action_index() {

		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}
		
		$content = View::factory('army');
		$content->units = $user->get_unlocked_units();
		$content->owned_units = $user->get_units();
		$content->quests = ORM::factory('quest')->find_all();

		$content->user = $user;
		$this->template->content = $content;
	}
	
	public function action_buy_unit() {
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		if (HTTP_Request::GET == $this->request->method()) {
			$unit_id = $this->request->query('id');

			$unit = ORM::factory('unit', $unit_id);
			if ($user->gold >= $unit->price) {
				$user->gold = $user->gold - $unit->price;
				$user->add_unit($unit_id);
				$user->save();
			}
		}

		Request::current()->redirect('army/index');

	}
	
	public function action_heal() {
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		if (HTTP_Request::GET == $this->request->method()) {
			$unit_id = $this->request->query('id');
			$uunit = ORM::factory('user_unit', $unit_id);
			$unit = ORM::factory('unit', $uunit->unit_id);
			
			$price = round(($unit->zivoty - $uunit->zivoty) / $unit->zivoty * $unit->price / 2);
			$user->gold -= $price;
			$user->save();
			
			$user->heal_unit($unit_id);
		}

		Request::current()->redirect('army/index');
	}
	
	public function action_disband() {
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		if (HTTP_Request::GET == $this->request->method()) {
			$unit_id = $this->request->query('id');

			$user->del_unit($unit_id);
		}

		Request::current()->redirect('army/index');
	}
}