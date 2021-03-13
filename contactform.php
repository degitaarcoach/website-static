<!DOCTYPE html>

<?php 
  $message_sent = false;

  if(isset($_POST['email']) && $_POST['email'] != '') {
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

      $userName = secure_input($_POST['name']);
      $userEmail = secure_input($_POST['email']);
      $subject = secure_input($_POST['subject']);
      $message = secure_input($_POST['message']);
    
      $to = "degitaarcoach@gmail.com";
      $body = "";
    
      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";
    
      mail($to, $subject, $body);

      $message_sent = true;
    }
  }

  function secure_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedankt voor je bericht!</title>
  </head>
  <body>
    <h1>Bedankt voor je mail</h1>
    <a href="index.html">Ga Terug</a>
  </body>
  </html>