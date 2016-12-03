<?php
    session_start();

    
    $table = $_GET['table'];
    $mode = $_GET['mode'];
    if($mode == "modify") {
        $num = $_GET['num'];
        $page = $_GET['page'];
        include ("../lib/config.php");
        $sql = "SELECT * FROM $table WHERE num=$num";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));

        $row = mysqli_fetch_array($result);
        $item_title = $row['title'];
        $item_message = $row['message'];

        $file_name[0] = $row['file_name_0'];
        $file_name[1] = $row['file_name_1'];
        $file_name[2] = $row['file_name_2'];
    }


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
        <script src="../js/jquery-1.12.4.min.js"></script>
        <script src="../js/upload.js"></script>
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
                    <?php include ("../lib/header/header.php") ?>
                </nav>
            </div>
        </header>

        <!-- 게시판 -->
        <div class="container">
            <div class="columns docs-layout">
                <div class="one-fourth column">
                    <nav class="menu docs-menu">
                        <span class="menu-heading">Gallery Meun</span>
                        <a class="menu-item " href="./">
                            Notice
                        </a>
                        <a class="menu-item selected " href="./board">
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
                            if($mode == "modify") {
                        ?>
                        <form name="form" id="form" action="../lib/gallery/notice_insert.php?mode=modify&num=<?= $num ?>&page=<?=$page?>&table=<?=$table?>" method="post" enctype="multipart/form-data">
                        <?php
                            }
                            else {
                        ?>
                            <form name="form" id="form" action="../lib/gallery/notice_insert.php?table=<?= $table ?>"
                                  method="post" enctype="multipart/form-data">
                        <?php
                            }
                        ?>
                            <div class="board_view">
                                <table>
                                    <caption></caption>
                                    <colgroup>
                                        <col width="130">
                                        <col width="">
                                        <col width="130">
                                        <col width="270">
                                    </colgroup>
                                    <tbody>
                                    <tr style="border-top: solid; border-top-color: steelblue">
                                        <th>제목</th>
                                        <td colspan="3"><input id="title" name="title" type="text" style="width:95%;" value="<?= $item_title ?>" maxlength="100"/>

                                        </td>
                                    </tr>

                                    <tr>
                                        <th>첨부파일</th>
                                        <td colspan="3">
                                            <input type="file" id="attachFile1" name="upload_file[]" style="width:90%;"/>
                                            <?php
                                                if ($mode == "modify" && $file_name[0])
                                                {

                                            ?>
                                            <div class="column">
                                                <?=$file_name[0]?> 등록되어 있습니다.
                                                <input type="checkbox" name="del_file[]" value="0"> 삭제
                                            </div class=>
                                            <?php
                                                }
                                            ?>
                                            <input type="file" id="attachFile2" name="upload_file[]" style="width:90%;"/>
                                            <?php
                                            if ($mode == "modify" && $file_name[1])
                                            {

                                                ?>
                                                <div class="column">
                                                    <?=$file_name[1]?> 등록되어 있습니다.
                                                    <input type="checkbox" name="del_file[]" value="0"> 삭제
                                                </div class=>
                                                <?php
                                            }
                                            ?>
                                            <input type="file" id="attachFile3" name="upload_file[]" style="width:90%;"/>
                                            <?php
                                            if ($mode == "modify" && $file_name[2])
                                            {

                                                ?>
                                                <div class="column">
                                                    <?=$file_name[2]?> 등록되어 있습니다.
                                                    <input type="checkbox" name="del_file[]" value="0"> 삭제
                                                </div class=>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <tr class="h300">
                                        <th>내용</th>
                                        <td colspan="3">
                                            <textarea name="message" id="message" rows="20" style="width:100%;"><?=$item_message?></textarea>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
						</form>
						
							<p align="right">
								<button id="btn_submit" class="btn btn-outline" type="button" >Save</button>
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
