<?php
// Connect to the MySQL database
$host = "";
$dbname = "";
$username = "";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Retrieve the form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Prepare and execute the SQL query to insert the form data into the database
$sql = "INSERT INTO your_table_name (name, email, message) VALUES (:name, :email, :message)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

try {
    $stmt->execute();
    echo "Form data successfully saved to the database.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>
