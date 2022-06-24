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
</head>
<body>

    <header>
        <?php
        $header = new Header();
        ?>
    </header>

    <main>
        <h1>Hello</h1>

        <p><?php 
        echo $_COOKIE["darkmode"];
        echo $_COOKIE["user"];
        
        ?></p>
        
        <div>
            <?php 
            $post = new Post();
            $post->renderPost();?>
        </div>
    </main>
</body>
</html>