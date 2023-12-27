<?php

// // Include Composer autoloader
// require 'vendor/phpmailer/phpmailer/src/Exception.php';
// require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// // use PHPMailer\PHPMailer\PHPMailer;
// // use PHPMailer\PHPMailer\Exception;

// // Create a new PHPMailer instance
// // $mail = new PHPMailer(true);
// $mail = new PHPMailer\PHPMailer\PHPMailer();

  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  $mail = new PHPMailer;



try {
    //Server settings
    $mail->isSMTP();
  $mail->Host = 'smtp.hostinger.com';
    // $mail->Host       = 'mail.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alexkingkaunda@gmail.com';
    $mail->Password   = 'lenzspxvxkbdspyj';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('alexkingkaunda@gmail.com', 'Your Name');
    $mail->addAddress('lexmzuzu@gmail.com', 'Recipient Name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the Email';

    // Embed your styles inline
    $body = '<html>
                <head>
                    <style>
                        /* Your inline styles here */
                        body {
                            font-family: Arial, sans-serif;
                        }
                        .container {
                            background-color: #f0f0f0;
                            padding: 20px;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <h1>Hello, World!</h1>
                        <p>This is a sample email with inline styles.</p>
                    </div>
                </body>
            </html>';

    $mail->Body = $body;

    // Send the email
    $mail->send();
    echo 'Email has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
