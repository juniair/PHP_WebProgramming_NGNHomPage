<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-06-04
 * Time: 오후 7:56
 */
    session_start();
    include ("config.php");
    $username = $_SESSION['user_id'];

    if($_POST['password'] == "") {
        $password = $_SESSION['user_pw'];
    }
    else {
        $password = md5($_POST['password']);
    }

    $rank = $_POST['rank'];
    $student_id = $_POST['student_id'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "UPDATE member SET password = '$password', rank = '$rank', student_id ='$student_id', address='$address', phone='$phone', email='$email' WHERE id='$username'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

    // 게시물 작성을 위한 세션 값을 바꾸어 준다.
    $_SESSION['user_rank'] = $rank;
    $_SESSION['student_id'] = $student_id;
    $_SESSION['user_addr'] = $address;
    $_SESSION['user_phone'] = $phone;
    $_SESSION['user_email'] = $email;
    mysqli_close($db);

    echo "
        <script>   
            alert('Scucces');
            location.href = '../';
        </script>
    ";

?>