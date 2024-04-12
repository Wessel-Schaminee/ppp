<?php
session_start();
$post_username = $_POST['username'];
$post_password = $_POST['password'];

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "pasta";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4;port=3307", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
            header("location: dashboard.php");
        } elseif ($_SESSION['rol'] == "1") {
            header('Location: adminpanel.php');
        }
    } else {
        echo "Fout: Verkeerde gebruikersnaam of wachtwoord.";
    }
} catch (PDOException $e) {
    echo "Connectie gefaald: " . $e->getMessage();
}

$conn = null;
?>