<?php
namespace app\models;
include("/config/conn.php");
class Say
{
	function sayData($aa){
		$bb='';
		$query = mysql_query("select * from tmp_test");
		while ($row = mysql_fetch_array($query)){
			$bb=' '.$bb.'  '.$row['name'];
		}
		return $bb;
	}
	function insertData($aa){
		$bb='';
		$query = mysql_query("insert into tmp_test(name) values('$aa')");
		return 1;
	}
}