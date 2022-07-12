<?php
class User extends Controller{

    public function __construct(){
        $uid = explode("/", $_SERVER['REQUEST_URI'])[1];
        $userData = UserModel::getUserInfo($uid);
        $username = $uid;
        $userEmail = $userData[$uid]["email"];
        include_once("view/user.php");
    }

}
?>