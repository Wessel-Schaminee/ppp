<?php

include '../connection/conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$username_check = $conn->prepare("SELECT * FROM gebruiker WHERE username=:username");
$username_check->bindParam(':username', $username);
$username_check->execute();

if ($username_check->rowCount() > 0) {
    echo "Fout: De opgegeven gebruikersnaam is al in gebruik.";
} else {
    $email_check = $conn->prepare("SELECT * FROM gebruiker WHERE email=:email");
    $email_check->bindParam(':email', $email);
    $email_check->execute();

    if ($email_check->rowCount() > 0) {
        echo "Fout: Het opgegeven e-mailadres is al in gebruik.";
    } else {
        $sql = "INSERT INTO gebruiker (username, password, email) VALUES (:username, :password, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo "Gebruiker gemaakt";
        }
    }
}


$connection = null;

?>