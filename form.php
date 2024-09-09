<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Portfolio request";
    $to = "dvd.cm6@gmail.com";

    $mailheader = "From: ".$name."<".$email.">\r\n";

    // Display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

    mail($to, $subject, $message, $mailheader);
}
?>