<html>
<head>
    <title>Student Grade Calculator</title>
</head>
<body>
    <h2>Enter Student Details</h2>

    <form method="post" action="Nested-if.php">
        <label for="name">Student Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="percentage">Percentage:</label>
        <input type="number" name="percentage" id="percentage" required><br><br>

        <input type="submit" value="Calculate Grade">
    </form>
</body>
</html>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $percentage = $_POST['percentage'];
        $grade = "";

        // Nested if statements to determine the grade based on the percentage
        if ($percentage >= 90) {
            $grade = "A";
        } else {
            if ($percentage >= 80) {
                $grade = "B";
            } else {
                if ($percentage >= 70) {
                    $grade = "C";
                } else {
                    if ($percentage >= 60) {
                        $grade = "D";
                    } else {
                        $grade = "F";
                    }
                }
            }
        }

        // Display the result
        echo "<h3>Student Name: $name</h3>";
        echo "<h3>Percentage: $percentage%</h3>";
        echo "<h3>Grade: $grade</h3>";
    }
    ?>
