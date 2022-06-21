<?php
    class Route {

        protected $controller = "home";
        protected $method;
        protected $param;


        public function __construct () {
            $url_array = $this->UrlProcess();
            unset($url_array[0]);

            if(file_exists("controller/" . $url_array[1] . ".php")){
                include_once("controller/" . $url_array[1] . ".php");
                $this->controller = $url_array[1];
                // $this->controller = new $this->controller
                
            } else {
                echo "error";
            }
            unset($url_array[1]);

            if (isset($url_array[2])) {
                if(method_exists($this->controller, $url_array[2])){
                    $this->method = $url_array[2];
                }
                unset($url_array[2]);
            }

            $this->param = $url_array?array_values($url_array) : [];

            if (isset($this->controller) && isset($this->method)) {
                call_user_func_array([new $this->controller, $this->method], $this->param);
            } else {
                // echo "controller/".$this->controller.".php";
                include_once("controller/".$this->controller.".php");
                $target = new $this->controller;
            }
            
            

            // echo $this->controller."/".$this->method;
            // echo (isset($controller) && isset($method));
        }

        private function UrlProcess() {
            if(isset($_SERVER['REQUEST_URI'])) {
                return  explode("/", $_SERVER['REQUEST_URI']);
            }
        }   

    }
?>