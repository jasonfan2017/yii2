<?php
/*****************************
connection
*****************************/
$conn = @mysql_connect("localhost","user01","123456");
if (!$conn){
    die("failed：" . mysql_error());
}
mysql_query("SET NAMES UTF8",$conn); 
mysql_select_db("agents_tips", $conn);

//echo "connect OK ";
?>
