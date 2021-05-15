<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<?php 
	$cookie_name="skanda";
	$cookie_value="NULL";
	$t=60*60*24*60+time();
	setcookie($cookie_name,date("G:i-m/d/y"),$t);
	if (!isset($_COOKIE[$cookie_name])) {
	?>
	<h1>Cookie Name: <?php echo $cookie_name;  ?> is not set! </h1>
	<?php
}else{
	?>
	<h1>Cookie: <?php echo $cookie_name; ?> is set!</h1><br>
	<h2>Value: <?php echo $_COOKIE[$cookie_name] ?> </h2>
	<?php
}

	?>

</body>
</html>