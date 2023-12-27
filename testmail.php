<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "alexkingkaunda@gmail.com";
$to = "gsisya@gengineer.org";
$subject = "Checking PHP mail";
$message = "this is a test message";
$headers = "From:" . $from;
if(mail($to,$subject,$message, $headers)) {
    echo "The email message was sent.";
} else {
    echo "The email message was not sent.";
}
?>