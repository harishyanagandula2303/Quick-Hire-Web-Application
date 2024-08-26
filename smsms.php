<?php
// Account details
$apiKey = 'MzQ0ZTY5MzY2YjRiMzg0MzMxNmQ3ODM1Nzg3MjY0NDE=';
// Message details
$numbers = array('+917382118209', '+919390913116');
// Replace '91xxxxxxxxxx' with the actual phone numbers in the correct format

$sender = 'TXTLCL';
$message = rawurlencode('This is harish');



$numbers = implode(',', $numbers);

// Prepare data for POST request
$data = array(
    'apikey' => $apiKey,
    'numbers' => $numbers,
    'sender' => $sender,
    'message' => $message
);

// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    $responseData = json_decode($response, true);
    // Check the API response
    if (isset($responseData['errors'])) {
        echo 'API Error: ' . $responseData['errors'][0]['message'];
    } else {
        echo 'Message sent successfully! Response: ' . $response;
    }
}

curl_close($ch);
?>