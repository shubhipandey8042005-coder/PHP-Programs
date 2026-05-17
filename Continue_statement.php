<html>
<head>
    <title>Continue Statement Example</title>
</head>
<body>
</body>
</html>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        continue;  // Skips the rest of the loop when $i is 6
    }
    echo "$i <br>";
}
?>

