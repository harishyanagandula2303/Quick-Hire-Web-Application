<?php
session_start(); // Initializing the session

include 'db.php'; // Including your database connection

// Getting the user's mobile number from the session
$user_namee = $_SESSION['unamee'];

// Query to check if the user's mobile number exists in the workerdata table
$sql = "SELECT * FROM workerdata WHERE w_name = '$user_namee'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If the user's mobile number exists in the workerdata table
    header("Location: clientserv.php"); // Redirect to clientserv.php
    exit();
} else {
    // If the user's mobile number doesn't exist in the workerdata table
    echo "<script>alert('Please complete KYC before proceeding'); window.location='view.php';</script>";
    // Redirects to view.php after the alert is acknowledged
    // You can adjust the 'view.php' to the appropriate page if needed
}
?>
