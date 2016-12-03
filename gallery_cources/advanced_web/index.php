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
                    <a href="../../about">About</a>
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
                        <a class="menu-item " href="../web">
                            Web Programming
                        </a>
                        <a class="menu-item selected" href="../">
                            Advanced Web Programming
                        </a>
                    </nav>
                </div>
                <div class="three-fourths column markdown-body">
                    <h1 class="page-title">
                        Advanced Web Programming
                    </h1>
                    <ul>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/42mxljjh9hqer5l/chapter01.pdf?dl=0">
                                Chapter1 Introduce C# & .NET Framework
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/pranqxcgvq9mkdv/chapter02.pdf?dl=0">
                                Chapter2 Basic C#
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/1q1icircmwuea2j/chapter03.pdf?dl=0">
                                Chapter3 Program element & Data type
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/kwzc1puycojjkkd/chapter04.pdf?dl=0">
                                Chapter4 Control statement & Exception handling
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/y7ghju4vbzxkfyc/5%EC%9E%A5.pdf?dl=0">
                                Chapter5 Method
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/47fr6wzq6ixi6xw/chapter06.pdf?dl=0">
                                Chapter6 Array
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/pf7lph2lbbnul8e/chapter07.pdf?dl=0">
                                Chapter7 Object-Oriented
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/0ukdgvfx7o1xu5x/chapter08.pdf?dl=0">
                                Chapter8 Class & Object
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/5wcmea5992wy9jb/chapter09.pdf?dl=0">
                                Chapter9 Inheritance
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.dropbox.com/s/bsld35xes1pwdzw/chapter10.pdf?dl=0">
                                Chapter10 Reference
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

