<link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpg">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/header.css">
<?php
    session_start();
    include("core/controller.php");
    include("core/dataHandle.php");
    include("controller/header.php");
    include("model/authentication.php");
    

    include("controller/routing.php");
    #null for default page
    $reservedUrl = array("home", "login", "signup", "user", "admin", "post", null); 
    $route = new Route($reservedUrl, "home");
    // session_destroy();
?>

