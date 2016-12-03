<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-27
 * Time: 오후 8:57
 */
define("HOST", "localhost");
define("USER", 'root');
define("PWD", "1234");
define("DB", "ngn site_db");

$db = mysqli_connect(HOST, USER, PWD, DB) or die(mysqli_error());

mysqli_query($db, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>