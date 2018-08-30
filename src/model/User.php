<?php

/**
 * Class model
 *
 * @Author: tritruong
 * @Date:   2018-08-25 16:07:27
 * @Last    Modified by:   tritruong
 * @Last    Modified time: 2018-08-27 23:29:10
 */
require_once 'config/database.php';
require_once 'config/const.php';

/**
 * Class for posts model.
 */
class UserModel
{
    private static $_conn = null;
    /**
     * { function_description }
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function connect()
    {
        if (self::$_conn == null) {
            self::$_conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB . ";charset=" . CHARSET, USER, PASS);
            self::$_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return self::$_conn;
    }
    /**
     * { function_description }
     *
     * @param <type> $username The username
     * @param <type> $password The password
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function checkAuth($username, $password)
    {
        $password = hash('sha256', $password);
        $stmt = $this->connect()->prepare(SQL_SELECT_USER);
        $stmt->execute(array($username, $password));
        if ($stmt->fetchColumn() == 1) {
            return true;
        }
        return false;
    }
}
