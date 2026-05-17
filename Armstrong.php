<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Check if a Number is an Armstrong Number</h2>
    <form action="Armstrong.php" method="POST">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
    <?php
    if (isset($_POST['number']) && $_POST['number'] !== "") {
        $number = $_POST['number'];
        $sum = 0;
        $temp = $number;

        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += $digit ** 3;
            $temp = (int)($temp / 10);
        }

        if ($sum == $number) {
            echo "<p>$number is an Armstrong number.</p>";
        } else {
            echo "<p>$number is not an Armstrong number.</p>";
        }
    } else {
        echo "<p>Please enter a number.</p>";
    }
    ?>

