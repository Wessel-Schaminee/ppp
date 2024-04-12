<?php
session_start();




// if (!isset ($_SESSION["username"]) && $checky == 0) {
//     header("location: dashboard.php");

// }

// if ($_SESSION["rol"] = "3") {
//     header("Location: dashboard.php");
// } else {
//     header("Location: adminpanel.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="header-container">
        <h1 class="head-text">Pasta Paradise Place</h1>
        <div class="header-button"> <a class="button-header" href="index.php">Home</a> <a class="button-header"
                href="">Bestellen</a> <a class="button-header" href="order.php">Menu</a> <a class="button-header"
                href="locatitie.php">Locatie</a> <a class="button-header" href="dashboard.php">Account</a>
            <form class="but" action="logout.php" method="POST">
                <input class="button-24" role="button" type="submit" value="Log Uit" type="submit" value="">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="header">
            <?php $hour = date('H');
            if ($hour >= 5 && $hour <= 11) {
                $greeting = 'Goede Morgen, ';
            } elseif ($hour >= 12 && $hour <= 17) {
                $greeting = 'Goede Middag, ';
            } else {
                $greeting = 'Goede Avond, ';
            } ?>

            <h1 class="h-with">
                <?php echo $greeting . htmlspecialchars($_SESSION["username"]); ?>!
            </h1>

        </div>

        <br><br><br>

        <h1>Bestellingen,</h1>
        <table>
            <li>Bestelling: Piza salami, Kapsalon. Bestelling nummer: #0001 Bestelling adres: Bierlaan 32 5831VP Status:
                In afwachting van betaling</li>
            <tr>
        </table> <br><br><br>
        <h1>Account Instellingen</h1>
        <p>Verander hier je gebruikersnaam, email of wachtwoord!</p>
        <?php


        ?>

    </div>
</body>

</html>