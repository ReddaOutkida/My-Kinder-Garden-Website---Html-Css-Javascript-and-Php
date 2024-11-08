
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f9ba60;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px; 
            text-align: center;
        }

        .login-container h3 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            color: #333;
        }

        .login-container .box {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px; 
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        .login-container .btn {
            background-color: #f9ba60;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            font-size: 1.6rem;
            margin-top: 10px;
        }

        .login-container .btn:hover {
            background-color: #cb770a;
        }

        .login-container p {
            color: grey;
            margin-top: 10px;
        }

        .login-container a {
            color: #cb770a;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="index.php" method="post">
            <h3>Login</h3>
            <input type="email" name="email" placeholder="Email" class="box" required>
            <input type="password" name="password" placeholder="Password" class="box" required>
            <input type="submit" value="Login" class="btn">
            
            
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </form>
    </div>
</body>
</html>
