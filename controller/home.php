<?php
    include_once("core/controller.php");

    class Home extends Controller {
        
        function __construct () {
            $this->view("home");
        }
    }
?>