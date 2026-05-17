<html>
<head>
<title>Update record form</title>
</head>
<body>
<?php
$id=$_GET['FID'];
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
$cmd="select * from faculty where FID=".$id."";
$result=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($result))
{
	$id=$row['FID'];
	$name=$row['FName'];
	$sal=$row['Salary'];
}
?>
<form method="POST" action="Update.php">
<table border=1>
	<tr>
		<td>FID</td>
		<td><input type="text" name="id" value="<?php echo $id; ?>"/></td>
	</tr>
	<tr>
		<td>FName</td>
		<td><input type="text" name="Name" value="<?php echo $name; ?>"/></td>
	</tr>
	<tr>
		<td>Salary</td>
		<td><input type="text" name="Salary" value="<?php echo $sal; ?>"/></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
				<td><input type="submit"name="submit"value="submit"</td>
			</tr>
</table>
</form>
<?php mysqli_close($con); ?>
</body>
</html>