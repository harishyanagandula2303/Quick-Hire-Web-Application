<html>

<head>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        background-image: url('bg.avif');
        background-position: center;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    /* Style for the worker's name */
    h1 {
        font-family: Arial, sans-serif;
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .box {
        display: inline-block;
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 380px;
        height: 380px;
    }

    .container {
        display: inline-block;
        padding: 40px;
        margin-top: 12%;
        border: 12px solid black;
    }

    /* Style for the mobile number */
    h2 {
        font-family: Arial, sans-serif;
        font-size: 18px;
        color: #666;
        margin-bottom: 20px;
    }

    /* Style for the button */
    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="box">
        <form class="container">
            <?php
if (isset($_GET['worker_name']) && isset($_GET['mobile_number'])) {
    $workerName = $_GET['worker_name'];
    $mobileNumber = $_GET['mobile_number'];

    // Use $workerName and $mobileNumber as needed
    // Perform actions based on the retrieved data
    // For example:
    echo "<h1>Worker Name: " . $workerName . "</h1><br>";
    echo "<h2>Mobile Number: " . $mobileNumber ."<h2>";
    echo "<br><button>Book</button>";
} else {
    echo "Worker details not found.";
}
?>
        </form>
    </div>
</body>

</html>