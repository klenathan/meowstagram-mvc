<?php
class Login extends Controller {
    public function __construct () {
        $this->view("login");
    }
    function handleLogin(){
        // $tempCon = True;

        header("location: /");
        $_SESSION["loginUsername"] = $_POST["username"];

    }
}
?>