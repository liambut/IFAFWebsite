<?php

require("Mailer.php");

$mail = new Mailer();

try {

  $mail->IsSMTP();  // tell the class to use SMTP
  $mail->Host       = "smtp-mail.outlook.com"; // SMTP server
  $mail->SMTPSecure = 'ssl';              // Enable SSL encryption;
  $mail->Port       = 465;                // port to connect to, use 587 for 'tls'
  $mail->Username   = ''; // SMTP username
  $mail->Password   = '';           // SMTP password

  $mail->SetSender("","Your Name");

  $mail->AddRecipient("","Friend Name"); // Who you are sending to

  $mail->Subject    = "First worx Mailer Message";
  $mail->Message       = "Hi! \n\n This is my first email sent through worx Mailer.";

  if ($mail->Send()) {
    echo 'Message has been sent.';
  }
} catch (MailerException $e) {
  echo $e->errorMessage();
}
?>
