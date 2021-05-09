<!DOCTYPE html>
<html>
<head>
	<title>PHP Server Info</title>
</head>
<body bgcolor="#48fac8">
<center>
	<h1>PHP server info methods</h1>
	<table cols=2 rowspan=3 border="2px solid black" width="30%">
		<th>Name</th>
		<th>Value</th>
		<tr>
			<td>PHP_SELF</td>
			<td><?php echo $_SERVER['PHP_SELF']; ?></td>
		</tr>
		<tr>
			<td>GATEWAY_INTERFACE</td>
			<td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?></td>
		</tr>
		<tr>
			<td>SERVER_ADDR</td>
			<td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
		</tr>
		<tr>
			<td>SERVER_NAME</td>
			<td><?php echo $_SERVER['SERVER_NAME']; ?></td>
		</tr>
		<tr>
			<td>SERVER_PROTOCOL</td>
			<td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
		</tr>
		<tr>
			<td>REQUEST_METHOD</td>
			<td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
		</tr>
		<tr>
			<td>REQUEST_TIME</td>
			<td><?php echo $_SERVER['REQUEST_TIME']; ?></td>
		</tr>
	</table>
</center>
</body>
</html>