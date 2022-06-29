<?php 
    $lightmode = isset($_COOKIE["darkmode"])? $_COOKIE["darkmode"] : "lightmode"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/home.css">
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/style.css">
</head>
<body>

    <header>
        <?php
        $header = new Header();
        ?>
    </header>

    <main>
        <div class="upload-post-wrap">
            <div class="upload-form-wrap">
                <form action="post/uploadpost" method="post">
                    <div class="upload-post-detail">
                        <input type="text" name="postContent" id="postContent">
                        <input type="file" name="postFile" id="postFile">
                    </div>
                    <input type="submit" value="Post" id="uploadPostBtn">
                </form>
            </div>
            <img src="" alt="post image">
        </div>
        
        <div class="main-feed">
            <?php 
            Home::displayFeed();?>
        </div>
    </main>
</body>
</html>