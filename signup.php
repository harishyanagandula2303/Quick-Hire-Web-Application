<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST["uname"];
        $umob = $_POST["umob"];
        $password = $_POST["pass"];
        $confirmPassword = $_POST["confirmPass"];

        // Check if the username already exists
        $check_query = "SELECT * FROM usersdata WHERE uname='$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<script type='text/javascript'>alert('User already exists. Please choose a different username!')</script>";
        } elseif (!empty($username) && !empty($password) && !is_numeric($username) && ($password == $confirmPassword)) {
            // Insert new user if username doesn't exist and passwords match
            $query = "INSERT INTO usersdata (uname,umob, pass) VALUES ('$username','$umob','$password')";
            mysqli_query($conn, $query);
            $_SESSION['worker_name'] = $username;
            echo "<script type='text/javascript'>alert('Registered Successfully! Go to Login.')</script>";
           
        } else {
            if ($password != $confirmPassword) {
                echo "<script type='text/javascript'>alert('Password & confirm password are not the same.')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Enter Valid details.')</script>";
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup & Login</title>
    <link rel="stylesheet" href="QH.css">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background-image: url('bg.avif');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 60px; /* Ensure content starts below the fixed header */
}

/* Basic styles for the header */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    padding: 20px;
    justify-content: space-between;
    align-items: center;
    border: none;
    border-radius: 0px 0px 23px 23px;
    box-shadow: 0 0 1px rgb(29, 26, 26);
    background-image: url('bg.avif');
    background-size: cover;
    background-repeat: no-repeat;
    z-index: 999;
    height: 13%; /* Default height for desktop */
    transition: height 0.3s ease; /* Header height transition */
}

/* Style for the logo */
.logo img {
    width: 240px;
    height: auto;
    margin-left: 20px; /* Adjust as needed */
    transition: all 0.3s ease; /* Logo transition */
}

#signup-form {
    display: inline-block;
    background-color: #f4f4f4; /* Trending background color */
    margin-top: 80px;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 150px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 380px;
    height: auto; /* Default height for desktop */
    transition: all 0.3s ease; /* Form animation */
}

h2 {
    font-size: 35px;
    margin-bottom: 20px;
    color: #333;
    transition: color 0.3s ease; /* Header transition */
}

h4 {
    font-size: 12px;
    margin-bottom: 10px;
    color: #333;
}

input[type="text"],
input[type="password"],
button {
    width: 100%;
    padding: 8px;
    margin-bottom: 8px;
    border: 2px solid #ccc;
    border-radius: 4px;
    transition: all 0.3s ease; /* Input/button transition */
}

input[type="submit"],
button {
     width: 100%;
    padding: 8px;
    margin-bottom: 8px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover,
button:hover {
    background-color: #4f8ccd;
    transform: scale(1.05); /* Button hover animation */
}

label {
    display: block;
    text-align: left;
    margin-bottom: 4px;
}

/* Media queries for responsiveness */

/* For smaller screens */
@media (max-width: 768px) {
    body {
        background-size: cover;
    }

    header {
        padding: 10px;
        height: 10%; /* Decrease header height for mobile */
    }

    .logo img {
        width: 180px;
        margin-left: 0;
    }

    #signup-form {
        width: 70%;
        margin-top: auto;
        padding: 20px;
        height: 500px; /* Increase form height for mobile */
    }
}

/* For even smaller screens */
@media (max-width: 480px) {
    .logo img {
        width: 140px;
    }

    #signup-form {
        padding: 15px;
        width: 90%;
        height: 550px; /* Further increase form height for smaller mobile screens */
    }
}

/* Fixed header styles */
header {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
}
/* ... (your existing CSS) ... */

.password-input {
    position: relative;
    margin-bottom: 10px;
}

.password-input input[type="password"] {
    padding-right: 30px; /* Adjust as needed to accommodate the eye symbol */
}

.password-input .eye-toggle {
    position: absolute;
    top: 40%;
    right: 8px;
    transform: translateY(-50%);
    cursor: pointer;
}

    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src="white.png" alt="Logo" />
        </div>
    </header>

    <div id="signup-form" style="display: block;">
        <h2>SignUp with</h2>
        <form method="POST" id="signup" action="signup.php">

            <!--<label for="signup-username">User Name:</label>-->
            <input type="text" id="signup-username" placeholder="Username" name="uname" required><br>

            <!--<label for="signup-username">User Mobile:</label>-->
            <input type="text" id="signup-username" placeholder="Mobile Number" name="umob" required><br>

            <!--<label for="signup-password">Password:</label>-->
            <div class="password-input">
                <input type="password" id="signup-password" placeholder="Password" name="pass" required>
                <span toggle="#signup-password" class="eye-toggle"
                    onclick="togglePasswordVisibility(this)"> ️️️️Show</span>
            </div>

            <!--<label for="confirm-password">Confirm Password:</label>-->
            <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirmPass" required><br>


            <label>
                <input type="checkbox" id="accept-terms">
                I accept the terms & conditions
            </label>

            <!--<div class="social">
                <h4>(or)</h4>
                <a href="#facebook-signup"><img src="f.jpg" alt="Sign up with Facebook"></a>
                <a href="#google-signup"><img src="go.jpg" alt="Sign up with Google"></a><br>
            </div>-->

            <input type="submit" name="submit" onclick="validateForm(event)">
        </form>
        <a href="login.php">Login here</a>
    </div>

    <script>
    function togglePasswordVisibility(element) {
        const passwordField = document.querySelector(element.getAttribute('toggle'));
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
        } else {
            passwordField.type = 'password';
        }
    }

    function validateForm(event) {
        const termsCheckbox = document.getElementById('accept-terms');

        if (!termsCheckbox.checked) {
            event.preventDefault(); // Prevent form submission
            alert("Please agree to the terms and conditions before proceeding.");
        }
    }
    </script>
</body>

</html>