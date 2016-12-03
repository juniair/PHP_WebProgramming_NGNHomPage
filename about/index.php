<?php
    session_start();
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

    <title>
        About &middot; NGN Lab
    </title>
    <link href="../css/primer.css" rel="stylesheet">
    <link href="../css/myCSS.css" rel="stylesheet">
    <!-- title logo-->
    <link rel="icon" href="../img/NGN_logo.png">
    <!-- title logo-->
</head>
<body>
<!-- 재사용 부분 -->
<!-- Header -->
<header class="masthead">
    <div class="container">
        <a class="masthead-logo" href="../index.php">
            <span class="mega-octicon">NGN Lab.</span>
        </a>
        <!-- Navigation -->
        <nav class="masthead-nav">
            <a class="active" href="./">Introduce</a>
            <a href="../member/">Member</a>
            <a href="../gallery_cources/">Gallery & Courses</a>
            <?php include("../lib/header/header.php")?>

        </nav>
        <!-- Navigation -->
    </div>
</header>
<!-- Header -->
<!-- 재사용 부분 -->


<!-- 공지사항 -->
<div class="container">
    <div class="column docs-layout">
        <div class="three-fourths column markdown-body">
            <h1 class="page-title">Introduce NGN Lab</h1>
            <div class="markdown-body">
                <p>Our lab, with more than Doctoral/Masters/Undergraduate students, is engaged in extensive research in various fields related to followings :</p>

                <h3>Photographs Mobile Application</h3>
                <p><img src="../img/Photographs.jpg" width="500px"></p>

                <h3>Industry university research collaboration Technology development</h3>
                <p><li>Smart Guidance system base Beacon</li></p>
                <p><img src="../img/Beacon.jpg" width="500px"></p>


                <h3>District specialization industry promotion(R&D) Technology development</h3>
                <p><li>Customer of the participation social advertising platform base Big Data</li></p>
                <p><img src="../img/Big Data.jpg" width="500px"></p>

                <h3>Growth of foundation technology development Engineerin promisiong foundation</h3>
                <p><li>For invigorate the farm village economy development social commerce base branding</li></p>
                <p><img src="../img/Growth.jpg" width="450px"></p>

                <h3>Industry university research collaboration Technology development</h3>
                <p><li>For share house O2O service platform development</li></p>
                <p><img src="../img/sharehouse.jpg" width="500px"></p>


            </div>
        </div>
    </div>
</div>
<!-- 공지사항 -->


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

