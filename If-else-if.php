<html>
<head>
    <title>Student Grade Calculator</title>
</head>
<body>
    <h2>Enter Student Percentage to Find Grade</h2>
    <form action="If-else-if.php" method="POST">
        <label for="percentage">Enter Percentage:</label>
        <input type="number" name="percentage" id="percentage">
        <input type="submit" name="submit" value="Calculate Grade">
    </form>
</body>
</html>
    <?php
    // Check if form was submitted and the percentage input is not empty
    if (isset($_POST['percentage']) && $_POST['percentage'] !== "") {
        $percentage = $_POST['percentage'];

        if ($percentage >= 90 && $percentage <= 100) {
            echo "<p>Grade: A+</p>";
        } else if ($percentage >= 80) {
            echo "<p>Grade: A</p>";
        } else if ($percentage >= 70) {
            echo "<p>Grade: B</p>";
        } else if ($percentage >= 60) {
            echo "<p>Grade: C</p>";
        } else if ($percentage >= 50) {
            echo "<p>Grade: D</p>";
        } else if ($percentage >= 0) {
            echo "<p>Grade: F</p>";
        } else {
            echo "<p>Please enter a valid percentage (0-100).</p>";
        }
    } else {
        echo "<p>Please enter a percentage to calculate the grade.</p>";
    }
    ?>
