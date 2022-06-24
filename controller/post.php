<?php 
class Post extends Controller {
    
    protected $postDataFile = "data/post.json";

    function renderPost(){
        $postData = DataHandle::readToJson($this->postDataFile);
        foreach ($postData as $key => $value) {
            echo $key." ". $value;
        }
    }
}
?>