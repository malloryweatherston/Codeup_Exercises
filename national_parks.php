<?php
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'mallory', 'malmal');

//Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>National Parks</title>
	</head>
		<body>
			<table>
			<? while ($row  = stmt->fetch(PDO::FETCH_ASSOC)) : ?>
			<tr>
				<td><?= $row[‘name’] ?></td>
			</tr>
			<tr>
				<td><?= $row[‘location’] ?></td>
			</tr>
			<tr>
				<td><?= $row[‘date_established’] ?></td>
			</tr>
			<tr>
				<td><?= $row[‘area_in_acres’] ?></td>
			</tr>
			</table>
		</body>
</html> 