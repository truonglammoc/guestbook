<?php

/**
 * @Author: tritruong
 * @Date:   2018-08-25 21:39:53
 * @Last Modified by:   tritruong
 * @Last Modified time: 2018-08-27 23:40:40
 */
define("SQL_INSERT", "INSERT INTO `guestbook`.`posts` (`id`, `name`, `message`, `create_date`, `update_date`, `del_flg`) VALUES (?, ?, ?, ?, ?, ?)");
define("SQL_DELETE", "UPDATE `guestbook`.`posts` SET `del_flg` = 1 WHERE (`id`=?)");
define("SQL_UPDATE", "UPDATE `guestbook`.`posts` SET `name`=?, `message`=?, `update_date`=? WHERE (`id`=?)");
define("SQL_SELECT", "SELECT * FROM `guestbook`.`posts` WHERE `id`=? AND `del_flg` = 0");
define("SQL_SELECT_USER", "SELECT * FROM `guestbook`.`user` WHERE `user_name`=? AND `password`=?");
define("SQL_SELECT_ALL", "SELECT * FROM `guestbook`.`posts` WHERE `del_flg` = 0 ORDER BY id DESC LIMIT ?, ?");
define("SQL_SELECT_TOTAL", "SELECT COUNT(id) FROM `guestbook`.`posts` WHERE `del_flg` = 0");
define("PAGE_LIMIT", 4);
