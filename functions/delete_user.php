<?php
session_start();



require_once 'connection\conn.php';

if (isset($_POST['username_or_id'])) {
    $username_or_id = $_POST['username_or_id'];


    $stmt = $conn->prepare("DELETE FROM gebruiker WHERE username = :username OR id = :id");


    $stmt->bindParam(':username', $username_or_id);
    $stmt->bindParam(':id', $username_or_id);


    $stmt->execute();


    header('Location: pages\adminpanel.php');
}
?>