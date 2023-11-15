<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        header {
                text-align: center;
                background-color: #000000;
                color: #FFFFFF ; 
                margin-top: -150px;
                margin-left: -150px;
                margin-right: -150px;
                padding: 30px 100px;
            }
            h2{
                color: black;
                text-align:center;
            }
        nav {
                border: 2px solid black;
                margin-left: -9px;
                margin-right: -9px;
                padding: 20px;
            }
        </style>
</head>
<body>
<nav>
            <a href="home.php">Home </a>
            <a href="index.php">Siswa </a>
            <a href="admin.php">Admin </a>
            <a href="form-login.php">Login <a>
            <a href="form-signup.php">Sign up <a>
        </nav>
    <h2>Sign-up Form</h2>
    <form action="signup_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
