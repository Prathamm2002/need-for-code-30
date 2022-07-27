<?php

// Connection to the Database
require "dbconnect.php";

// Disable Error Reporting
error_reporting(0);


$userloggedin = "False";



	// // Ensuring that the user has not left any input field blank
    // // error messages will be displayed for every blank input
    // if (empty($username)) { array_push($errors, "Username is required"); }
    // if (empty($email)) { array_push($errors, "Email is required"); }
    // if (empty($password_1)) { array_push($errors, "Password is required"); }
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}




if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	// Running the function to take correct input for the login
	$login = test_input($_POST['login']);
	$password=test_input($_POST['password']);


		// Checks if email is being used or usesrname is
		if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
			$sql = "SELECT * FROM `users` WHERE `Email ID`= '$login' AND `Password` = '$password'";
		}
		else {
			$sql = "SELECT * FROM `users` WHERE `Username`= '$login' AND `Password` = '$password'";
		}

		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);

			
		// function check($login){
		// 	include "dbconnect.php";
		// $sql1 = "SELECT `Username` FROM  `register` WHERE `register` `Email ID` = '$login'";
		// $res1 = mysqli_query($conn,$sql1);
		// }


		// SESSION START/LOGGED IN
		if($num == 1){
			$userloggedin = True;
			session_start();
			$_SESSION['loggedin'] = True;
			$_SESSION['username'] = $login;

			// Page to redirect user when logged in
			header("location: index.php");
		}
	

		// If the page has worked and the data has been entered in the database
		if($num == 1){
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>LOGGED IN!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
		}
		// IF the login or password has been left empty
		else if(empty($login) || empty($password)){
			echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Oops!</strong>Please fill all the columns given below. 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
		}
		// Any other error
		else {
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>INVALID CREDENTIALS!</strong> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
		}
				
	}
	
	
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Design by foolishdeveloper.com -->
        <title>upstat-Login</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <!--Stylesheet-->
        <style media="screen">
            *,
            *:before,
            *:after {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            
            body {
                background-color: #b4b4b4;
            }
            
            .background {
                width: 430px;
                height: 520px;
                position: absolute;
                transform: translate(-50%, -50%);
                left: 50%;
                top: 50%;
            }
            
            .background .shape {
                height: 200px;
                width: 200px;
                position: absolute;
                border-radius: 50%;
            }
            
            .shape:first-child {
                background: linear-gradient( #1845ad, #23a2f6);
                left: -80px;
                top: -80px;
            }
            
            .shape:last-child {
                background: linear-gradient( to right, #ff512f, #f09819);
                right: -30px;
                bottom: -80px;
            }
            
            form {
                height: 520px;
                width: 400px;
                background-color: rgba(255, 255, 255, 0.077);
                position: absolute;
                transform: translate(-50%, -50%);
                top: 50%;
                left: 50%;
                border-radius: 10px;
                backdrop-filter: blur(10px);
                border: 2px solid rgba(255, 255, 255, 0.01);
                box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
                padding: 50px 35px;
            }
            
            form * {
                font-family: 'Poppins', sans-serif;
                color: #000000e1;
                letter-spacing: 0.5px;
                outline: none;
                border: none;
            }
            
            form h3 {
                font-size: 32px;
                font-weight: 500;
                line-height: 42px;
                text-align: center;
            }
            
            label {
                display: block;
                margin-top: 30px;
                font-size: 16px;
                font-weight: 500;
            }
            
            input {
                display: block;
                height: 50px;
                width: 100%;
                background-color: rgba(255, 255, 255, 0.662);
                border-radius: 3px;
                padding: 0 10px;
                margin-top: 8px;
                font-size: 14px;
                font-weight: 300;
            }
            
             ::placeholder {
                color: #1f1f1fc4;
            }
            
            button {
                margin-top: 50px;
                width: 100%;
                background-color: #ffffff;
                color: #080710;
                padding: 15px 0;
                font-size: 18px;
                font-weight: 600;
                border-radius: 5px;
                cursor: pointer;
            }
            
            .social {
                margin-top: 30px;
                display: flex;
            }
            
            .social div {
                background: red;
                width: 150px;
                border-radius: 3px;
                padding: 5px 10px 10px 5px;
                background-color: rgba(255, 255, 255, 0.27);
                color: #A9A9A9;
                text-align: center;
            }
            
            .social div:hover {
                background-color: rgba(255, 255, 255, 0.47);
            }
            
            .social .fb {
                margin-left: 25px;
            }
            
            .social i {
                margin-right: 4px;
            }
            
            #username {
                border-color: black;
            }
        </style>
    </head>

    <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form action="login.php" method="POST">
            <h3>Login Here</h3>

            <label for="username">Username</label>
            <input type="text" name="login" id="login" placeholder="User Name/Email *" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password *" required>

            <button type="submit" name="submit" class="btn">Log In</button>
            
        </form>
    </body>

    </html>