<html>
<head>
    <title>Pattern 1</title>
</head>
<body>
</body>
</html>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo ($j % 2 == 0) ? "0 " : "1 ";
    }
    echo "<br>";
}
?>