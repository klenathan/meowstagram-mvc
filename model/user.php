<?php
class UserModel {
    public static function getUserInfo($user) {
        $userDataFile = "data/user.json";
        $userData = DataHandle::readToJson($userDataFile);
        
        // echo $userData;
        return $userData;
    }
}
?>