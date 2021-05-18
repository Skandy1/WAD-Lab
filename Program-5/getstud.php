<?php
$q=$_POST["std"];
$xmlDoc = new DOMDocument();
$xmlDoc->load("Student_details.xml");
$x=$xmlDoc->getElementsByTagName('NAME');
for ($i=0; $i < $x->length-1; $i++) { 
	if ($x->item($i)->nodeType==1) {
		if ($x->item($i)->childNodes->item(0)->nodeValue==$q) {
			$y=($x->item($i)->parentNode);
		}
	}
}
$cd=($y->childNodes);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verify Details</title>
</head>
<body bgcolor="lightgreen">
	<center>
		<h2>Verify Details</h2>
		<form action="add.php" method="POST">
			<?php
			for ($i=0; $i < $cd->length; $i++) { 
				if ($cd->item($i)->nodeType==1) {
					?>
					<b><?php echo $cd->item($i)->nodeName; ?>: &nbsp; </b> 
					<input type="text" value="<?php echo($cd->item($i)->childNodes->item(0)->nodeValue); ?>" name="<?php echo ('item'.$i); ?>" readonly="true" > <br>
					<?php

				}
			}
			?>
			<input type="submit" value="Confirm">
		</form>
	</center>
</body>
</html>