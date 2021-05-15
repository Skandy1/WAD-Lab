<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Page Count</title>
</head>
<body>
	<center>
		<?php if (!isset($_SESSION['views'])) {
			$_SESSION['views']=0;
			?>
			<h1olo>Session Initialized</h1>
			<h2>View Count: 0</h2>
			<?php
		} else
			$_SESSION['views']=$_SESSION['views']+1;
		if ($_SESSION['views']>=1) {
			?>
		<h2>View Count: <?php echo $_SESSION['views']; ?> </h2> 
			<?php
		}
		 ?>
	</center>

</body>
</html>