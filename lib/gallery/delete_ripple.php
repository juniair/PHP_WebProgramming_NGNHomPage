<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-06-06
 * Time: 오후 4:30
 */
    include ("../config.php");
    $table = $_GET['table'];
    $num = $_GET['num'];
    $ripple_num = $_GET['ripple_num'];
    $sql = "DELETE FROM free_ripple WHERE num=$ripple_num";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    mysqli_close($db);
    echo "
                <script>location.href='../../gallery_cources/board/view.php?table=$table&num=$num';</script>
            ";
?>