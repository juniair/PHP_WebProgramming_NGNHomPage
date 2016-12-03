<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Style Sheet -->
        <link href="../css/primer.css" rel="stylesheet">
        <link href="../css/github_session.css" rel="stylesheet">
        <link href="../css/myCSS.css" rel="stylesheet">

        <!-- title logo-->
        <link rel="icon" href="../img/NGN_logo.png">

        <title>Welcome NGN Lab.</title>

    </head>

    <body class="logged-out">

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
                    <a class="active" href="./">Sign in</a>
                </nav>
                <!-- Navigation -->
            </div>
        </header>
        <!-- Header -->
        <!-- 재사용 부분 -->

        <!-- 회원정보 등록 컨텐츠 -->
        <div role="main" class="main-content">
            <div class="auth-form " id="login">
                <form id="login_form" accept-charset="UTF-8" action="">
                    <div class="auth-form-header">
                        <h1 class="text-center">Sign in to NGN Lab.</h1>
                    </div>
                    <div id="js-flash-container">

                    </div>
                    <div class="auth-form-body">
                        <label for="username">
                            ID
                        </label>
                        <input autofocus="autofocus" class="form-control input-block" id="username" name="username" tabindex="1" type="text" />
                        <label for="password">
                            Password
                        </label>
                        <input class="form-control form-control input-block" id="password" name="password" tabindex="2" type="password" />
                        <input id="login_button" class="btn btn-primary btn-block" tabindex="3" value="Sign in" type="button" onclick="login()"/>
                    </div>
                </form>
                <p class="create-account-callout mt-3">
                    Sign up for NGN?
                    <a href="../signup/" >Create an account</a>
                    .
                </p>
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


        <!-- Java Script -->
        <script src="../js/jquery-1.12.4.min.js"></script>
        <script src="../js/login.js"></script>
    </body>
</html>
