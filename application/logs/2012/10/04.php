<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-04 06:43:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/fight.php [ 25 ]
2012-10-04 06:43:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/fight.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 06:44:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 25 ]
2012-10-04 06:44:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 25 ]
--
#0 /var/www/game/application/views/fight.php(25): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/game/a...', 25, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-04 06:44:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 25 ]
2012-10-04 06:44:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 25 ]
--
#0 /var/www/game/application/views/fight.php(25): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/game/a...', 25, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-04 06:44:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 26 ]
2012-10-04 06:44:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant unit_to_move - assumed 'unit_to_move' ~ APPPATH/views/fight.php [ 26 ]
--
#0 /var/www/game/application/views/fight.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/game/a...', 26, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-04 08:54:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 08:54:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 08:55:51 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
2012-10-04 08:55:51 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
--
#0 /var/www/game/application/classes/controller/fight.php(119): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 119, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 08:56:28 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
2012-10-04 08:56:28 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
--
#0 /var/www/game/application/classes/controller/fight.php(119): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 119, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 08:57:42 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
2012-10-04 08:57:42 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
--
#0 /var/www/game/application/classes/controller/fight.php(119): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 119, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 08:57:43 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
2012-10-04 08:57:43 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 119 ]
--
#0 /var/www/game/application/classes/controller/fight.php(119): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 119, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 08:58:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Fight::input() ~ APPPATH/classes/controller/fight.php [ 117 ]
2012-10-04 08:58:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Fight::input() ~ APPPATH/classes/controller/fight.php [ 117 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-04 09:01:16 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 120 ]
2012-10-04 09:01:16 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 120 ]
--
#0 /var/www/game/application/classes/controller/fight.php(120): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 120, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 09:01:43 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 120 ]
2012-10-04 09:01:43 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/fight.php [ 120 ]
--
#0 /var/www/game/application/classes/controller/fight.php(120): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/game/a...', 120, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 09:02:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:02:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:02:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:02:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:02:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:02:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:02:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:02:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:03:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:03:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:03:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-04 09:03:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-04 09:48:52 --- ERROR: ErrorException [ 8 ]: Undefined index: message ~ MODPATH/orm/classes/kohana/orm.php [ 1437 ]
2012-10-04 09:48:52 --- STRACE: ErrorException [ 8 ]: Undefined index: message ~ MODPATH/orm/classes/kohana/orm.php [ 1437 ]
--
#0 /var/www/game/modules/orm/classes/kohana/orm.php(1437): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/m...', 1437, Array)
#1 /var/www/game/application/classes/controller/fight.php(169): Kohana_ORM->add('message', Object(Model_Fight_message))
#2 [internal function]: Controller_Fight->action_turn()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-04 09:49:15 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`fight_id`, `message_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-04 09:49:15 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`fight_id`, `message_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/application/classes/controller/fight.php(169): Kohana_ORM->add('messages', Object(Model_Fight_message))
#3 [internal function]: Controller_Fight->action_turn()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-04 09:51:01 --- ERROR: ErrorException [ 2 ]: array_reverse() expects parameter 1 to be array, object given ~ APPPATH/views/fight.php [ 36 ]
2012-10-04 09:51:01 --- STRACE: ErrorException [ 2 ]: array_reverse() expects parameter 1 to be array, object given ~ APPPATH/views/fight.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_reverse()...', '/var/www/game/a...', 36, Array)
#1 /var/www/game/application/views/fight.php(36): array_reverse(Object(Database_MySQL_Result))
#2 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#3 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#4 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#6 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#7 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#8 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#11 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/game/index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-04 09:51:18 --- ERROR: ErrorException [ 2 ]: array_reverse() expects parameter 1 to be array, object given ~ APPPATH/views/fight.php [ 36 ]
2012-10-04 09:51:18 --- STRACE: ErrorException [ 2 ]: array_reverse() expects parameter 1 to be array, object given ~ APPPATH/views/fight.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_reverse()...', '/var/www/game/a...', 36, Array)
#1 /var/www/game/application/views/fight.php(36): array_reverse(Object(Database_MySQL_Result), true)
#2 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#3 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#4 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#6 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#7 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#8 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#11 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/game/index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-04 10:01:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/classes/controller/fight.php [ 121 ]
2012-10-04 10:01:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: units ~ APPPATH/classes/controller/fight.php [ 121 ]
--
#0 /var/www/game/application/classes/controller/fight.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 121, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-04 10:22:55 --- ERROR: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 177 ]
2012-10-04 10:22:55 --- STRACE: ErrorException [ 8 ]: Undefined index: zivoty ~ APPPATH/classes/controller/fight.php [ 177 ]
--
#0 /var/www/game/application/classes/controller/fight.php(177): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 177, Array)
#1 [internal function]: Controller_Fight->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}