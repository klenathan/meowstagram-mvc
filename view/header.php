<div>
    <ul>
        <li id="home-logo">
            <a href="/">Home</a>
        </li>
        <li id="search-wrap">
            <input type="text" name="search" id="search">
        </li>
        <li>
            <a href="/<?php echo $username?>">My account</a>
        </li>
        <?php
        if(isset($_COOKIE["user"])){
            echo '
            <li>
                <a href="/'.$_COOKIE["user"].'">menu?</a>
            </li>';
        } else {
            echo '
            <li>
                <a href="/login">Login</a>
            </li>';
        }
        ?>
    </ul>
</div>