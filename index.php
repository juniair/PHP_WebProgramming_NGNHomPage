<?php
    session_start();

    include ("lib/config.php");

    $table ="notice_board";
    $sql = "SELECT * FROM $table ORDER BY num DESC";
    
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
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
        <link href="css/primer.css" rel="stylesheet">
        <link href="css/myCSS.css" rel="stylesheet">
      
        <!-- title logo-->
        <link rel="icon" href="img/NGN_logo.png">
        <!-- title logo-->

        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="js/jqFancyTransitions.js" type="text/javascript"></script>

    </head>
    <body>
        <header class="masthead">
            <div class="container">
                <a class="masthead-logo" href="./">
                    <span class="mega-octicon">NGN Lab.</span>
                </a>
                <!-- Navigation -->
                <nav class="masthead-nav">
                    <a href="./about/">Introduce</a>
                    <a href="./member/">Member</a>
                    <a href="gallery_cources/">Gallery & Courses</a>
                    <?php include("./lib/header/main_header.php") ?>

                </nav>
                <!-- Navigation -->
            </div>
        </header>


        <!-- Lable -->
        <div class="jumbotron">
            <div class="container">
                <h1>NGN Lab.</h1>
                <p>Next Generation Network.</p>
                <a id="tag" href="./signup" class="btn btn-reverse">Sign up for NGN Lab.</a>
            </div>
        </div>
        <!-- Lable -->

        <?php
            
            $total_recode = mysqli_num_rows($result); // 레코드 갯수
            $scale = 2; // 한 화면에 보여지는 게시물 수
            $allPage = ceil($total_recode / $scale);    // 총 페이지

            $start = ($page - 1) * $scale;
            $number = $total_recode - $start;
        ?>

        <!-- 공지사항 -->
        <div class="container about-that">
            <div class="column">
                <div class="four-fifths column">
                    <div class="one-third column">
                        <h1 class="state state-merged">Notice</h1>
                    </div>

                    <div class="three-fourths column markdown-body">
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
                                        <h2 class="my-4"><?= $item_title ?> </h2>
                                    </a>
                                    <span class="branch-ref css-truncate css-truncate-target"><?= $item_message ?></span>
                                    <p>작성일:<?= $item_date ?></p>
                                    <p class="py-0">작성자:<?= $item_name?> </p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="one-fifth column">
                    <div id='slideshowHolder'>
                        <img src='img/ngn1.jpg'  />
                        <img src='img/ngn2.jpg'  />
                    </div>

                </div>
            </div>
        </div>

        <script>
            $(document).ready( function(){
                $('#slideshowHolder').jqFancyTransitions({ width: 400, height: 275 });
            });
        </script>
            
    
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
