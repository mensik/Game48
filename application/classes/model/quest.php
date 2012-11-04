<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Quest extends ORM {
	//protected $_has_many = array('enemies' => array('model' => 'quest_enemy'), );
	
	public function get_enemies() {
		
		$query =  DB::query(Database::SELECT, 'SELECT * FROM quests_enemy_units WHERE quests_id = :id');
		$query->param(':id', $this->id);
		
		$result = $query->execute();
		
		return $result;
	}
	
	public function get_reward_units() {
		
		$query =  DB::query(Database::SELECT, 'SELECT * FROM quests_reward_units LEFT JOIN units ON units.id = units_id WHERE quests_id = :id ');
		$query->param(':id', $this->id);
		
		$result = $query->execute();
		
		return $result;
	}
	
	public function get_reward_structures() {
		
		$query =  DB::query(Database::SELECT, 'SELECT  *  FROM quests_reward_structures LEFT JOIN structures ON structures.id = structures_id WHERE quests_id = :id');
		$query->param(':id', $this->id);
		
		$result = $query->execute();
		
		return $result;
	}
}
