<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Abstract extends Controller_Template {

	public function before() {

		if (!$this->request->is_ajax()) {
			parent::before();

			$this->messages = array();
			$this->template->menu = View::factory('menu');
			$this->template->foot = '';
			$this->template->user = $user = Auth::instance()->get_user();
		} else {
			$this->template = View::factory('ajax');
			$this->template->data = array();
		}
	}

}
?>