<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 150px;
        }
        h2 {
            color: white;
            text-align:center;
        }
        .login-container {
            max-width: 300px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
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
            h1{
                color: white;
                text-align:center;
            }
            nav {
                margin-left: -9px;
                margin-right: -9px;
                padding: 20px;
            }
            .btn {
                padding: 8px 15px;
                text-decoration: none;
                background-color:#4caf50;
                color:white;
                border:none;
                border-radius:4px;
                transition: background-color 0.3s ease;
            }
            .btn1 {
                padding: 8px 15px;
                text-decoration: none;
                background-color:#ff0000;
                color:white;
                border:none;
                border-radius:4px;
                transition: background-color 0.3s ease;
            }
            nav a {
                text-decoration: none; 
                color: grey; 
                margin-right: 15px;
                font-family:arial; 
            }

            nav a:last-child {
                margin-right: 0; 
            }
            header img {
            width: 100px; /* Adjust the width of the image */
            height: auto; /* Maintain the aspect ratio of the image */
            border-radius: 50%; /* Optional: Add rounded corners to the image */
            }
    </style>
</head>
<body>
        <header>
        <img src="Favicon-SMK-N-2-Surakarta.png" >
        <h1>SISTEM INFORMASI SISWA</h1>
        <h5> SMK NEGERI 2 SURAKARTA <h5>
        </header>
        <nav>
            <a href="home.php">Home </a>
            <a href="index.php">Siswa </a>
            <a href="admin.php">Admin </a>
            <a href="login.php">Sign up <a>
            <a href="form-signup.php">Sign up <a>
        </nav>
    <div class="login-container">
        <h2>Login Form</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
