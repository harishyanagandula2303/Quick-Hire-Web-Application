<?php
if(isset($_POST["submint"])) {

$mobile='91'.$_POST['mobile'];
$message=$_POST['message'];

$apiKey = urlencode('NjE1ODM4NzUzOTY3NDIzMDZkNGI3MTRjMzI3MDU1MzU='); 

$numbers = array($mobile);
$sender = urlencode('TXTLCL');
$message = rawurlencode($message);
$numbers = implode(',', $numbers);
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Send SMS</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 50%;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h2 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    input,
    textarea {
        padding: 8px;
        margin-bottom: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    button {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Send SMS</h2>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</body>

</html>