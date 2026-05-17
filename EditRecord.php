<html>
<head>
<title>Edit record form</title>
</head>
<body>
<table border="1">
			<tr>
				<th>FID</th>
				<th>FName</th>
				<th>Salary</th>
			</tr>		
<?php
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"college");
$cmd="select * from faculty ";
$result=mysqli_query($con,$cmd);
while($row=mysqli_fetch_array($result))
{
	$id=$row['FID'];
	$name=$row['FName'];
	$sal=$row['Salary'];
?>
<tr>
	<td>
		<?php echo $id; ?>
		
	</td>
	<td>
		<?php echo $name; ?>  
	</td>
	<td>
		<?php echo $sal; ?>  
	</td>
	<td>
		<a href="UpdateRecord.php ?FID=<?php echo $id ; ?>">Edit</a>
	</td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</body>
</html>