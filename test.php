<!DOCTYPE html>
<html>
<head>
	<title>Test Search Bar</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<form method="post">
		<label>Search</label>
		<input type="text" name="search">
		<button class="search-btn1" type="submit" name="submit">Search</button>
	</form>

</body>
</html>
<?php
$con = new PDO("mysql:host=localhost;port=3308;dbname=websiteproject",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php
	}
		
		else{
			echo "Name Does not exist";
		}
}

?>