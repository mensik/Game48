<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-02 02:15:51 --- ERROR: ErrorException [ 8 ]: Indirect modification of overloaded property Model_User::$id has no effect ~ APPPATH/classes/controller/main.php [ 52 ]
2012-10-02 02:15:51 --- STRACE: ErrorException [ 8 ]: Indirect modification of overloaded property Model_User::$id has no effect ~ APPPATH/classes/controller/main.php [ 52 ]
--
#0 /var/www/game/application/classes/controller/main.php(52): Kohana_Core::error_handler(8, 'Indirect modifi...', '/var/www/game/a...', 52, Array)
#1 [internal function]: Controller_Main->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-02 02:16:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::set() ~ APPPATH/classes/controller/main.php [ 52 ]
2012-10-02 02:16:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::set() ~ APPPATH/classes/controller/main.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-02 02:17:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::set() ~ APPPATH/classes/controller/main.php [ 52 ]
2012-10-02 02:17:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::set() ~ APPPATH/classes/controller/main.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-02 02:19:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 27 ]
2012-10-02 02:19:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 27 ]
--
#0 /var/www/game/application/classes/controller/main.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 27, Array)
#1 /var/www/game/application/classes/controller/main.php(98): Controller_Main->action_index()
#2 [internal function]: Controller_Main->action_turn()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-02 02:19:52 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 27 ]
2012-10-02 02:19:52 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/main.php [ 27 ]
--
#0 /var/www/game/application/classes/controller/main.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 27, Array)
#1 /var/www/game/application/classes/controller/main.php(98): Controller_Main->action_index()
#2 [internal function]: Controller_Main->action_turn()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}