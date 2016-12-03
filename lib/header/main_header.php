<?php
    if(!$_SESSION['user_id'])
    {
?>
    <a href="./login/">Sign in</a>
<?php
    }
    else {
?>
    <a href="./lib/logout.php">Sign out</a>
    <a href="./profile">Edit Profile</a>
    <script>
        $(document).ready(function () {
            $("#tag").attr("href", "./about").text("Welcome to NGN Lab.");
        })

    </script>
<?php
    }
?>