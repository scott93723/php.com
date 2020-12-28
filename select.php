<?php
    include("common.php"); //資料庫連線套用
	$data = "SELECT * FROM users where loginname != 'admin';"; //查詢FROM 資料表 where 判斷式(府和判斷式的才搜尋
	        $resultub = mysql_query($data);
			while($rowub = mysql_fetch_array($resultub)){ //顯示資料
				 echo $rowub['userID'];
			}
?>