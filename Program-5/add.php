<?php 
include_once 'fix_mysql.inc.php';
$l=mysql_connect("localhost","root","");
mysql_select_db("registration");
$id=$_POST['item1'];
$name=$_POST['item3'];
$course=$_POST['item5'];
$college=$_POST['item7'];
$email=$_POST['item9'];
$t=mysql_query("insert into student values('$id','$name','$course','$college','$email')");
$var=mysql_query("select * from student");
?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>COURSE</th>
		<th>COLLEGE</th>
		<th>EMAIL</th>
	</tr>
<?php 
while ($arr=mysql_fetch_row($var)) {
	echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
}
?>
</table>
<?php 
mysql_free_result($var);
mysql_close($l);
?>