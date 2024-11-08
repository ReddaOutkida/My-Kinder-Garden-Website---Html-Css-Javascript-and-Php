<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
       body {
		color: #fff;
		background: #f9ba60;
		font-family: 'Roboto', sans-serif;
        margin-top: 5%;
	}
    .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
	}
	.signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #f9ba60;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #cb770a !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #fff;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }

    </style>
</head>
<body>
<div class="signup-form">
    <?php
    // Initialize variables to hold error messages
    $emailError = $passwordError = "";
    
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Email validation
        $email = $_POST['email'];
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@emsi\.ma{1}$/", $email)) {
            $emailError = "Email must end with '@emsi.ma'.";
        }

        // Password validation
        $password = $_POST['password'];
        if (!preg_match("/^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?\":{}|<>])[A-Za-z\d!@#$%^&*(),.?\":{}|<>]{8,}$/", $password)) {
            $passwordError = "Password must be at least 8 characters long, include one uppercase letter and one special character.";
        }

        
    }
    ?>

    <form action="signup.php" method="post">
        <h2>Sign Up</h2>
        <p>Please fill in this form to create an account!</p>
        <hr>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required></div>
                <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required></div>
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <?php if ($emailError) echo "<p style='color:red;'>$emailError</p>"; ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <?php if ($passwordError) echo "<p style='color:red;'>$passwordError</p>"; ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg"><a href="index.php">Sign Up</a></button>
        </div>
    </form>
    <div class="hint-text">Already have an account? <a href="login.php" >Login here</a></div>
</div>
</body>
</html>
