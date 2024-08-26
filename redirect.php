<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dashboard'])) {
    $dashboard = $_POST['dashboard'];

    if ($dashboard === 'client') {
        header("Location: clientserv.php");
        exit();
    }
    elseif ($dashboard === "worker") {
        header("Location: worker.php");
        exit();
}
elseif ($dashboard === "profile") {
    header("Location: profile.php");
    exit();
}
// If the form was submitted without a valid button value, you can redirect to a default page or handle the situation accordingly.
header("Location: default.html");
exit();
}
?>