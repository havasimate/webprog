<?php
try {
    $dbh = new PDO(
        'mysql:host=mysql.omega:3306;dbname=csacskamacska',
        'csacskamacska',
        'csacskamacska',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $sql = "SELECT * FROM uzenetek ORDER BY idopont";
    $stmt = $dbh->prepare($sql);

try {
        $stmt->execute();
        echo '<table>';
        echo '<thead><tr><th scope="col">Name</th><th scope="col">Email</th><th scope="col">Message</th><th scope="col">Idopont</th></tr></thead>';
        echo '<tbody>';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '<td>' . $row['idopont'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } catch (PDOException $e) {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $e->getMessage() . '</div>';
    }
} catch (PDOException $e) {
    echo '<div class="alert alert-danger" role="alert">Connection failed: ' . $e->getMessage() . '</div>';
}
?>