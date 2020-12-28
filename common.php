<?php
$db_server = "127.0.0.1";
$db_name = "food_company";   //資料庫名子
$db_user = "root";    //Mysql使用者帳號
$db_password = "1234";  //密碼


$connServer = mysql_connect($db_server, $db_user, $db_password) or trigger_error(mysql_error(),E_USER_ERROR); 

//if(!@mysql_connect($db_server, $db_user, $db_password))
  //      die("無法對資料庫連線");

mysql_query('SET NAMES utf8',$connServer);
mysql_query('SET CHARACTER_SET_CLIENT=utf8',$connServer);
mysql_query('SET CHARACTER_SET_RESULTS=utf8',$connServer);

if(!@mysql_select_db($db_name))  //使用哪個資料庫
        die("無法使用資料庫");
?>