<?php
class Auth {
    private static $userDataFile = "data/user.json";

    public static function login($username, $password){
        $inputUsername = $username;
        $inputPasswordhHash = hash("sha256", $password);
        $userData = DataHandle::readToJson(Auth::$userDataFile);

        if (array_key_exists($inputUsername, $userData)){
            if ($inputPasswordhHash == $userData[$inputUsername]["password"]){
                return "successful";
            } else {
                return "wrong_password";
            }
        } else {
            return "wrong_username";
        }
    }
    public static function signUp($inputUsername, $inputEmail, $inputPassword){

        $inputPasswordhHash = hash("sha256", $inputPassword);

        if (!Auth::checkUserExist($inputUsername)){

            $userData = DataHandle::readToJson(Auth::$userDataFile);
            $userData[$inputUsername] = array(
            "password"=>$inputPasswordhHash,
            "email"=>$inputEmail);
            
            DataHandle::writeData(Auth::$userDataFile, json_encode($userData));
            return "successful";
        } else {
            return "username_exist";
        }
    }

    private static function checkUserExist($username){
        $userData = DataHandle::readToJson(Auth::$userDataFile);
        return array_key_exists($username, $userData) ? True : False;
    }
}
?>