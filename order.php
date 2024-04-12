<?php


?>

<!DOCTYPE html>
<html>

<head>
    <title>Bestel menu</title>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="header-container">
        <a href="index.php">
            <h1 class="head-text">Pasta Paradise Place</h1>
        </a>
        <div class="header-button">
            <a id="signup-header" class="button-header" onclick="showsign()">Maak Account</a>
            <a id="login-header" class="button-header" onclick="showLogin()">Inloggen</a>
            <a class="button-header" href="order.php">Menu</a>
            <a class="button-header" href="">Locatie</a>
            <a class="button-header" href="dashboard.php">Account</a>
        </div>
    </div>
    <div id="popup" class="popup-container">
        <div class="signup-form">
            <span class="close-btn"><button class="button-21" onclick="closeSignup()" role="button">X</button></span>

            <h2 class="h2-makeaccount">Maak een account!</h2>
            <form action="accountmaker.php" method="post">
                <label class="text-input" for="username">Gebruikersnaam:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label class="text-input" for="password">Wachtwoord:</label><br>
                <input type="password" id="password" name="password" required><br>
                <label class="text-input" for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <input type="submit" value="Maak Account!">
            </form>
        </div>
    </div>
    <div id="popuplog" class="popup-container">
        <div class="login-form">
            <span class="close-btn"><button class="button-21" onclick="closeLogin()" role="button">X</button></span>



            <h2 class="h2-makeaccount">Inloggen</h2>
            <form action="login_process.php" method="post">
                <label class="text-input" for="username">Gebruikersnaam:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label class="text-input" for="password">Wachtwoord:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Inloggen!">
            </form>
        </div>
    </div>

    <div class="label-container">
        <div class="label active-label" data-filter="all">All</div>
        <div class="label" data-filter="pizza">Pizza</div>
        <div class="label" data-filter="pasta">Pasta</div>
        <div class="label" data-filter="kapsalon">Kapsalon</div>
    </div>
    </div>
    <div class="product-container">
        <?php require_once 'functions.php';
        $products = get_products();
        require_once 'products-container.php'; ?>
    </div>

</body>

</html>