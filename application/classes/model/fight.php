<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Fight extends ORM {
	protected $_has_many = array('messages' => array('model' => 'fight_message'), );

	public function get_units() {

		$query = DB::query(Database::SELECT, "SELECT user_unit_id AS id, user_units.unit_id AS unit_id, units.name AS name, is_enemy, user_units.zivoty AS zivoty, user_unit_fights.order AS poradi, units.uc AS uc, units.zraneni AS zraneni, units.oc AS oc FROM user_unit_fights LEFT JOIN user_units ON user_units.id = user_unit_id LEFT JOIN units ON units.id = user_units.unit_id WHERE fight_id = :id");
		$query->param(':id', $this->id);
		
		return $query->execute();
	}

}
