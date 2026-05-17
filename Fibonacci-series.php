<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h2>Generate Fibonacci Series</h2>
    <form action="Fibonacci-series.php" method="POST">
        <label for="count">Enter the Number of Terms:</label>
        <input type="number" name="count" id="count">
        <input type="submit" name="submit" value="Generate">
    </form>
</body>
</html>
    <?php
    if (isset($_POST['count']) && $_POST['count'] !== "") {
        $count = $_POST['count'];
        $num1 = 0;
        $num2 = 1;
        $i = 0;

        echo "<p>Fibonacci Series: ";

        do {
            echo $num1 . " ";
            $nextNum = $num1 + $num2;
            $num1 = $num2;
            $num2 = $nextNum;
            $i++;
        } while ($i < $count);

        echo "</p>";
    } else {
        echo "<p>Please enter the number of terms.</p>";
    }
    ?>


