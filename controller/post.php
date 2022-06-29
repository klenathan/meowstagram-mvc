<?php 
class Post extends Controller {
    
    protected $postDataFile = "data/post.json";

    function renderPost(){
        $postData = DataHandle::readToJson($this->postDataFile);
        foreach ($postData as $key => $value) {
            echo $key." ". $value;
        }
    }

    function uploadPost() {
        $postData = Datahandle::readData("data/post.json");
        $postJsonData = json_decode($postData, true);
        $postId = uniqid();

        $target_dir = "data/postImage/";
        $target_file = $target_dir . $postId . ".jpg";

        $author = $_COOKIE["user"];
        $status = $_POST["status"];
        $visible = "Public";

        
        $newPost = array( $postId => array(
            "author"=> $author,
            "status"=>$status,
            "imgPath"=>$target_file,
            "visible"=>$visible,
            "time"=>time()
        ));

        $postJsonData = $newPost + $postJsonData;

        $imageFile = $_FILES["postImg"]["tmp_name"];

        DataHandle::writeData("data/post.json", json_encode($postJsonData));
        move_uploaded_file($imageFile, $target_file);
    }
}
?>