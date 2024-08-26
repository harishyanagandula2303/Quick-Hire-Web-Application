<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username_or_mobile = $_POST["user_name"];
    $password = $_POST["password"];

    if (!empty($username_or_mobile) && !empty($password)) {
        $query = "SELECT * FROM usersdata WHERE uname = '$username_or_mobile' OR umob ='$username_or_mobile' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data["pass"] == $password) {
                // Successful login
                $_SESSION['unamee'] = $username_or_mobile; // Store username in session if needed
                header("Location: view.php");
                exit;
            } else {
                // Incorrect password
                //$_SESSION['error'] = 'Incorrect password. Please retry!';
                echo "<script>alert('Incorrect password. Please retry!'); window.location='login.php';</script>";
               ;
            }
        } else {
            // User not found
            //$_SESSION['error'] = 'User not found.';
             echo "<script>alert('User not found.'); window.location='login.php';</script>";
        }
    } else {
        // Invalid input or empty fields
        $_SESSION['error'] = 'Invalid input or empty fields.';
         echo "<script>alert('Invalid input or empty fields.'); window.location='login.php';</script>";
    }
    header("Location: /public_html/login.php"); // Redirect back to login page
    exit;
}
?>