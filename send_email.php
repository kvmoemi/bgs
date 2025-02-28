<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST["service"];
    $propertyType = $_POST["propertyType"];
    $name = $_POST["name"];
    $contactNumber = $_POST["contactNumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $message = $_POST["message"];
    $preference = $_POST["preference"];

    $to = "info@bluegroupsecurity.co.za";
    $subject = "New Contact Request from $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Service Required: $service\n";
    $body .= "Property Type: $propertyType\n";
    $body .= "Name: $name\n";
    $body .= "Contact Number: $contactNumber\n";
    $body .= "Email: $email\n";
    $body .= "Address: $address\n";
    $body .= "Preferred Contact Method: $preference\n";
    $body .= "Message: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your request has been sent successfully!";
    } else {
        echo "Error sending request. Please try again.";
    }
}
?>
