<?php
$sqlupdata = "UPDATE  `abm`.`users` SET  `username` =  '$username',`loginname` =  '$account',`password` =  '$pwd',`enable` =  '$enable',`description` =  '$description',`crdate` = NOW( ) ,`cruser4users` =  '$cruser4users' WHERE  `users`.`userID` ='$ID';";
        if(mysql_query($sqlupdata)==true)
		{
		echo '<meta http-equiv=REFRESH CONTENT=0;url="A1.1UBase.php">';
		}
		else
		{
			echo '失敗';
			}
?>