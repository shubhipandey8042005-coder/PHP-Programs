<html>
<head>
    <title>Pattern 3</title>
</head>
<body>
</body>
</html>
<?php
$n=5;
for ($i = 1; $i <= $n; $i++) {
    for ($r = 1; $r <=($n-$i); $r++) {
        echo("&nbsp;&nbsp;");
    }
    for($j=1;$j<=$i;$j++)
    {
   	 echo("$i &nbsp;&nbsp;");
	}
	echo"<br>";
}
?>

