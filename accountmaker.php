<?php

$host = '127.0.0.1';
$database = 'pasta';
$port = 3307;
$user = 'root';
$password = '';


try {
    $connection = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4;port=$port", $user, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $username_check = $connection->prepare("SELECT * FROM gebruiker WHERE username=:username");
    $username_check->bindParam(':username', $username);
    $username_check->execute();

    if ($username_check->rowCount() > 0) {
        echo "Fout: De opgegeven gebruikersnaam is al in gebruik.";
    } else {
        $email_check = $connection->prepare("SELECT * FROM gebruiker WHERE email=:email");
        $email_check->bindParam(':email', $email);
        $email_check->execute();

        if ($email_check->rowCount() > 0) {
            echo "Fout: Het opgegeven e-mailadres is al in gebruik.";
        } else {
            $sql = "INSERT INTO gebruiker (username, password, email) VALUES (:username, :password, :email)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                echo "Gebruiker gemaakt";
            }
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$connection = null;

?>