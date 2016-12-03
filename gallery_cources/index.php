<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $user_rank = $_SESSION['user_rank'];
    include ("../lib/config.php");
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $table = "notice_board";
    $sql = "SELECT * FROM $table ORDER BY num DESC";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

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
            Notice &middot; NGN Lab
        </title>

        <link href="../css/primer.css" rel="stylesheet">
        <link href="../css/myCSS.css" rel="stylesheet">
        <link href="../css/github_framework.css" rel="stylesheet">
        <!-- title logo-->
        <link rel="icon" type="image/x-icon" href="../img/NGN_logo.png">
        <!-- title logo-->
    </head
    <?php
        $total_recode = mysqli_num_rows($result); // 레코드 갯수
        $scale = 5; // 한 화면에 보여지는 게시물 수
        $allPage = ceil($total_recode / $scale);    // 총 페이지

        $start = ($page - 1) * $scale;

        $number = $total_recode - $start;
    ?>
    <body>
    <!-- Navigation -->
    <header class="masthead">
        <div class="container">
            <a class="masthead-logo" href="../index.php">
                <span class="mega-octicon">NGN Lab.</span>
            </a>

            <nav class="masthead-nav">
                <a href="../about/">About</a>
                <a href="../member/">Member</a>
                <a class="active" href="./index.php">Gallery & Courses</a>
                <?php include ("../lib/header/header.php") ?>
            </nav>
        </div>
    </header>

    <!-- 게시판 -->
    <div class="container">
        <div class="columns docs-layout">
            <div class="one-fourth column">
                <nav class="menu docs-menu">
                    <span class="menu-heading">Gallery Menu</span>
                    <a class="menu-item selected" href="#">
                        Notice
                    </a>
                    <a class="menu-item " href="board/">
                        Board
                    </a>
                </nav>

                <nav class="menu docs-menu">
                    <span class="menu-heading">Courses</span>
                    <a class="menu-item " href="./mobile">
                        Mobile Programming
                    </a>
                    <a class="menu-item " href="./web">
                        Web Programming
                    </a>
                    <a class="menu-item " href="./advanced_web">
                        Advanced Web Programming
                    </a>
                </nav>
            </div>
            <div class="three-fourths column">
                <div class="markdown-body">
                    <h1 class="page-title">Notice</h1>
                    <?php
                    if($user_id && ($user_rank == "교수" || $user_rank == "박사" || $user_rank == "석사")) {
                        ?>
                        <div class="form-actions">
                            <a class="btn btn-primary" href="../write_form.php?table=notice_board">글쓰기</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <ul class="repo-list">
                    <?php
                    for($i = $start; $i < $start+$scale && $i < $total_recode; $i++) {
                        mysqli_data_seek($result, $i);
                        $row = mysqli_fetch_array($result) or die(mysqli_error($db));
                        $item_num = $row['num'];
                        $item_title = $row['title'];
                        $item_message = $row['message'];
                        $item_name = $row['name'];
                        $item_date = $row['date'];
                        ?>
                        <li class="repo-list-item public source">
                            <a class="link-gray-dark" href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>">
                                <h2><?= $item_title ?> </h2>
                            </a>
                            <span class="branch-ref css-truncate css-truncate-target my-4"><?= $item_message ?></span>
                            <p>작성일:<?= $item_date ?></p>
                            <p class="py-0">작성자:<?= $item_name?> </p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="paginate-container">
                    <div class="pagination">
                        <?php

                        if($page == 1) {
                            echo "<span class=\"previous_page disabled\">Previous</span>";
                        }
                        else {
                            $prevPage = $page - 1;
                            echo "<a class=\"previous_page\" href='./?page=$prevPage'>Previous</a>";
                        }
                        for($i = 1; $i <= $allPage; $i++) {

                            if($page == $i) {
                                echo "<em class='current'>$i</em>";
                            }
                            else {
                                echo "<a href='./?page=$i'>$i</a>";
                            }
                        }

                        if($page == $allPage || $allPage == 0) {
                            echo "<span class='next_page disabled'>Next</span>";
                        }
                        else {
                            $nextPage+=1;
                            echo "<a class='next_page' href='./?page=$nextPage'>Next</a>";
                        }
                        ?>

                    </div>
                </div>

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

