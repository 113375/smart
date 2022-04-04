<?php
try {
    $user = 'root';
    $password = 'root';
    $host = 'localhost';
    $pdo = new PDO('mysql:host=localhost;dbname=smart', $user, $password, array(
        PDO::ATTR_PERSISTENT => true
    ));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>