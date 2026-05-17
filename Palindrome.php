<html>
<head>
    <title>Palindrome Number Checker</title>
</head>
<body>
    <h2>Check if a Number is a Palindrome</h2>
    <form action="Palindrome.php" method="POST">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
    <?php
    if (isset($_POST['number']) && $_POST['number'] !== "") {
        $number = $_POST['number'];
        $reverse = 0;
        $temp = $number;

        for ($temp = $number; $temp > 0; $temp = (int)($temp / 10)) {
            $digit = $temp % 10;
            $reverse = $reverse * 10 + $digit;
        }

        if ($number == $reverse) {
            echo "<p>$number is a palindrome.</p>";
        } else {
            echo "<p>$number is not a palindrome.</p>";
        }
    } else {
        echo "<p>Please enter a number.</p>";
    }
    ?>


