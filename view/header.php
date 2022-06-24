<div>
    <ul>
        <li id="home-logo">
            <a href="/">Meowstagram</a>
        </li>
        <li id="search-wrap">
            <input type="text" name="search" id="search">
            
        </li>
        <li>
            <a href="." onClick='toggleLightMode()'>
                Toggle color mode: <?php echo $_COOKIE["darkmode"]?>
            </a>
        </li>
        <li class="user-info-wrap">
            <?php
            if (isset($_COOKIE["user"])){
                echo '
                
                    <a href="/'.$_COOKIE["user"].'">'.$_COOKIE["user"].'</a>
                    <a href="/login/signOut">Sign out</a>
                ';
            }
            else {
                echo
                '
                <a href="/login">Login</a>
                ';
                }
            ?>
            <!-- <?php
            if(isset($_COOKIE["user"])){
                echo '
                <a href="/login/signOut">Sign out</a>
                ';
            }
            ?> -->
        </li>
        
    </ul>
</div>


<script src="script/toggleLightmode.js"></script>