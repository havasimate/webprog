<?php
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=gyakorlat7',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $sql = "SELECT * FROM uzenetek ORDER BY idopont";
    $stmt = $dbh->prepare($sql);

    try {
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Name: " . $row['name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Message: " . $row['message'] . "<br>";
            echo "Idopont: " . $row['idopont'] . "<br><br>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
