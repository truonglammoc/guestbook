<?php

/**
 * Class for controller
 *
 * @Author: tritruong
 * @Date:   2018-08-25 16:07:08
 * @Last    Modified by:   tritruong
 * @Last    Modified time: 2018-08-27 23:40:06
 */
require_once 'src/model/Posts.php';
require_once 'src/model/User.php';

/**
 * Controls the data flow into posts object and updates the view whenever data changes.
 */
class PostsController
{
    /**
     * { function_description }
     */
    public static function index()
    {
        /**
         * { var_description }
         *
         * @var PostsModel
         */
        session_start();
        $db = new PostsModel;
        $userDb = new UserModel;
        $p = isset($_GET['p']) ? intval($_GET['p']) : 1;
         $listPosts = $db->getAll($p);
         $totalItems = $db->getTotalItems();
         $totalPages = intval($totalItems/PAGE_LIMIT) + (($totalItems % PAGE_LIMIT != 0) ? 1: 0);
        if (isset($_POST['mode'])) {
            switch ($_POST['mode']) {
                case 'add':
                    $data = array(null, $_POST['name'], $_POST['message'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 0);
                    $db->add($data);
                    include_once 'src/view/posts.php';
                    break;
                case 'delete':
                    if ($_SESSION["auth"] === true) {
                        $db->delete($_POST['id']);
                    }
                     include_once 'src/view/posts.php';
                    break;
                case 'edit_form':
                    $get = $db->get($_POST['id']);
                    echo json_encode(['id' => $get['id'], 'name' => $get['name'], 'message' => $get['message']]);
                    break;
                case 'edit':
                    if ($_SESSION["auth"] === true) {
                        $data = array($_POST['name'], $_POST['message'], date('Y-m-d H:i:s'), $_POST['id']);
                        $db->update($data);
                    }
                    include_once 'src/view/posts.php';
                    break;
                case 'login':
                    $_SESSION["auth"] = $userDb->checkAuth($_POST['username'], $_POST['password']);
                    include_once 'src/view/posts.php';
                    break;
                case 'logout':
                    unset($_SESSION["auth"]);
                    include_once 'src/view/posts.php';
                    break;
            }
        } else {
            include_once 'src/view/posts.php';
        }
    }
}
