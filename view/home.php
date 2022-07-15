<?php 
    $lightmode = isset($_COOKIE["darkmode"])? $_COOKIE["darkmode"] : "lightmode";
    $loggedIn = isset($_COOKIE["user"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowstagram</title>
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/home.css">
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/style.css">
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/post.css">
</head>
<body>

    <header>
        <?php
        $header = new Header();
        ?>
    </header>

    <main>
        <?php
        if ($loggedIn) {
            ?>
        <div class="upload-post-wrap">
            <div class="upload-form-wrap">
                <form action="post/uploadpost" 
                method="post"
                enctype="multipart/form-data">
                    <div class="upload-post-detail">
                        <!-- <input type="text" name="postContent" id="postContent"> -->
                        <textarea name="status" id="postContent" 
                        cols="30" rows="10"
                        placeholder="What are you thinking?"></textarea>

                        <input type="file" 
                        name="postFile"
                        onchange="loadFile(event)"
                        id="postFile" required>
                    </div>
                    <select name="visible" id="visible">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                    <input type="submit" value="Post" id="uploadPostBtn">
                </form>
            </div>
            <img id="upload-img" src="" alt="post image">
        </div>
        <?php
        }
        ?>
        <div class="main-feed">
            <?php 
            Home::displayFeed();?>
        </div>
    </main>
    <script src="script/displayUploadImg.js"></script>
</body>
</html>