<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-06-04
 * Time: 오후 7:47
 */
    session_start();
    include("../lib/config.php");
    $username = $_SESSION['user_id'];
    $sql = "SELECT * FROM member WHERE id='$username'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result);
    mysqli_close($db)
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">


        <title>Welcome NGN Lab.</title>
        <link href="../css/primer.css" rel="stylesheet">
        <link href="../css/myCSS.css" rel="stylesheet">
        <!-- title logo-->
        <link rel="icon" href="../img/NGN_logo.png">
        <!-- title logo-->
        
        <script src="../js/jquery-1.12.4.min.js"></script>
        <script src="../js/setting.js"></script>
    </head>
    <body>
        <!-- 재사용 부분 -->
        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <a class="masthead-logo" href="../">
                    <span class="mega-octicon">NGN Lab.</span>
                </a>
                <!-- Navigation -->
                <nav class="masthead-nav">
                    <a href="../about/">About</a>
                    <a href="../member/">Member</a>
                    <a href="../gallery_cources/">Gallery & Courses</a>
                    <?php include("../lib/header/header.php") ?>
                </nav>
                <!-- Navigation -->
            </div>
        </header>
        <!-- Header -->
        <!-- 재사용 부분 -->

        <!-- 회원정보 등록 컨텐츠 -->
        <div class="register">
            <div class="setup-main ">
                <div class="setup-form-container" >
                    <form accept-charset="UTF-8" name="edit-from" action="../lib/setting.php" class="setup-form js-signup-form" id="edit_form" method="post">
                        <h2>
                            Edit your profile.
                        </h2>

                        <!-- 비밀번호 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="user_password"">Password</label>
                            </dt>
                            <dd>
                                <input autofocus="autofocus" class="form-control"  id="password" name="password" size="30" type="password" />
                            </dd>
                        </dl>

                        <!-- 비밀번호 확인 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="user_confirm_password" name="confirm_password">Confirm Password</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="confirm_password" size="30" type="password" />
                            </dd>
                        </dl>

                        <dl class="form-group">
                            <dt class="input-label">
                                <label>Rank</label>
                            </dt>
                            <dd>
                                <select id="rank" class="form-select" name="rank">
                                    <?php
                                    if($row['rank'] == "교수") {
                                        echo '
                    <option >-----</option>
                    <option value="교수" selected="selected">교수</option>
                    <option value="박사">박사</option>
                    <option value="석사">석사</option>
                    <option value="학사">학사</option>
                    <option value="졸업생">졸업생</option>
                ';
                                    }
                                    else if($row['rank'] == "박사") {
                                        echo '
                    <option >-----</option>
                    <option value="교수">교수</option>
                    <option value="박사" selected="selected">박사</option>
                    <option value="석사">석사</option>
                    <option value="학사">학사</option>
                    <option value="졸업생">졸업생</option>
                ';
                                    }
                                    else if($row['rank'] == "석사") {
                                        echo '
                    <option >-----</option>
                    <option value="교수" selected="selected">교수</option>
                    <option value="박사">박사</option>
                    <option value="석사" selected="selected">석사</option>
                    <option value="학사">학사</option>
                    <option value="졸업생">졸업생</option>
                ';
                                    }
                                    else if($row['rank'] == "학사") {
                                        echo '
                    <option >-----</option>
                    <option value="교수">교수</option>
                    <option value="박사" >박사</option>
                    <option value="석사" >석사</option>
                    <option value="학사" selected="selected">학사</option>
                    <option value="졸업생">졸업생</option>
                ';
                                    }
                                    else {
                                        echo '
                    <option >-----</option>
                    <option value="교수">교수</option>
                    <option value="박사">박사</option>
                    <option value="석사">석사</option>
                    <option value="학사">학사</option>
                    <option value="졸업생" selected="selected">졸업생</option>
                ';
                                    }
                                    ?>
                                </select>
                            </dd>
                        </dl>

                        <!-- 학번 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="std_id" name="user[std_id]">Student ID</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="std_id" name="student_id" size=\"30\" type="text" value="<?php echo $row['student_id']?>" />

                            </dd>
                        </dl>

                        <!-- 전화번호 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="phone" name="user[phone]">Phone</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="phone" name="phone" size="30" type="text" value="<?php echo $row['phone'] ?>"/>
                            </dd>
                        </dl>

                        <!-- 이메일 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="email">e-mail</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="email" name="email" size="30" type="text" value="<?php echo $row['email'] ?>"/>
                            </dd>
                        </dl>

                        <!-- 주소 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="addr">Address</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="addr" name="address" size="30" type="text" value="<?php echo $row['address'] ?>"/>
                            </dd>
                        </dl>


                        <div class="form-actions">
                            <button type="button" class="btn btn-primary" id="btn_edit" >Save</button>
                            <a class="btn" href="../">Cancel</a>
                        </div>


                    </form>
                </div>
                <!-- /.setup-form-container -->
            </div>
        </div>
        <!-- 회원정보 등록 컨텐츠 -->

    <!-- 재사용 -->
    <!-- Footer -->
    <div class="container">
        <footer class="footer">
            Copyright &copy; NGN Lab. 2016
        </footer>
    </div>
    <!-- Footer -->
    <!-- 재사용 -->
    </body>
</html>

