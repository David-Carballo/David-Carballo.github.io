<?php

echo "<p>Thank you for contacting us, $name.</p>";
 
if($_POST) {
    
    $name = $_POST['nombre'];
    $subject = "PORTFOLIO";
    $email = $_POST['email'];

    $message = $_POST['mensaje'];
     
    $to = "dvd.cm6@gmail.com";
    $headers  = "From: ". $email;
    $txt = "Has recibido un mensaje de ".$name.".\n\n".$message

    mail($to, $subject, $txt, $headers);
    header("Location: index.php?mailsend")
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>