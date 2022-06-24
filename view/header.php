<div>
    <ul>
        <li id="home-logo">
            <a href="/">Home</a>
        </li>
        <li id="search-wrap">
            <input type="text" name="search" id="search">
        </li>
        <li>
            <?php
            $username = isset($_COOKIE["user"]) ? $_COOKIE["user"] : "Login"
            ?>
            <a href="/<?php echo $username?>"><?php
            echo $username;
            ?></a>
        </li>
        <?php
        if(isset($_COOKIE["user"])){
            echo '
            <li>
                <a href="/login/signOut">Sign out</a>
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