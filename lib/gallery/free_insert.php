<?php session_start(); ?>


<?php
    include_once ("../utf8_library.php");

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $mode = $_GET['mode'];
    $num = $_GET['num'];
    $table = $_GET['table'];
    $page = $_GET['page'];
    if(!$user_id) {
        echo("
            <script>
             window.alert('로그인 후 이용해 주세요.')
             history.go(-1)
           </script>
            ");
        exit;
    }

    // 다중 파일 업로드
    $files = $_FILES["upload_file"];
    $count = count($files["name"]);
    $upload_dir = '../../data/';

    for ($i=0; $i<$count; $i++)
    {
        $upfile_name[$i]     = $files["name"][$i];
        $upfile_tmp_name[$i] = $files["tmp_name"][$i];
        $upfile_type[$i]     = $files["type"][$i];
        $upfile_size[$i]     = $files["size"][$i];
        $upfile_error[$i]    = $files["error"][$i];

        $file = explode(".", $upfile_name[$i]);
        $file_name = $file[0];
        $file_ext  = $file[1];

        if (!$upfile_error[$i])
        {

            $uploaded_file[$i] = $upload_dir.iconv("UTF-8","EUC-KR",$upfile_name[$i]);


            if( $upfile_size[$i]  > 50000000 ) {
                echo("
                    <script>
                    alert('업로드 파일 크기가 지정된 용량(500KB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
                    history.go(-1)
                    </script>
                    ");
                exit;
            }


            if (!move_uploaded_file($upfile_tmp_name[$i], $uploaded_file[$i]) )
            {
                echo("
                        <script>
                        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                        history.go(-1)
                        </script>
                    ");
                exit;
            }
        }
    }
    include "../config.php";

    if ($mode=="modify")
    {
        $num_checked = count($_POST['del_file']);
        $position = $_POST['del_file'];

        for($i=0; $i<$num_checked; $i++)                      // delete checked item
        {
            $index = $position[$i];
            $del_ok[$index] = "y";
        }

        $sql = "select * from $table where num=$num";   // get target record
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);

        for ($i=0; $i<$count; $i++)					// update DB with the value of file input box
        {

            $field_org_name = "file_name_".$i;

            $org_name_value = $upfile_name[$i];

            if ($del_ok[$i] == "y")
            {
                $delete_field = "file_name_".$i;
                $delete_name = $row[$delete_field];
                $delete_path = "../../data/".$delete_name;

                unlink($delete_path);

                $sql = "update $table set $field_org_name = '$org_name_value'  where num=$num";
                mysqli_query($db, $sql);  // $sql 에 저장된 명령 실행
            }
            else
            {
                if (!$upfile_error[$i])
                {
                    $sql = "update $table set $field_org_name = '$org_name_value' where num=$num";
                    mysqli_query($db, $sql);  // $sql 에 저장된 명령 실행
                }
            }
        }
        $sql = "update $table set title='$title', message='$message' where num=$num";
        mysqli_query($db, $sql) or die(mysqli_error($db));  // $sql 에 저장된 명령 실행
    }
    else
    {
        if ($html_ok=="y")
        {
            $is_html = "y";
        }
        else
        {
            $is_html = "";
            $message = htmlspecialchars($message);
        }

        $sql = "insert into $table (id, name, title, message, file_name_0, file_name_1, file_name_2) ";
        $sql .= "values('$user_id', '$user_name', '$title', '$message', ";
        $sql .= "'$upfile_name[0]', '$upfile_name[1]',  '$upfile_name[2]')";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));  // $sql 에 저장된 명령 실행
    }
    mysqli_close($db);                // DB 연결 끊기

    echo "
           <script>
                location.href = '../../gallery_cources/board/?table=$table&page=$page';
           </script>
        ";
?>


