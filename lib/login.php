<?php

    if( isset($_POST['username']) && isset($_POST['password']) ) {

        $user_name = $_POST["username"];
        $password = md5($_POST["password"]);

        include_once('config.php');
        $sql = "SELECT * FROM member WHERE (id='$user_name' AND password='$password')";
        $result = mysqli_query($db, $sql);
        $find_cnt = mysqli_num_rows($result);
        // 회원 아이디와 비밀번호 DB에 검색 결과에 따른 처리

        if( $find_cnt == 1) {
            $row = mysqli_fetch_array($result);

            // 쿠키에 등록할 데이터 저장
            $id = $row['id'];
            $pw = $row['password'];
            $student = $row['student_id'];
            $name = $row['name'];
            $rank = $row['rank'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];
            session_start();

            // 저장된 데이터 세션에 등록
            $_SESSION['user_id'] = $id;
            $_SESSION['user_pw'] = $pw;
            $_SESSION['student_id'] = $student;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_rank'] = $rank;
            $_SESSION['user_phone'] = $phone;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_addr'] = $address;
            
            // 제이쿼리 post().done()에 사용 되는 함수의 인자 값을 전달
            echo "success";
        }
        else {
            echo "failed";
        }
    }
?>

