<html>
  <body>

  <?php
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Vul eerst uw naam in";
  } else {
    $name = test_input($_POST["name"]);
  }

 if (empty($_POST["email"])) {
    $emailErr = "Vul eerst uw email adres in";
  } else {
    $email = test_input($_POST["email"]);
  } 

  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $emailErr = "Vul eerst uw bericht in";
  } else {
    $email = test_input($_POST["message"]);
  } 

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  </body>
</html>