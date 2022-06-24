<?php
    // echo $_SERVER['PHP_SELF'];
    // print_r(explode("/", $_SERVER['PHP_SELF']));

    // include_once("testController.php");
    // $test = new testController();

    // class Test {
    //     public function __construct($uri, $target, $method = "") {
    //         if(isset($_SERVER["REQUEST_URI"])) {
                
    //         }
    //     }
    // }

    setcookie('user', '', -1, '/'); 
    if (isset($_COOKIE["user"])){
        echo $_COOKIE["user"];
    } else {
        echo "none";
    }
    // test

?>