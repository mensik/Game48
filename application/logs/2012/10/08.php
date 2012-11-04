<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-08 04:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-08 04:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 04:33:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-08 04:33:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 04:33:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/main.php [ 9 ]
2012-10-08 04:33:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 04:33:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: diffJidla ~ APPPATH/classes/controller/main.php [ 32 ]
2012-10-08 04:33:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: diffJidla ~ APPPATH/classes/controller/main.php [ 32 ]
--
#0 /var/www/game/application/classes/controller/main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 32, Array)
#1 /var/www/game/application/classes/controller/main.php(13): Controller_Main->get_turn_impact(Array)
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 04:33:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: diffJidla ~ APPPATH/classes/controller/main.php [ 32 ]
2012-10-08 04:33:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: diffJidla ~ APPPATH/classes/controller/main.php [ 32 ]
--
#0 /var/www/game/application/classes/controller/main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 32, Array)
#1 /var/www/game/application/classes/controller/main.php(13): Controller_Main->get_turn_impact(Array)
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 04:35:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:35:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:35:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:35:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:35:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:35:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:35:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:35:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:35:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:35:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:36:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
2012-10-08 04:36:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: jidlo ~ APPPATH/classes/controller/main.php [ 15 ]
--
#0 /var/www/game/application/classes/controller/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 15, Array)
#1 [internal function]: Controller_Main->action_test()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 04:52:03 --- ERROR: ErrorException [ 8 ]: Undefined index: popDiff ~ APPPATH/classes/controller/main.php [ 115 ]
2012-10-08 04:52:03 --- STRACE: ErrorException [ 8 ]: Undefined index: popDiff ~ APPPATH/classes/controller/main.php [ 115 ]
--
#0 /var/www/game/application/classes/controller/main.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 115, Array)
#1 [internal function]: Controller_Main->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 05:40:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
2012-10-08 05:40:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
--
#0 /var/www/game/application/classes/controller/main.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 39, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 05:40:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
2012-10-08 05:40:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
--
#0 /var/www/game/application/classes/controller/main.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 39, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 05:40:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
2012-10-08 05:40:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
--
#0 /var/www/game/application/classes/controller/main.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 39, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 05:40:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
2012-10-08 05:40:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: structures ~ APPPATH/classes/controller/main.php [ 39 ]
--
#0 /var/www/game/application/classes/controller/main.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 39, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 06:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-08 06:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 06:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-08 06:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 06:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-08 06:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unit/detail was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 06:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL detail/unit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-08 06:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL detail/unit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 06:10:10 --- ERROR: View_Exception [ 0 ]: The requested view fight/detail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-08 06:10:10 --- STRACE: View_Exception [ 0 ]: The requested view fight/detail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/game/system/classes/kohana/view.php(137): Kohana_View->set_filename('fight/detail')
#1 /var/www/game/system/classes/kohana/view.php(30): Kohana_View->__construct('fight/detail', NULL)
#2 /var/www/game/application/classes/controller/detail.php(10): Kohana_View::factory('fight/detail')
#3 [internal function]: Controller_Detail->action_unit()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Detail))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-08 06:22:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: quest ~ APPPATH/views/detail/quest.php [ 1 ]
2012-10-08 06:22:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: quest ~ APPPATH/views/detail/quest.php [ 1 ]
--
#0 /var/www/game/application/views/detail/quest.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 1, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Detail))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-08 06:22:38 --- ERROR: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Quest class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-08 06:22:38 --- STRACE: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Quest class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/game/application/views/detail/quest.php(2): Kohana_ORM->__get('description')
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Detail))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-08 07:54:19 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/detail/quest.php [ 14 ]
2012-10-08 07:54:19 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/detail/quest.php [ 14 ]
--
#0 /var/www/game/application/views/detail/quest.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 14, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Detail))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-08 08:00:22 --- ERROR: Database_Exception [ 1146 ]: Table 'martinm9_game.user_unit' doesn't exist [ DELETE FROM `user_unit` WHERE `id` = '119' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 08:00:22 --- STRACE: Database_Exception [ 1146 ]: Table 'martinm9_game.user_unit' doesn't exist [ DELETE FROM `user_unit` WHERE `id` = '119' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 /var/www/game/application/classes/model/user.php(44): Kohana_Database_Query->execute()
#2 /var/www/game/application/classes/controller/army.php(55): Model_User->del_unit('119')
#3 [internal function]: Controller_Army->action_disband()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Army))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-08 09:35:42 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Fight_message as array ~ APPPATH/classes/controller/fight.php [ 52 ]
2012-10-08 09:35:42 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Fight_message as array ~ APPPATH/classes/controller/fight.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 09:36:24 --- ERROR: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Fight_message class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-08 09:36:24 --- STRACE: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Fight_message class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /var/www/game/application/classes/controller/fight.php(52): Kohana_ORM->__get('text')
#1 [internal function]: Controller_Fight->action_refresh()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:06:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/fight.php [ 72 ]
2012-10-08 10:06:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/fight.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 10:09:13 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:13 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:09:17 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:17 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:09:25 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:25 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:09:33 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:33 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:09:50 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:50 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:09:59 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:09:59 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:14:35 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:14:35 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:14:40 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:14:40 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:14:47 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:14:47 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:15:10 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:15:10 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:15:31 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
2012-10-08 10:15:31 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 235 ]
--
#0 /var/www/game/application/classes/controller/fight.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 235, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:16:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/fight.php [ 285 ]
2012-10-08 10:16:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/fight.php [ 285 ]
--
#0 /var/www/game/application/classes/controller/fight.php(285): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/game/a...', 285, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 10:16:56 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 10:16:56 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(261): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-08 10:24:50 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 10:24:50 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(262): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-08 11:19:01 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 236 ]
2012-10-08 11:19:01 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 236 ]
--
#0 /var/www/game/application/classes/controller/fight.php(236): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 236, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 11:39:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/fight.php [ 335 ]
2012-10-08 11:39:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/fight.php [ 335 ]
--
#0 /var/www/game/application/classes/controller/fight.php(335): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/game/a...', 335, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 11:57:10 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 236 ]
2012-10-08 11:57:10 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 236 ]
--
#0 /var/www/game/application/classes/controller/fight.php(236): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 236, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:45:07 --- ERROR: ErrorException [ 8 ]: Undefined index: iniciativa ~ APPPATH/classes/controller/fight.php [ 117 ]
2012-10-08 14:45:07 --- STRACE: ErrorException [ 8 ]: Undefined index: iniciativa ~ APPPATH/classes/controller/fight.php [ 117 ]
--
#0 /var/www/game/application/classes/controller/fight.php(117): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 117, Array)
#1 [internal function]: Controller_Fight->action_init()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:46:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Unit as array ~ APPPATH/classes/controller/fight.php [ 136 ]
2012-10-08 14:46:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Unit as array ~ APPPATH/classes/controller/fight.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 14:47:51 --- ERROR: Database_Exception [ 1146 ]: Table 'martinm9_game.ser_unit_fights' doesn't exist [ SELECT user_unit_id, user_unit_fights.order FROM ser_unit_fights WHERE fight_id = 89 ORDER BY user_unit_fights.order DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 14:47:51 --- STRACE: Database_Exception [ 1146 ]: Table 'martinm9_game.ser_unit_fights' doesn't exist [ SELECT user_unit_id, user_unit_fights.order FROM ser_unit_fights WHERE fight_id = 89 ORDER BY user_unit_fights.order DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_uni...', false, Array)
#1 /var/www/game/application/classes/controller/fight.php(145): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Fight->action_init()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-08 15:08:24 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:08:24 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:12:17 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:12:17 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:12:38 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:12:38 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:12:45 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:12:45 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:13:22 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:13:22 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:13:54 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:13:54 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:14:21 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:14:21 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:15:18 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:15:18 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:15:29 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:15:29 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:18:31 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:18:31 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:18:34 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:18:34 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:18:37 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:18:37 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:19:12 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:19:12 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:19:16 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:19:16 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:19:17 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:19:17 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:19:27 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:19:27 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:19:46 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:19:46 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:24:22 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:24:22 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:24:23 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:24:23 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:24:26 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:24:26 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:24:27 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:24:27 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:24:28 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:24:28 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:02 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:02 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:07 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:07 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:07 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:07 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:11 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:11 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:11 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:11 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:12 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:12 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:19 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:19 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:29 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:29 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:51 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:51 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:47:52 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:47:52 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:16 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:16 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:19 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:19 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:19 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:19 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:20 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:20 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:21 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:21 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:23 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:23 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:24 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:24 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:24 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:24 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:27 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:27 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:27 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:27 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:28 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:28 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:30 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:30 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:30 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:30 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:30 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:30 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:32 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:32 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:36 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
2012-10-08 15:48:36 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 249 ]
--
#0 /var/www/game/application/classes/controller/fight.php(249): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 249, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:48:37 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 15:48:37 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(275): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-08 15:48:37 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-08 15:48:37 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(275): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}