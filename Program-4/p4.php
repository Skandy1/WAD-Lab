<?php 
include_once 'fix_mysql.inc.php';
$x=mysql_connect('localhost','root','') or die("Cannot Connect to MYSQL");
mysql_select_db("registration") or die("Cannot Connect Database");
$name=$_POST['name'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$em=$_POST['email'];
$sql="insert into register values('$name','$add1','$add2','$em')";
$res=mysql_query($sql);
if (!$res) {
	die('Error:'.mysql_error());
}else 
echo "Record Added";

?>