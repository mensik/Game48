<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Detail extends Controller_Abstract {

	public function action_unit() {
		$id = $this->request->query('id');

		$unit = ORM::factory('unit', $id);

		$cont = View::factory('detail/unit');
		$cont->unit = $unit;
		$this->template->content = $cont;
	}

	public function action_quest() {
		$id = $this->request->query('id');

		$quest = ORM::factory('quest', $id);

		$cont = View::factory('detail/quest');
		$cont->quest = $quest;

		$enemies = $quest->get_enemies();
		$cont->enemies = $enemies;

		$rew_structures = $quest->get_reward_structures();
		$cont->structures = $rew_structures;

		$rew_units = $quest->get_reward_units();
		$cont->units = $rew_units;

		$this->template->content = $cont;
	}

}
