<?php
// $route = new Route("/home", "../controller/home.php");

class Route {

    // protected $controller = "home";
    protected $method;
    protected $param;


    function __construct ($uri, $controller, $method = 'none') {
        
        if(substr($uri, 1) == $this->UrlProcess()[1]){
            
            include_once($controller);
        }
        print_r($this->UrlProcess());
    }

    private function UrlProcess() {
        if(isset($_SERVER['REQUEST_URI'])) {
            return  explode("/", $_SERVER['REQUEST_URI']);
        }
    } 
}
?>