<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Save the email address to a file
    echo "Thanks!"  . $email;
    }
?>