<?php
class UserModel {
    public static function getUserInfo($user) {
        $userDataFile = "data/user.json";
        $userData = DataHandle::readToJson($userDataFile);
        
        // echo $userData;
        return $userData;
    }

    public static function getUserPost($user) {
        $userDataFile = "data/post.json";
        $userPostData = DataHandle::readToJson($userDataFile);
        $userPost = [];
        foreach ($userPostData as $key => $value) {
            
            if ($userPostData[$key]["author"] == $user) {
                $userPost[$key] = $value;
            }
        }

        return $userPost;
    }
}
?>