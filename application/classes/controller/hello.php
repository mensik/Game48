<?php defined('SYSPATH') OR die('No Direct Script Access');
Class Controller_Hello extends Controller_Template {
	public $template = 'site';
	
	public function action_index() {

			$user = Auth::instance()->get_user();
			echo $user->username;


			$roles = $user->roles->find_all();
			foreach ($roles as $role) {
				echo '<br>'.$role->name.'<br>';
			}

			echo 'Get Var TEMP = '.$this->request->query('TEMP');

			$this->template->message =  'hello, worlds !';
	}
}
?>
