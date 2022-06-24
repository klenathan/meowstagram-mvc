<?php
class User extends Controller{

    public function __construct(){
        $uid = explode("/", $_SERVER['REQUEST_URI'])[1];
        $username = $uid;
        include_once("view/user.php");
        // echo $uid;
    }
}
?>