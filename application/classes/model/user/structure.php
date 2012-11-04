<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User_Structure extends ORM {
    // Relationships
    protected $_belongs_to = array('user' => array());
    
    protected $_has_many = array(
        'structure' => array('model' => 'structure'),
        );
}

?>
    