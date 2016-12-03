<?php
    session_start();
    include("../lib/config.php");
    $username = $_SESSION['user_id'];
    $table = $_GET['table'];
    $num = $_GET['num'];
    $page = $_GET['page'];
    
    $sql = "SELECT * FROM $table WHERE num=$num";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result);

    $item_id = $row['id'];
    $item_num = $row['num'];
    $item_title = $row['title'];
    $item_name = $row['name'];
    $item_message = str_replace("\n", "<br>", $row['message']);
    $item_message = str_replace(" ", "&nbsp;", $item_message);
    $item_date = $row['date'];

    $file_name[0]   = $row['file_name_0'];
    $file_name[1]   = $row['file_name_1'];
    $file_name[2]   = $row['file_name_2'];

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
        <style>
                #foo tr {border:solid blue; border-width: 10px 4px 10px}
        </style>
    </head>
    <body>

        <!-- Navigation -->
        <header class="masthead">
            <div class="container">
                <a class="masthead-logo" href="../">NGN Lab.</a>

                <nav class="masthead-nav">
                    <a href="../about/">About</a>
                    <a href="../member">Member</a>
                    <a class="active" href="./">Gallery & Courses</a>
                    <?php include("../lib/header/header.php") ?>
                </nav>
            </div>
        </header>

        <!-- 게시판 -->
        <div class="container">
            <div class="columns docs-layout">
                <div class="one-fourth column">
                    <nav class="menu docs-menu">
                        <span class="menu-heading">Gallery Meun</span>
                        <a class="menu-item selected" href="./">
                            Notice
                        </a>
                        <a class="menu-item " href="./board">
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
                            <div class="board_view">
                                <table>
                                    <caption></caption>
                                    <colgroup>
                                        <col width="200">
                                        <col width="5000">
                                    </colgroup>
            
                                    <tbody>
                                        <tr style="border-top:solid;border-top-color: steelblue">
                                            <th>제목</th>
                                            <td colspan="3"><?=$item_title?></td>
                                        </tr>
                
                                        <tr>
                                            <th>작성자</th>
                                            <td><?=$item_name?></td>
                                        </tr>
                                        <tr>
                                            <th>작성일</th>
                                            <td colspan="3">2016-06-02 13:49</td>
                                        </tr>
                                        <tr class="h300">
                                            <th>내용</th>
                                            <td colspan="3">
                                                <p><?= $item_message ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>첨부파일</th>
                                            <td colspan="3">
                                                <?php
                                                    for($i = 0; $i < 3; $i++) {
                                                        if($file_name[$i]) {
                                                            $real_name = $file_name[$i];

                                                ?>
                                                <a href='../lib/gallery/download.php?table=<?= $table ?>&num=<?= $num ?>&real_name=<?= $real_name ?>'>
                                                    <img class='pl-1 pr-2' src='../img/save.jpg' alt='첨부파일'><?=$real_name?>
                                                </a>
                                                <?php
                                                        }

                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p align="right">
                                <?php
                                    if($username == $item_id) {
                                ?>
                                <a class='btn btn-primary' href='write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>'>수정</a>
                                <?php
                                    }
                                ?>
                                <button class="btn btn-outline" type="button" >List</button>
                            </p>    

                    </div>
                </div>
            </div>
        </div>


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
