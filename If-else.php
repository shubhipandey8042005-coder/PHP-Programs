<html>
	<head>
		<title>If-else</title>
	</head>
	<body>
	<form action="If-else.php"method="POST">
		Enter your age:<input type="Textbox"name="age">
		<input type="submit"name="submit">
	</form>
	</body>
</html>
<?php
$a=$_POST['age'];
if($a>=18)
{
	echo("eligible for vote");
}
else
{
	echo("not eligible for vote");
}
?>