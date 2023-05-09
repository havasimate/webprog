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
        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th><th>Message</th><th>Idopont</th></tr>';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '<td>' . $row['idopont'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
