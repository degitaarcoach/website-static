<!DOCTYPE html>

<?php 
  $message_sent = false;

  if(isset($_POST['email!fake']) && $_POST['email!fake'] != '') {
    if(filter_var($_POST['email!fake'], FILTER_VALIDATE_EMAIL)) {

      $userName = secure_input($_POST['name!fake']);
      $userEmail = secure_input($_POST['email!fake']);
      $subject = secure_input($_POST['subject']);
      $message = secure_input($_POST['message']);
      $honey = $_POST['name'];
      $pot = $_POST['email'];
    
      $to = "degitaarcoach@gmail.com";
      $body = "";
    
      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";
    
      if (!empty ($honey) || !empty ($pot)) {
        return;
      } 
      else 
      {
        mail($to, $subject, $body);
      }

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
    <link rel="icon" type="image/png" href="images/Favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css?v=2" />
    <link rel="stylesheet" href="media-queries.css?v=2" />
    <title>Bedankt voor je bericht!</title>
  </head>
  <body>
    <div class="screen">
      <div class="go-back-container">
        <h1>Bedankt voor je mail</h1>
        <h3>Je bericht is veilig aangekomen!</h3>
        <a class="btn" href="index.html">Ga Terug</a>
      </div>
    </div>
  </body>
  </html>