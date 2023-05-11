<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $message = $_POST["message"];

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Hibas email!";
  }


  if (empty($message)) {
    echo "Nem lehet ures az uzenet!";
  } elseif (strlen($message) > 300) {
    echo "Az uzenet max 300 karakter lehet!";
  }

}
