<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
<title>圖片檔案上傳</title>
</head><BODY><H3>圖檔存入相關資訊：<HR></H3>
<?php
         session_start(); 
         $_SESSION["foo"]=3;  
         require_once 'common.php';     
echo "<BLOCKQUOTE>";
echo "檔案名稱：" . $_FILES["upfile"]["name"] . "<BR>";
echo "檔案大小：" . $_FILES["upfile"]["size"] . "<BR>";
echo "檔案類型：" . $_FILES["upfile"]["type"] . "<BR>";
echo "暫存檔名：" . $_FILES["upfile"]["tmp_name"] . "<BR>";
if ( $_FILES["upfile"]["size"] > 0 ) 
{
//開啟圖片檔
$file = fopen($_FILES["upfile"]["tmp_name"], "rb");
// 讀入圖片檔資料
$fileContents = fread($file, filesize($_FILES["upfile"]["tmp_name"])); 
//關閉圖片檔
fclose($file);
// 圖片檔案資料編碼
$fileContents = base64_encode($fileContents);
//連結MySQL Server


$SQLSTR="Insert into pict(filename,filesize,filetype,filepic) 
values('"
. $_FILES["upfile"]["name"] . "',"
. $_FILES["upfile"]["size"] . ",'"
. $_FILES["upfile"]["type"] . "','"
. $fileContents . "')";
//將圖片檔案資料寫入資料庫
if(!mysql_query($SQLSTR)==0)
{
echo "您所上傳的檔案已儲存進入資料庫<a href=\"showpic.php?filename="
. $_FILES["upfile"]["name"] . "\">"
. $_FILES["upfile"]["name"] . "</a>";
} 
else 
{ 
echo "您所上傳的檔案無法儲存進入資料庫"; 
} 
} 
else 
{ 
echo "圖片上傳失敗";
} 
echo "</BLOCKQUOTE>";


		$qq1="http://127.0.0.1/pict/showpic.php?filename=";
		$qq2= $_FILES["upfile"]["name"];
		$bigqq=$qq1.$qq2;

	    
		$name = $_POST['name'];         //前一個網頁的欄位資料
		$one_code = $_POST['one_code']; //前一個網頁的欄位資料
		$two_code = $_POST['two_code'];
		$company = $_POST['company'];
		$add = $_POST['add'];
		$sql = "INSERT INTO  `product`(`product` ,`one_bar_code` ,`two_bar_code`,`company`,`add`,`pd`)VALUES('$name','$one_code','$two_code','$company','$add','$bigqq');";
		mysql_query($sql);
		header("Location: index.php"); //新增完資料做網頁跳轉
?>
<HR></BODY></HTML> 