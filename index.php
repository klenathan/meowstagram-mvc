<link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpg">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/header.css">
<?php

    include("core/controller.php");
    include("controller/header.php");
    

    include("controller/routing.php");
    #null for default page
    $reservedUrl = array("home", "user", "admin", "post", null); 
    $route = new Route($reservedUrl, "home");
?>

