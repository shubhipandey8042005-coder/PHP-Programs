<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login-form.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
    <?php
    // Define a fixed username and password for validation
    $validUsername = "admin";
    $validPassword = "password123";

    // Check if form inputs are set and not empty
    if (isset($_POST['username']) && $_POST['username'] !== "" && 
        isset($_POST['password']) && $_POST['password'] !== "") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if entered credentials match the predefined credentials
        if ($username == $validUsername && $password == $validPassword) {
            echo "<p>Login successful! Welcome, $username.</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    } else {
        echo "<p>Please enter both username and password.</p>";
    }
    ?>




