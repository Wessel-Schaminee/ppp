<?php
session_start();
$post_username = $_POST['username'];
$post_password = $_POST['password'];

require '../connection/conn.php';

$sql = "SELECT * FROM gebruiker WHERE username=:username AND password=:password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $post_username);
$stmt->bindParam(':password', $post_password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION['rol'] = $row['rol'];
    }
    if ($_SESSION['rol'] == "3") {
        header("location: ../pages\dashboard.php");
    } elseif ($_SESSION['rol'] == "1") {
        header('Location: ../pages\adminpanel.php');
    }
} else {
    echo "Fout: Verkeerde gebruikersnaam of wachtwoord.";
}


$conn = null;
?>