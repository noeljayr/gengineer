
<?php
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->Host = 'smtp.hostinger.com';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->Username = 'alexkingkaunda@gmail.com';
  $mail->Password = 'lenzspxvxkbdspyj';
  $mail->setFrom('alexkingkaunda@gmail.com', 'alex king  kaunda');
  $mail->addReplyTo('alexkingkaunda@gmail.com', 'alex king kaunda');
  $mail->addAddress('lexmzuzu@gmail.com', 'alex king');
  $mail->Subject = 'Checking if PHPMailer works';
//   $mail->msgHTML(file_get_contents('message.html'), __DIR__);
  $mail->Body = 'hey there, am using whatsapp';
  //$mail->addAttachment('attachment.txt');
  if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'The email message was sent.';
  }


//   require 'vendor/autoload.php';
//   use PHPMailer\PHPMailer\PHPMailer;
//   $mail = new PHPMailer;

//     $mail->isSMTP();
//     $mail->Host       = 'smtp.hostinger.com'; // Replace with your SMTP server
//     $mail->SMTPAuth   = true;
//     $mail->Username   = 'alexkingkaunda@gmail.com; 

//     $mail->Password = "lenzspxvxkbdspyj";
//     $mail->SMTPSecure = "tls"; 
//     $mail->Port       = 587; // Replace with the appropriate SMTP port

//     // Recipients
//     $mail->setFrom("alexkingkaunda@gmail.com", "Your Name");
//     $mail->addAddress('lexmzuzu@gmail.com', 'Recipient Name');
//  $mail->Subject = 'Checking if PHPMailer works';
// //   $mail->msgHTML(file_get_contents('message.html'), __DIR__);
//   $mail->Body = 'This is just a plain text message body';
//   //$mail->addAttachment('attachment.txt');
//   if (!$mail->send()) {
//       echo 'Mailer Error: ' . $mail->ErrorInfo;
//   } else {
//       echo 'The email message was sent.';
//   }
?>
