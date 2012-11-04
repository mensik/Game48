<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	public function get_units() {
		$query = DB::query(Database::SELECT, "SELECT user_units.id, unit_id, units.name AS name, user_units.zivoty, units.upkeep_food AS food, units.upkeep_gold AS gold, units.iniciativa, ROUND((units.zivoty - user_units.zivoty)  / units.zivoty * units.price / 2) AS heal_price FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = :id AND user_units.zivoty > 0");
		$query->parameters(array(':id' => $this->id));
		$result = $query->execute()->as_array();
		return $result;
	}
	
	public function has_units() {
		return count($this->get_units()) > 0;
	}

	public function get_structures() {
		$query = DB::query(Database::SELECT, "SELECT structure_id AS id, structures.name AS budova, count AS pocet FROM user_structures LEFT JOIN structures on structures.id = structure_id WHERE user_id = :id");
		$query->parameters(array(':id' => $this->id));
		$result = $query->execute()->as_array();
		return $result;
	}
	
	public function get_unlocked_structures(){
		return ORM::factory('structure')->where('purchasable','=',1)->find_all();
	}
	
	public function get_unlocked_units(){
		return ORM::factory('unit')->where('purchasable','=',1)->find_all();
	}
	
	public function add_unit($id) {
		
		$unit = ORM::factory('unit', $id);
		
		$uunit = ORM::factory('user_unit');
		$uunit->user_id = $this->id;
		$uunit->unit_id = $id;
		$uunit->zivoty = $unit->zivoty;
		$uunit->save();
	}
	
	public function del_unit($unit_id) {
		$q = DB::delete('user_units')->where('id','=',$unit_id);
		$q->execute();
	}
	
	public function heal_unit($unit_id) {
		$uunit = ORM::factory('user_unit', $unit_id);
		$unit = ORM::factory('unit', $uunit->unit_id);
		
		$uunit->zivoty = $unit->zivoty;
		$uunit->save();
	}

	public function change_structure($id, $diff) {

		$query = DB::query(Database::SELECT, "SELECT * FROM user_structures WHERE user_id = :uid AND structure_id = :sid");
		$query->parameters(array(':uid' => $this->id, ':sid' => $id));
		$result = $query->execute();
		if ($result->count() == 0) {
			$q = DB::insert('user_structures', array('user_id', 'structure_id', 'count'))->values(array($this->id, $id, 1));
			$q->execute();
		} else {
			$arr = $result->as_array();
			$count = $arr[0]['count'];
			$q = DB::query(Database::UPDATE, "UPDATE user_structures SET count = :count  WHERE user_id = :uid AND structure_id = :sid");
			$q->parameters(array(':uid' => $this->id, ':sid' => $id, ':count' => $count + $diff));
			$q->execute();
		}

	}

} // End User Model
