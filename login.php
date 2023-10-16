<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "your_username" && $password == "your_password") {
        
        $_SESSION["username"] = $username;
        
      
        header("Location: dashboard.php");
        exit();
    } else {
        
        echo "Invalid username or password. Please try again.";
    }
}
?>

</body>
</html>
