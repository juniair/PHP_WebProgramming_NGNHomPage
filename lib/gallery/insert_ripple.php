<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-06-06
 * Time: 오후 4:48
 */
    session_start();
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $table = $_GET['table'];
    $num = $_GET['num'];

    $title = $_GET['title'];
    $msg = $_POST[message];
    if($user_id) {
        include ("../config.php");


        $sql = "INSERT INTO free_ripple (id, content, name, message)";
        $sql .= "VALUES('$user_id', '$title', '$user_name', '$msg')";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        mysqli_close($db);

        echo "
                <script>location.href='../../gallery_cources/board/view.php?table=$table&num=$num';</script>
            ";
    }