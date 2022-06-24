<?php
class Signup extends Controller {
    function __construct() {
        $this->view("signup");
    }

    function handleSignup() {
        Auth::signUp($_POST["signupUsername"], $_POST["signupEmail"], $_POST["signupPassword"]);
    }
}
?>
