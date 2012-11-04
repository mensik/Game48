<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-07 11:26:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Units' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-07 11:26:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Units' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-07 12:40:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main.php [ 108 ]
2012-10-07 12:40:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main.php [ 108 ]
--
#0 /var/www/game/application/views/main.php(108): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/game/a...', 108, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-07 12:40:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main.php [ 108 ]
2012-10-07 12:40:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main.php [ 108 ]
--
#0 /var/www/game/application/views/main.php(108): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/game/a...', 108, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/game/application/views/template.php(34): Kohana_View->__toString()
#5 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#6 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#7 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/game/index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-07 12:46:52 --- ERROR: Database_Exception [ 1052 ]: Column 'zivoty' in where clause is ambiguous [ SELECT user_units.id, unit_id, units.name AS name, user_units.zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' AND zivoty > 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 12:46:52 --- STRACE: Database_Exception [ 1052 ]: Column 'zivoty' in where clause is ambiguous [ SELECT user_units.id, unit_id, units.name AS name, user_units.zivoty FROM user_units LEFT JOIN units on units.id = unit_id WHERE user_id = '2' AND zivoty > 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_uni...', false, Array)
#1 /var/www/game/application/classes/model/user.php(8): Kohana_Database_Query->execute()
#2 /var/www/game/application/classes/controller/main.php(19): Model_User->get_units()
#3 [internal function]: Controller_Main->action_index()
#4 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/game/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-07 12:52:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-07 12:52:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
--
#0 /var/www/game/application/views/template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 34, Array)
#1 /var/www/game/system/classes/kohana/view.php(61): include('/var/www/game/a...')
#2 /var/www/game/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/game/a...', Array)
#3 /var/www/game/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Army))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-07 12:59:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/army.php [ 39 ]
2012-10-07 12:59:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/army.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-07 13:03:24 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/user.php [ 13 ]
2012-10-07 13:03:24 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-07 13:20:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function efined() ~ APPPATH/classes/model/quest/enemy.php [ 1 ]
2012-10-07 13:20:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function efined() ~ APPPATH/classes/model/quest/enemy.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-07 13:22:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'quest_enemy.quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_enemy`.`quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 13:22:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'quest_enemy.quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_enemy`.`quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `quest_e...', 'Model_Quest_Ene...', Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/game/application/classes/controller/fight.php(73): Kohana_ORM->find_all()
#4 [internal function]: Controller_Fight->action_init()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-07 13:25:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'quest_enemy.quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_enemy`.`quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 13:25:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'quest_enemy.quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_enemy`.`quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `quest_e...', 'Model_Quest_Ene...', Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/game/application/classes/controller/fight.php(74): Kohana_ORM->find_all()
#4 [internal function]: Controller_Fight->action_init()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-07 13:36:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 13:36:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'quest_id' in 'where clause' [ SELECT `quest_enemy`.`quests_id` AS `quests_id`, `quest_enemy`.`units_id` AS `units_id`, `quest_enemy`.`amount` AS `amount` FROM `quests_enemy_units` AS `quest_enemy` WHERE `quest_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `quest_e...', 'Model_Quest_Ene...', Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(993): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(934): Kohana_ORM->_load_result(true)
#3 /var/www/game/application/classes/model/quest.php(7): Kohana_ORM->find_all()
#4 /var/www/game/application/classes/controller/fight.php(74): Model_Quest->get_enemies()
#5 [internal function]: Controller_Fight->action_init()
#6 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#7 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/game/index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-07 13:42:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-07 13:42:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
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
2012-10-07 13:42:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
2012-10-07 13:42:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 34 ]
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
2012-10-07 13:44:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/unit.php [ 6 ]
2012-10-07 13:44:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/unit.php [ 6 ]
--
#0 /var/www/game/application/classes/model/unit.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/game/a...', 6, Array)
#1 /var/www/game/application/classes/controller/fight.php(81): Model_Unit->create_user_unit(0)
#2 [internal function]: Controller_Fight->action_init()
#3 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#4 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/game/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-07 13:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/army was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-07 13:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/army was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-07 13:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/army was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-07 13:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/army was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/game/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-07 13:58:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function View() ~ APPPATH/classes/controller/fight.php [ 214 ]
2012-10-07 13:58:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function View() ~ APPPATH/classes/controller/fight.php [ 214 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-07 13:59:06 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 13:59:06 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(212): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-07 14:00:57 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-07 14:00:57 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`martinm9_game`.`fights`, CONSTRAINT `fights_ibfk_2` FOREIGN KEY (`quest_id`) REFERENCES `quests` (`id`)) [ INSERT INTO `fights` (`state`) VALUES ('victory') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/game/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/game/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/game/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /var/www/game/application/classes/controller/fight.php(212): Kohana_ORM->save()
#4 [internal function]: Controller_Fight->action_turn()
#5 /var/www/game/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fight))
#6 /var/www/game/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/game/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/game/index.php(109): Kohana_Request->execute()
#9 {main}