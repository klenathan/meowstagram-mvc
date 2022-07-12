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
    
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/user.css">
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/style.css">
    <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/post.css">

    <title> <?php echo $username;?> </title>

</head>
<body>
    <header>
        <?php
        $header = new Header();
        ?>
    </header>

    <main>
        <div class="user-info-wrapper">
            <div class="avatar-username-wrapper">
                <img src="data/userAvatar/<?php echo $username;?>.jpg" 
                alt="userAvatar" class="user-avatar">
            </div>

            <div class="detail-user-info">
                <p class="username">
                    <?php
                    echo $username;
                    ?>
                </p>
                <p>
                    <?php
                    echo $userEmail;
                    ?>
                </p>
            </div>
        </div>

        <div class="post-feed">
            <div class="user-post">
                <img src="data/postImage/62b94bb65e084.jpg" 
                class="post-img" alt="62b94bb65e084">
            </div>

            <div class="user-post">
                <img src="data/postImage/62b94bb65e084.jpg" 
                class="post-img" alt="62b94bb65e084">
            </div>

            <div class="user-post">
                <img src="data/postImage/62b94bb65e084.jpg" 
                class="post-img" alt="62b94bb65e084">
            </div>
            
        </div>
    </main>
</body>
</html>