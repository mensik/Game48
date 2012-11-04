<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Fight extends Controller_Abstract {

	public function action_index() {

		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$cont = View::factory('fight');
		$ongoing_fights = DB::select()->from('fights')->where('user_id', '=', $user->id)->and_where('state', '=', 'in_progress')->execute();

		$fight = ORM::factory('fight', $ongoing_fights[0]['id']);

		$units = $fight->get_units();
		$messages = $fight->messages->order_by('id', 'desc')->find_all();

		$player_turn = TRUE;

		foreach ($units as $unit) {
			if ($unit['poradi'] == $fight->unit_to_move) {
				$player_turn = $unit['is_enemy'] == 0;
				break;
			}
		}

		$cont->player_turn = $player_turn;
		$cont->fight = $fight;
		$cont->unit_to_move = $fight->unit_to_move;
		$cont->units = $units;
		$cont->messages = $messages;

		$this->template->content = $cont;

	}
	
	public function action_refresh() {
		$user = Auth::instance()->get_user();
		
		$cont = array();
		$ongoing_fights = DB::select()->from('fights')->where('user_id', '=', $user->id)->and_where('state', '=', 'in_progress')->execute();

		$fight = ORM::factory('fight', $ongoing_fights[0]['id']);

		$units = $fight->get_units();
		$messages = $fight->messages->find_all();
		
		$jmessages = array();
		foreach ($messages as $m) {
			$jmessages[$m->id] = $m->content;
		}

		$player_turn = TRUE;

		foreach ($units as $unit) {
			if ($unit['poradi'] == $fight->unit_to_move) {
				$player_turn = $unit['is_enemy'] == 0;
				break;
			}
			
		}
		
		$junits = array();
		foreach ($units as $unit) {
			$junits[$unit['poradi']] = $unit;
		}
		
/*
		$cont['player_turn'] = $player_turn;
		$cont['fight'] = $fight;
		$cont['unit_to_move'] = $fight->unit_to_move;
		$cont['units'] = json_encode($units, JSON_FORCE_OBJECT);
		$cont['messages'] = $messages;
	*/	
		$cont = array (
			'status' => 'in_progress',
			'units' => $junits,
			'unit_to_move' => $fight->unit_to_move,
			'messages' => $jmessages,
			'player_turn' => $player_turn,
		);

		
		$this->template->data = array_merge($this->template->data, $cont); 
	}

	public function action_init() {

		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		$ongoing_fights = DB::select()->from('fights')->where('user_id', '=', $user->id)->and_where('state', '=', 'in_progress')->execute();
		if ($ongoing_fights->count() == 0 || $user->fights_count > 0) {
	

			if (HTTP_Request::GET == $this->request->method()) {
				$quest_id = $this->request->query('id');

				$fight = ORM::factory('fight');
				$fight->user_id = $user->id;
				$fight->quest_id = $quest_id;
				$fight->state = 'in_progress';
				$fight->unit_to_move = 1;
				
				$fight->save();
				
				$user->fights_count++;
				$user->save();

				$user_units = $user->get_units();

				$order = 1;
				foreach ($user_units as $unit) {
					$uuf = ORM::factory('user_unit_fight');
					$uuf->user_unit_id = $unit['id'];
					$uuf->fight_id = $fight->id;
					$uuf->order = $unit['iniciativa'] + mt_rand(1, 20);
					$uuf->is_enemy = false;
					$uuf->save();
				}

				$quest = ORM::factory('quest', $quest_id);

				$enemies = $quest->get_enemies();

				foreach ($enemies as $enemy) {

					$unit = ORM::factory('unit', $enemy['units_id']);
					for ($i = 0; $i < $enemy['amount']; $i++) {
						//Enemy gots NEW units every time
						$enemy_unit = $unit->create_user_unit(0);

						$uuf = ORM::factory('user_unit_fight');
						$uuf->user_unit_id = $enemy_unit->id;
						$uuf->fight_id = $fight->id;
						$uuf->order = $unit->iniciativa + mt_rand(1, 20);
						$uuf->is_enemy = true;
						$uuf->save();
					}
				}
				
				$query = DB::query(Database::SELECT, "SELECT user_unit_id, user_unit_fights.order FROM user_unit_fights WHERE fight_id = :id ORDER BY user_unit_fights.order DESC");
				$query->param(':id', $fight->id);
		
				$uunits = $query->execute();
				
				$order = 1;
				$q2 = DB::query(Database::UPDATE, "UPDATE user_unit_fights SET user_unit_fights.order = :o WHERE user_unit_id = :id");
				foreach ($uunits as $u) {
					$q2->param(':id', $u['user_unit_id']);
					$q2->param(':o', $order++);
					$q2->execute();
				}

				Request::current()->redirect('fight/index');

			}
		} else {
			$this->template->content = 'Tvi vojaci jsou vycerpani';
		}

	}

	public function getDamage($dmgString) {
		$attributes = explode("+", $dmgString);

		$damage = 0;

		foreach ($attributes as $atb) {
			$atb = trim($atb);
			if (substr_count($atb, 'd') == 0) {// Atribute is just number
				$damage += intval($atb);
			} else {// Atriute is dice roll
				$vals = explode('d', $atb);
				for ($i = 0; $i < intval($vals[0]); $i++) {
					$damage += mt_rand(1, $vals[1]);
				}
			}
		}

		return $damage;
	}

	public function action_turn() {
		$user = Auth::instance()->get_user();
		if (!$user) {
			Request::current()->redirect('user/login');
		}

		
		$ongoing_fights = DB::select()->from('fights')->where('user_id', '=', $user->id)->and_where('state', '=', 'in_progress')->execute();
		$fight = ORM::factory('fight', $ongoing_fights[0]['id']);
		$units = $fight->get_units();

		$target = 0;
		if (HTTP_Request::GET == $this->request->method()) {
			$target = $this->request->query('target');
			foreach ($units as $unit) {
				if ($unit['id'] == $target) {
					$target = $unit;
					break;
				}
			}
		}

		$player_turn = TRUE;

		$attacker = 0;

		foreach ($units as $unit) {
			if ($unit['poradi'] == $fight->unit_to_move) {
				$attacker = $unit;
				$player_turn = $unit['is_enemy'] == 0;
				break;
			}
		}

		if (!$player_turn) {//Choose oponent for computer round
			foreach ($units as $unit) {
				if ($unit['is_enemy'] == 0 && $unit['zivoty'] > 0) {
					$target = $unit;
				}
			}
		}

		// ATTACK

		$text = $attacker['name'] . ' utoci na ' . $target['name'] . '</br>';
		$dmg = 0;

		$hod_utok = mt_rand(1, 20);
		if ($hod_utok == 1) {
			$text .= 'Kriticky minul';
		} else if ($hod_utok == 20) {

			$dmg = $this->getDamage($attacker['zraneni']) * 2;
			$text .= 'Kritický zásah! ' . $target['name'] . ' utrpěl zrnění za ' . $dmg . ' životů.';
		} else {
			if ($hod_utok + $attacker['uc'] >= $target['oc']) {
				$dmg = $this->getDamage($attacker['zraneni']);
				$text .= 'Zásah! ' . $target['name'] . ' utrpěl zrnění za ' . $dmg . ' životů.';
			} else {
				$text .= 'Minul';
			}
		}

		if ($dmg > 0) {
			$uunit = ORM::factory('user_unit', $target['id']);
			$target['zivoty'] -= $dmg;
			if ($target['zivoty'] <= 0) {
				$uunit->zivoty = 0;

				$text .= ' A byl zabit!';
			} else {
				$uunit->zivoty = $target['zivoty'];
			}
			$uunit->save();
		}

		$units = $fight->get_units();
		$my_lives = 0;
		$en_lives = 0;
		foreach ($units as $unit) {
			if ($unit['zivoty'] > 0) {
				if ($unit['is_enemy'] == 0) {
					$my_lives++;
				} else {
					$en_lives++;
				}
			}
		}

		if ($en_lives == 0) {
			$fight->state = 'victory';
			$fight->save();

			$cont = View::factory('fight/victory');
			$quest = ORM::factory('quest', $fight->quest_id);

			$user->gold += $quest->reward_gold;
			$user->save();

			$rew_structures = $quest->get_reward_structures();
			foreach ($rew_structures as $str) {
				$user->change_structure($str['structures_id'], $str['amount']);
			}
			$cont->structures = $rew_structures;

			$rew_units = $quest->get_reward_units();
			foreach ($rew_units as $unit) {
				for ($i = 0; $i < $unit['amount']; $i++) {
					$user->add_unit($unit['units_id']);
				}
			}
			$cont->units = $rew_units;

			$cont->gold = $quest->reward_gold;
			
			if ($this->request->is_ajax()) {
				$this->template = View::factory('ajax');
				$this->template->data = array(
					'status' => 'end',
					'content' => (string) $cont,
				);
			} else {
				$this->template->content = $cont;
			}
		} else if ($my_lives == 0) {
			$fight->state = 'defeat';
			$fight->save();

			if ($this->request->is_ajax()) {
				$this->template = View::factory('ajax');
				$this->template->data = array(
					'status' => 'end',
					'content' => (string) View::factory('fight/defeat'),
				);
			} else {
				$this->template->content = View::factory('fight/defeat');
			}
			
		} else {

			$unit_count = count($units);
			while (true) {
				$fight->unit_to_move++;
				if ($fight->unit_to_move > $unit_count) {
					$fight->unit_to_move = 1;
				}

				foreach ($units as $unit) {
					if ($unit['poradi'] == $fight->unit_to_move) {
						if ($unit['zivoty'] > 0) {
							$fight->save();
							break 2;
						}
					}
				}
			}
/*
			$msg = ORM::factory('fight_message');
			$msg->content = $text;
			$msg->fight_id = $fight->id;
			$msg->save();
	*/		
			
			if ($this->request->is_ajax()){
				$this->template->data['utok'] = array('target'=>$target['poradi'], 'dmg'=>$dmg);
				$this->action_refresh();
			} else {
				Request::current()->redirect('fight/index');
			}
			
		}

	}

}
