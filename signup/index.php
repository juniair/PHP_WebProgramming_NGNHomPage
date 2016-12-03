
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
        <script src="../js/join.js"></script>
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
                    <a href="../login/">Sign in</a>
                    <a class="active" href="./">Sign up</a>
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
                    <form accept-charset="UTF-8" action="../lib/member_insert.php" autocomplete="off" class="setup-form js-signup-form" data-form-nonce="261e5bfe0b55be9cc7cb3f27d887de77f79bad80" id="signup-form" method="post">
                        <h2>
                            Create your personal account
                        </h2>
                        <!-- 아이디 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label autofocus="autofocus" for="user_login" name="user[login]">ID</label>
                            </dt>
                            <dd>
                                <input  autofocus="autofocus" class="form-control" id="id" name="user_id" size="30" type="text" />
                            </dd>
                            <p class="note">아이디는 영문, 숫자, 언더스코어(_), 하이픈(-)이 포함된 8~20자 입니다.</p>
                        </dl>

                        <!-- 비밀번호 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="user_password" name="user[login]">Password</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="pass" name="password" size="30" type="password" />
                            </dd>
                            <p class="note">비밀번호는 영문, 숫자, 언더스코어(_), 하이픈(-)이 포함된 8~20자 입니다.</p>
                        </dl>

                        <!-- 비밀번호 확인 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="user_confirm_password" name="user[email]">Confirm Password</label>
                            </dt>
                            <dd>
                                <input class="form-control" id="confirm_pass" name="user[confirm_password]" size="30" type="password" />
                            </dd>
                        </dl>

                        <!-- 이름 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="name" name="user[name]">Name</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="nn" name="name" size="30" type="text" />
                            </dd>
                        </dl>
                        <!-- 직급 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label>Rank</label>
                            </dt>
                            <dd>
                                <select class="form-select" name="rank">
                                    <option>-----</option>
                                    <option value="교수">교수</option>
                                    <option value="박사">박사</option>
                                    <option value="석사">석사</option>
                                    <option value="학사">학사</option>
                                    <option value="졸업생">졸업생</option>
                                </select>
                            </dd>
                        </dl>

                        <!-- 학번 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="std_id" name="user[std_id]">Student ID</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="stdid" name="student_id" size="30" type="text"/>
                            </dd>
                            <p class="note">학번은 교수 혹은 졸업생은 입력하지 않습니다.</p>
                        </dl>

                        <!-- 전화번호 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="phone" name="user[phnoe]">Phone</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="phoned" name="phone" size="30" type="text" />
                            </dd>
                        </dl>

                        <!-- 이메일 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="email" name="user[email]">e-mail</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="email" name="email" size="30" type="text" />
                            </dd>
                        </dl>

                        <!-- 주소 -->
                        <dl class="form-group">
                            <dt class="input-label">
                                <label for="addr" name="user[addr]">Address</label>
                            </dt>
                            <dd>
                                <input class="form-control"  id="address" name="address" size="30" type="text" />
                            </dd>
                        </dl>


                        <div class="form-actions">
                            <button type="button" class="btn btn-primary" id="signup_button" >Register</button>
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

