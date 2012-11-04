<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-09 01:43:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_round' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-09 01:43:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_round' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-09 02:02:39 --- ERROR: View_Exception [ 0 ]: The requested view chart could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-09 02:02:39 --- STRACE: View_Exception [ 0 ]: The requested view chart could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/game/system/classes/kohana/view.php(137): Kohana_View->set_filename('chart')
#1 /var/www/game/system/classes/kohana/view.php(30): Kohana_View->__construct('chart', NULL)
#2 /var/www/game/application/classes/controller/chart.php(16): Kohana_View::factory('chart')
#3 [internal function]: Controller_Chart->action_index()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Chart))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-09 02:12:20 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-09 02:12:20 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/game/application/views/chart.php(27): Kohana_ORM->__get('name')
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Chart))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-09 02:12:39 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-09 02:12:39 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/game/application/views/chart.php(27): Kohana_ORM->__get('name')
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Chart))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-09 04:21:56 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 66 ]
2012-10-09 04:21:56 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 66 ]
--
#0 /var/www/game/application/classes/controller/main.php(66): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/game/a...', 66, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-09 05:22:33 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1204 ]
2012-10-09 05:22:33 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1204 ]
--
#0 /var/www/game/modules/orm/classes/kohana/orm.php(1289): Kohana_ORM->check(NULL)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->update(NULL)
#2 /var/www/game/application/classes/controller/main.php(205): Kohana_ORM->save()
#3 [internal function]: Controller_Main->action_resetall()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}