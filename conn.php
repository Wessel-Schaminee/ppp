<?php


$host = '127.0.0.1:3307';
$dbname = 'pasta';
$user = 'root';
$password = '';


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>