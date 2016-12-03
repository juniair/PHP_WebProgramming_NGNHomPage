<?php


    include "config.php";
    $user_id = $_POST['user_id'];
    $user_pw = md5($_POST['password']);
    $user_name = $_POST['name'];
    $user_rank = $_POST['rank'];
    $user_stdid = $_POST['student_id'];
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $user_addr = $_POST['address'];

    $sql = "SELECT * from member WHERE id='$user_id'";
    $result = mysqli_query($db, $sql);
    $find_recode = mysqli_num_rows($result);
    if($find_recode) {
        echo("
			<script>
			    alert('이미 사용 중인 아이디입니다. 다시 입력하세요.');
			    location.href='../signup';
			</script>
        ");
    }
    else {

        $sql="insert into member(id,password,student_id, name, rank,address,email,phone)";
        $sql.="values('$user_id','$user_pw','$user_stdid','$user_name','$user_rank','$user_addr','$user_email','$user_phone')";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

        mysqli_close($db);

        echo("
			<script>
			    alert('성공적으로 등록 되었습니다.');
				location.href='../';
			</script>
    ");
    }

?>


