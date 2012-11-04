<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-03 04:31:18 --- ERROR: ErrorException [ 1 ]: Class 'ulr' not found ~ APPPATH/views/main.php [ 10 ]
2012-10-03 04:31:18 --- STRACE: ErrorException [ 1 ]: Class 'ulr' not found ~ APPPATH/views/main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 06:16:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/template.php [ 19 ]
2012-10-03 06:16:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/template.php [ 19 ]
--
#0 /var/www/game/application/views/template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 19, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 06:48:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/template.php [ 21 ]
2012-10-03 06:48:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/template.php [ 21 ]
--
#0 /var/www/game/application/views/template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 21, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 07:05:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/controller/abstract.php [ 11 ]
2012-10-03 07:05:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/controller/abstract.php [ 11 ]
--
#0 /var/www/game/application/classes/controller/abstract.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 11, Array)
#1 [internal function]: Controller_Abstract->before()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_User))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 07:05:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
2012-10-03 07:05:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
--
#0 /var/www/game/application/views/template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 26, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 07:06:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
2012-10-03 07:06:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
--
#0 /var/www/game/application/views/template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 26, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 07:06:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
2012-10-03 07:06:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template.php [ 26 ]
--
#0 /var/www/game/application/views/template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 26, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 07:06:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/template.php [ 26 ]
2012-10-03 07:06:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/template.php [ 26 ]
--
#0 /var/www/game/application/views/template.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/game/a...', 26, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 08:25:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/main.php [ 24 ]
2012-10-03 08:25:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/main.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 08:56:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_VARIABLE or '$' ~ APPPATH/views/main.php [ 105 ]
2012-10-03 08:56:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_VARIABLE or '$' ~ APPPATH/views/main.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 09:32:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: struct ~ APPPATH/views/main.php [ 43 ]
2012-10-03 09:32:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: struct ~ APPPATH/views/main.php [ 43 ]
--
#0 /var/www/game/application/views/main.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 43, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(26): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-03 10:08:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/main.php [ 49 ]
2012-10-03 10:08:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/main.php [ 49 ]
--
#0 /var/www/game/application/views/main.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/game/a...', 49, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(33): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-03 10:10:14 --- ERROR: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH/views/main.php [ 49 ]
2012-10-03 10:10:14 --- STRACE: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH/views/main.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', '/var/www/game/a...', 49, Array)
#1 /var/www/game/application/views/main.php(49): count()
#2 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#3 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#4 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/game/application/views/template.php(33): Kohana_View->__toString()
#6 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#7 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#8 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#11 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/game/index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-03 10:10:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: built_structure ~ APPPATH/views/main.php [ 49 ]
2012-10-03 10:10:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: built_structure ~ APPPATH/views/main.php [ 49 ]
--
#0 /var/www/game/application/views/main.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 49, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(33): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-03 10:14:39 --- ERROR: ErrorException [ 8 ]: Undefined index: s1 ~ APPPATH/classes/controller/main.php [ 57 ]
2012-10-03 10:14:39 --- STRACE: ErrorException [ 8 ]: Undefined index: s1 ~ APPPATH/classes/controller/main.php [ 57 ]
--
#0 /var/www/game/application/classes/controller/main.php(57): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/game/a...', 57, Array)
#1 [internal function]: Controller_Main->action_turn()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 15:32:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-03 15:32:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
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
2012-10-03 15:41:05 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/template.php [ 34 ]
2012-10-03 15:41:05 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 15:49:59 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'user_id' [ INSERT INTO `fights` (`user_id`, `state`, `unit_to_move`) VALUES ('2', 'in_progress', 1) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-03 15:49:59 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'user_id' [ INSERT INTO `fights` (`user_id`, `state`, `unit_to_move`) VALUES ('2', 'in_progress', 1) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(21): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_init()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-03 15:56:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_units() ~ APPPATH/classes/controller/fight.php [ 23 ]
2012-10-03 15:56:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_units() ~ APPPATH/classes/controller/fight.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 15:57:04 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT id, unit_id, units.name AS name, zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-03 15:57:04 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT id, unit_id, units.name AS name, zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT id, unit...', false, Array)
#1 /var/www/game/application/classes/model/user.php(8): Kohana_Database_Query->execute()
#2 /var/www/game/application/classes/controller/fight.php(23): Model_User->get_units()
#3 [internal function]: Controller_Fight->action_init()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 15:58:05 --- ERROR: Database_Exception [ 1052 ]: Column 'zivoty' in field list is ambiguous [ SELECT unit_id, units.name AS name, zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-03 15:58:05 --- STRACE: Database_Exception [ 1052 ]: Column 'zivoty' in field list is ambiguous [ SELECT unit_id, units.name AS name, zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT unit_id,...', false, Array)
#1 /var/www/game/application/classes/model/user.php(8): Kohana_Database_Query->execute()
#2 /var/www/game/application/classes/controller/fight.php(23): Model_User->get_units()
#3 [internal function]: Controller_Fight->action_init()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-03 15:58:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_unit_fight' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-03 15:58:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_unit_fight' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 16:20:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/controller/fight.php [ 8 ]
2012-10-03 16:20:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/controller/fight.php [ 8 ]
--
#0 /var/www/game/application/classes/controller/fight.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 8, Array)
#1 [internal function]: Controller_Fight->action_index()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 16:26:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User_unit_fight as array ~ APPPATH/classes/controller/fight.php [ 16 ]
2012-10-03 16:26:52 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User_unit_fight as array ~ APPPATH/classes/controller/fight.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 16:29:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User_unit_fight as array ~ APPPATH/classes/controller/fight.php [ 18 ]
2012-10-03 16:29:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User_unit_fight as array ~ APPPATH/classes/controller/fight.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-03 16:44:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: fighting_units ~ APPPATH/classes/controller/fight.php [ 19 ]
2012-10-03 16:44:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: fighting_units ~ APPPATH/classes/controller/fight.php [ 19 ]
--
#0 /var/www/game/application/classes/controller/fight.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 19, Array)
#1 [internal function]: Controller_Fight->action_index()
#2 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#3 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/game/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-03 16:52:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM user_unit_fights LEFT JOIN user_units ON user_units.id = user_unit_id' at line 1 [ SELECT user_unit_id AS id, user_units.unit_id AS unit_id, units.name AS name, is_enemy, user_units.zivoty AS zivoty, order FROM user_unit_fights LEFT JOIN user_units ON user_units.id = user_unit_id LEFT JOIN units ON units.id = user_units.unit_id WHERE fight_id = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-03 16:52:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order FROM user_unit_fights LEFT JOIN user_units ON user_units.id = user_unit_id' at line 1 [ SELECT user_unit_id AS id, user_units.unit_id AS unit_id, units.name AS name, is_enemy, user_units.zivoty AS zivoty, order FROM user_unit_fights LEFT JOIN user_units ON user_units.id = user_unit_id LEFT JOIN units ON units.id = user_units.unit_id WHERE fight_id = '12' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_uni...', false, Array)
#1 /var/www/game/application/classes/model/fight.php(11): Kohana_Database_Query->execute()
#2 /var/www/game/application/classes/controller/fight.php(18): Model_Fight->get_units()
#3 [internal function]: Controller_Fight->action_index()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}