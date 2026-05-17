<html>
<head>
    <title>Weekday Finder</title>
</head>
<body>
    <h2>Enter a Number to Find the Day of the Week</h2>
    <form action="Switch-case.php" method="POST">
        <label for="dayNumber">Enter a number (1-7):</label>
        <input type="number" name="dayNumber" id="dayNumber" min="1" max="7">
        <input type="submit" name="submit" value="Find Day">
    </form>
</body>
</html>
    <?php
    // Check if form was submitted and the day number input is not empty
    if (isset($_POST['dayNumber']) && $_POST['dayNumber'] !== "") {
        $dayNumber = $_POST['dayNumber'];

        switch ($dayNumber) {
            case 1:
                echo "<p>Day: Sunday</p>";
                break;
            case 2:
                echo "<p>Day: Monday</p>";
                break;
            case 3:
                echo "<p>Day: Tuesday</p>";
                break;
            case 4:
                echo "<p>Day: Wednesday</p>";
                break;
            case 5:
                echo "<p>Day: Thursday</p>";
                break;
            case 6:
                echo "<p>Day: Friday</p>";
                break;
            case 7:
                echo "<p>Day: Saturday</p>";
                break;
            default:
                echo "<p>Please enter a valid number between 1 and 7.</p>";
                break;
        }
    } else {
        echo "<p>Please enter a number to find the corresponding day.</p>";
    }
    ?>



