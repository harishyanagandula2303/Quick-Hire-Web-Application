<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <link rel="stylesheet" href="./styless/QH.css">
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
          padding-top: 60px;
          /* Ensure content starts below the fixed header */
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
          height: 13%;
          /* Default height for desktop */
          transition: height 0.3s ease;
          /* Header height transition */
     }

     /* Style for the logo */
     .logo img {
          width: 240px;
          height: auto;
          margin-left: 20px;
          /* Adjust as needed */
          transition: all 0.3s ease;
          /* Logo transition */
     }

     #login-form {
          display: inline-block;
          background-color: #f4f4f4;
          /* Trending background color */
          margin-top: 80px;
          padding: 40px;
          border-radius: 8px;
          box-shadow: 0 0 150px rgba(0, 0, 0, 0.1);
          text-align: center;
          width: 380px;
          height: auto;
          /* Default height for desktop */
          transition: all 0.3s ease;
          /* Form animation */
     }

     h2 {
          font-size: 35px;
          margin-bottom: 20px;
          color: #333;
          transition: color 0.3s ease;
          /* Header transition */
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
          transition: all 0.3s ease;
          /* Input/button transition */
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
          transform: scale(1.05);
          /* Button hover animation */
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
               height: 10%;
               /* Decrease header height for mobile */
          }

          .logo img {
               width: 180px;
               margin-left: 0;
          }

          #signup-form {
               width: 70%;
               margin-top: auto;
               padding: 20px;
               height: 500px;
               /* Increase form height for mobile */
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
               height: 550px;
               /* Further increase form height for smaller mobile screens */
          }
     }

     /* Fixed header styles */
     header {
          position: fixed;
          top: 0;
          left: 0;
          z-index: 999;
     }

     .password-input {
          position: relative;
          margin-bottom: 8px;
     }

     .password-input input[type="password"] {
          padding-right: 30px;
          /* Adjust as needed to accommodate the eye symbol */
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


     <div id="login-form">
          <h2>Login</h2>
          <form method="POST" action="process.php">
               <input type="text" name="user_name" placeholder="Username" required>
               <div class="password-input">
                    <input type="password" id="signup-password" placeholder="Password" name="password" required>
                    <span toggle="#signup-password" class="eye-toggle"
                         onclick="togglePasswordVisibility(this)">️Show</span>
               </div>
               <!--<div class="social">
                <h4>(or)</h4>
                <a href="https://www.facebook.com/login/"><img src="f.jpg" alt="Sign up with Facebook"></a>
                <a href="https://www.google.com/"><img src="go.jpg" alt="Sign up with Google"></a><br>
            </div>-->
               <input type="submit" name="submit">
          </form>
          <a href="signup.php">Signup here</a> / <a href="forgot.html">Forgot Password</a>
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
     </script>
</body>

</html>