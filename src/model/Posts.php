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
class PostsModel
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
     * @param <type> $data The data
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function add($data)
    {
        return $this->connect()->prepare(SQL_INSERT)->execute($data);
    }
    /**
     * { function_description }
     *
     * @param <type> $id The identifier
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function delete($id = null)
    {
        return $this->connect()->prepare(SQL_DELETE)->execute(array($id));
    }
    /**
     * { function_description }
     *
     * @param <type> $data The data
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function update($data)
    {
        return $this->connect()->prepare(SQL_UPDATE)->execute($data);
    }
    /**
     * { function_description }
     *
     * @param <type> $id The identifier
     *
     * @return <type>  ( description_of_the_return_value )
     */
    public function get($id = null)
    {
        $stmt = $this->connect()->prepare(SQL_SELECT);
        $stmt->execute(array($id));
        return $stmt->fetch();
    }
    /**
     * Gets all.
     *
     * @param integer $page The page
     *
     * @return <type>   All.
     */
    public function getAll($page = 1)
    {
        $stmt = $this->connect()->prepare(SQL_SELECT_ALL);
        $stmt->execute(array(($page - 1) * PAGE_LIMIT, PAGE_LIMIT));
        return $stmt->fetchAll();
    }
    /**
     * Gets the total items.
     *
     * @return <type>  The total items.
     */
    public function getTotalItems()
    {
        return $this->connect()->query(SQL_SELECT_TOTAL)->fetchColumn();
    }
}
