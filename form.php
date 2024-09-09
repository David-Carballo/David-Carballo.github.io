<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Portfolio request";
    $to = "dvd.cm6@gmail.com";

    $mailheader = "From: ".$name."<".$email.">\r\n";

    if(mail($to, $subject, $message, $mailheader)){
        echo"<h1>Sent Succesfully! Thank you!</h1>";
    }
    else "Something went wrong!"
}
?>