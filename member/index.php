<?php session_start(); ?>
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
    </head>

    <body>

        <!-- Navigation -->
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
                    <a class="active" href="./member/">Member</a>
                    <a href="../gallery_cources/">Gallery & Courses</a>
                    <?php include "../lib/header/header.php" ?>
                </nav>
                <!-- Navigation -->
            </div>
        </header>
        <!-- Header -->
        <!-- 재사용 부분 -->

        <div class="container">
            <div class="column docs-layout">
                <div class="column" >
                    <div class="markdown-body">
                        <h2>Professor</h2>
                    </div>
                    <div class="my-5 column">
                        <div class=" column">
                            <img class="one-third column" src="../img/professor.jpg"/>
                            <div class="two-thirds column">
                                <h2><strong>문일영</strong></h2>

                                <p> 모바일 프로그래밍, 무선 인터넷, 모바일 IP </p>
                                <p> Tel : 041-560-1493 </p>
                                <p> Email : iymoon@koreatech.ac.kr</p>
                            </div>
                        </div>

                     </div>

                    <div class="markdown-body">
                        <h2>Students</h2>
                    </div>
                    <p>
                        <h3>[Doctoral Course]</h3>
                    </p>
                    <p id="doctor">박진태
                        <span id="doctor_mail" class="tooltipped tooltipped-n tooltipped-no-delay" aria-label="wlsxo05@koreatech.ac.kr">
                            <img src="../img/email.jpg" width="40" height="25" align="absmiddle" border="0" alt="e-mail" data-recalc-dims="1" />
                        </span>
                        <span id="doctor_phone" class="tooltipped tooltipped-n tooltipped-no-delay" aria-label="010-2368-6591">
                            <img class="tooltipped tooltipped-n" src="../img/phone.jpg" width="30" height="20" border="0" alt="phone" align="absmiddle" data-recalc-dims="1" />
                        </span>
                    </p>
                    <p>
                    <h3>[Master Course]</h3>
                    </p>
                    <p id="master">표경수
                        <span id="master_id" class="tooltipped tooltipped-n tooltipped-no-delay" aria-label="gkgkgy@koreatech.ac.kr">
                            <img src="../img/email.jpg" width="40" height="25" align="absmiddle" border="0" alt="e-mail" data-recalc-dims="1" />
                        </span>
                        <span id="master_phon" class="tooltipped tooltipped-n tooltipped-no-delay" aria-label="010-7706">
                            <img class="tooltipped tooltipped-n" src="../img/phone.jpg" width="30" height="20" border="0" alt="phone" align="absmiddle" data-recalc-dims="1" />
                        </span>
                    </p>
                    <h3>[Undergraduate Course]</h3>
                    </p>
                    <p id="college">
                        김현진, 김경준, 김재환, 현경수, 최고은
                    </p>
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
