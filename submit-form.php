<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);


  if (empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)) {
    $name_error = "Please enter a valid name";
  }


  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Please enter a valid email address";
  }


  if (empty($message)) {
    $message_error = "Please enter a message";
  } elseif (strlen($message) > 300) {
    $message_error = "Message can not be longer than 300 characters";
  }


  if (empty($name_error) && empty($email_error) && empty($message_error)) {
    $to = "youremail@example.com";
    $subject = "New message from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
      $success_message = "Üzenek elküldve!";
    } else {
      $error_message = "Oops! Something went wrong. Please try again later.";
    }
  }
}

?>
=======
>>>>>>> 4d2e03e6627f1b22fc108d96d222eb7ac4adba5b
