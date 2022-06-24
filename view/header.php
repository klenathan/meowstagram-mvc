<div>
    <ul>
        <li id="home-logo">
            <a href="/">Home</a>
        </li>
        <li id="search-wrap">
            <input type="text" name="search" id="search">
        </li>
        <li class="user-info-wrap">
            <?php
            if (isset($_COOKIE["user"])){
                echo '
                
                    <a href="/'.$_COOKIE["user"].'">'.$_COOKIE["user"].'</a>
                ';
            }
            else {
                echo
                '
                <a href="/login">Login</a>
                ';
                }
            ?>
            <?php
            if(isset($_COOKIE["user"])){
                echo '
                <a href="/login/signOut">Sign out</a>
                ';
            }
            ?>
        </li>
        
    </ul>
</div>