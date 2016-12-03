<?php
    if(!$_SESSION['user_id'])
    {
        ?>
        <a id="sign_in" href="../login/">Sign in</a>
        <a id="sign_up"href="./signup/">Sign up</a>
        <?php
    }
    else {
        ?>
        <a href="../lib/logout.php"">Sign out</a>
        <a id="profile" href="../profile">Edit Profile</a>
        <?php
    }
?>