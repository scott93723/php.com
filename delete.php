<?php
	$sqldel = "delete from users where userID = '".$ID[$x]."';";
		 if(mysql_query($sqldel)==true)
		 {
		 echo $ID[$x].'完成<br>'; 
		 }
				 else
				{
					echo '失敗<br>';
				}

?>