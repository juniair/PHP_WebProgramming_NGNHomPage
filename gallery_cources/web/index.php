<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <title>
            Cources &middot; NGN Lab
        </title>

        <link href="../../css/primer.css" rel="stylesheet">
        <link href="../../css/myCSS.css" rel="stylesheet">
        <!-- title logo-->
        <link rel="icon" type="image/x-icon" href="../../img/NGN_logo.png">
        <!-- title logo-->
    </head>
    <body>

        <!-- Navigation -->
        <header class="masthead">
            <div class="container">
                <a class="masthead-logo" href="../index.php">
                    <span class="mega-octicon">NGN Lab.</span>
                </a>

                <nav class="masthead-nav">
                    <a href="../../about/">About</a>
                    <a href="../../member">Member</a>
                    <a class="active" href="./">Gallery & Courses</a>
                    <?php include ("../../lib/header/free_cources_header.php") ?>
                </nav>
            </div>
        </header>



        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->


        <!-- 게시판 -->
        <div class="container">
            <div class="columns docs-layout">
                <div class="one-fourth column">
                    <nav class="menu docs-menu">
                        <span class="menu-heading">Gallery Menu</span>
                        <a class="menu-item " href="../" >
                            Notice
                        </a>
                        <a class="menu-item " href="../board">
                            Board
                        </a>
                    </nav>

                    <nav class="menu docs-menu">
                        <span class="menu-heading">Courses</span>
                        <a class="menu-item "  href="../mobile" >
                            Mobile Programming
                        </a>
                        <a class="menu-item selected" href="./">
                            Web Programming
                        </a>
                        <a class="menu-item " href="../advanced_web">
                            Advanced Web Programming
                        </a>
                    </nav>
                </div>
                <div class="three-fourths column markdown-body">
                     <h1 class="page-title">
                            Web Programming
                      </h1>
                        <ul>
                            <li class="mb-3">
                                    <a href="https://www.dropbox.com/s/uuh2j37sgr2iyiu/%EC%9B%B9%ED%94%84%EB%A1%9C%EA%B7%B8%EB%9E%98%EB%B0%8D%EC%9D%98%20%EA%B0%9C%EC%9A%94.pdf?dl=0">
                                        Web programming orientation
                                    </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/3rittp1tch3ul89/PHP%EC%86%8C%EA%B0%9C.pdf?dl=0">
                                    Introduce PHP
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/a319p46xwt6an20/1%EC%9E%A5.pdf?dl=0">
                                    Chapter1 Introduce PHP & Setup
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/avzhztqh1aw7fzp/2%EC%9E%A5.pdf?dl=0">
                                    Chapter2 Basic PHP
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/y4rhyj2dc1wd9sx/3%EC%9E%A5.pdf?dl=0">
                                    Chapter3 Conditional sentence & Repetition sentence
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/hco9sz81b884acy/4%EC%9E%A5.pdf?dl=0">
                                Chapter4 Arrangement & Function
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/y7ghju4vbzxkfyc/5%EC%9E%A5.pdf?dl=0">
                                    Chapter5 MySQL database
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/0fkwoft0g8vy094/6%EC%9E%A5.pdf?dl=0">
                                    Chapter6 Command MySQL
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/77ab5v61sqw1mkk/7%EC%9E%A5.pdf?dl=0">
                                    Chapter7 Connect PHP & MySQL
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/7atmwu72uzjlrn4/8%EC%9E%A5.pdf?dl=0">
                                    Chapter8 Cookie & Session
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/qmqhkbk1zobao87/9%EC%9E%A5.pdf?dl=0">
                                    Chapter9 Making sign up page
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="https://www.dropbox.com/s/6lyxhrhczpnghcw/10%EC%9E%A5.pdf?dl=0">
                                    Chapter10 Login & Logout & Change member information
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        <!-- 게시판 -->




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

