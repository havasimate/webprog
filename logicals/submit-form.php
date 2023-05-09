<?php session_start(); ?>
<?php
$hibak = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_SESSION['login'])) { 
    $name = $_SESSION['login'];
  
  }
  else {
    $name = "Vendég";
  }
  $email = $_POST["email"];
  $message = $_POST["message"];


  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address";
    $hibak++;
  }


  if (empty($message)) {
    echo "Please enter a message";
  } elseif (strlen($message) > 300) {
    echo "Message can not be longer than 300 characters";
    $hibak++;
  }
}

if ($hibak == 0) {
  try {
    $dbh = new PDO(
      'mysql:host=localhost;dbname=gyakorlat7',
      'root',
      '',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $sql = "INSERT INTO uzenetek (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
  
    try {
      $stmt->execute();
      echo "Sikeres uzenetkuldes!";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
