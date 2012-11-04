<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Chart extends Controller_Abstract {
	
	public function action_index() {
		$userORM = ORM::factory('user');
		$users = $userORM->where('id','>',0)->and_where('is_tester','=',0)->find_all();
		
		$round_data = array();
		foreach ($users as $user) {
			$roundORM = ORM::factory('user_round');
			$rounds = $roundORM->where('user_id','=',$user->id)->find_all();
			$round_data[$user->id] = $rounds;
		}
		
		$cont = View::factory('chart');
		$cont->users = $users;
		$cont->rounds = $round_data;
		
		$this->template->content = $cont;
	}
	
}
