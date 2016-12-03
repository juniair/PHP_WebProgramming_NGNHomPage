<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-06-05
 * Time: 오후 6:54
 */
    session_start();
    include_once ("../utf8_library.php");

    $real_name = iconv("UTF-8","EUC-KR",$_GET['real_name']);

    $file_path = '../../data/'.$real_name;

    $file_size = filesize($file_path);
    $file_name = mb_basename($file_path);
    if( is_ie() ) {
        $file_name = utf2euc($file_name);
    }

    send_attachment($file_name, $file_path);

?>