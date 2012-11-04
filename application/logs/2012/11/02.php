<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-02 08:31:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/menu.php [ 14 ]
2012-11-02 08:31:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/menu.php [ 14 ]
--
#0 /var/www/game/application/views/menu.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 14, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(30): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-02 08:33:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/main.php [ 80 ]
2012-11-02 08:33:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/main.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 08:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-02 08:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-02 08:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-02 08:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-02 08:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-02 08:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/action_reset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-02 08:52:29 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 64 ]
2012-11-02 08:52:29 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 64 ]
--
#0 /var/www/game/application/classes/controller/main.php(64): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/game/a...', 64, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-02 08:54:40 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 64 ]
2012-11-02 08:54:40 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/main.php [ 64 ]
--
#0 /var/www/game/application/classes/controller/main.php(64): Kohana_Core::error_handler(2, 'Division by zer...', '/var/www/game/a...', 64, Array)
#1 /var/www/game/application/classes/controller/main.php(15): Controller_Main->get_turn_impact(Array, Object(Model_User))
#2 [internal function]: Controller_Main->action_test()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}