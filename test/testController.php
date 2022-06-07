<?php
class testController {
    function __construct () {
        include_once("testView.php");
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Post";
        }
    }
}
?>