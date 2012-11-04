<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Unit extends ORM {
	
	public function create_user_unit($user_id) {
		$unit = ORM::factory('unit', $this->id);
		
		$uunit = ORM::factory('user_unit');
		$uunit->user_id = $user_id;
		$uunit->unit_id = $this->id;
		$uunit->zivoty = $unit->zivoty;
		$uunit->save();
		
		return $uunit;
	}
	
}
