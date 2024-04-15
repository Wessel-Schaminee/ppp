<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta Paradise Place</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets\js\script.js"></script>
</head>

<body>
    <div class="landing">
        <div class="header-container">
            <h1 class="head-text">Pasta Paradise Place</h1>
            <div class="header-button">
                <a id="signup-header" class="button-header" onclick="showsign()">Maak Account</a>
                <a id="login-header" class="button-header" onclick="showLogin()">Inloggen</a>
                <a class="button-header" href="pages\order.php">Menu</a>
                <a class="button-header" href="locatitie.php">Locatie</a>
                <a class="button-header" href="pages\dashboard.php">Account</a>
            </div>
        </div>

        <div class="hero">
            <h2 class="hero-text-h2">Pasta Paradise Place</h2>
            <button class="hero-knopje">Reseveer Nu!</button>
        </div>
    </div>


    <div id="popup" class="popup-container">
        <div class="signup-form">
            <span class="close-btn"><button class="button-21" onclick="closeSignup()" role="button">X</button></span>

            <h2 class="h2-makeaccount">Maak een account!</h2>
            <form action="pages\accountmaker.php" method="post">
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
            <form action="functions\login_process.php" method="post">
                <label class="text-input" for="username">Gebruikersnaam:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label class="text-input" for="password">Wachtwoord:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Inloggen!">
            </form>
        </div>
    </div>
    <div class="about-body">
        <div class="main-about">

            <h2 class="hero-text-h2">Pasta Paradise Place</h2>
        </div>
        <div class="pragraph-about">
            <div class="text-about">
                <p class="p-about">Welkom bij Pasta Paradise Place, waar elke maaltijd een reis is door de smaken van
                    Italië! Ons <br>
                    restaurant is meer dan alleen een plek om te eten; het is een samensmelting van passie, traditie en
                    <br>
                    innovatie, allemaal samengebracht om een onvergetelijke eetervaring te creëren. <br><br>

                    Onze Geschiedenis: <br>
                    Pasta Paradise Place werd opgericht in 1995 door de visionaire chef-kok, Giovanni Rossi. Afkomstig
                    <br>
                    uit een klein dorpje in Italië, bracht Giovanni generaties aan familierecepten mee en een droom om
                    <br>
                    de authentieke smaak van de Italiaanse keuken met de wereld te delen. Met vastberadenheid en liefde
                    <br>
                    voor het koken, transformeerde hij een bescheiden trattoria tot de geliefde culinaire bestemming die
                    <br>
                    het vandaag is. <br><br>
                    De Ervaring: <br>
                    Stap binnen bij Pasta Paradijs Plek en je wordt begroet door de geur van pruttelende sauzen, de <br>
                    warmte van rustieke decoratie en het geluid van gelach en klinkende glazen. Ons vriendelijke <br>
                    personeel is toegewijd aan het bieden van onberispelijke service, zodat elk bezoek een genot is voor
                    <br>
                    de zintuigen. <br> <br>
                    Kom Bij Ons Bij Pasta Paradijs Plek: <br>
                    Of je nu een speciale gelegenheid viert, geniet van een gezellig diner voor twee, of gewoon snakt
                    <br>
                    naar een vleugje Italië, we nodigen je uit om bij ons te komen bij Pasta Paradijs Plek. Ervaar de
                    <br>
                    magie van de Italiaanse keuken, waar elke hap een verhaal vertelt en elke maaltijd een viering is
                    <br>
                    van la dolce vita. Buon appetito! <br>
                </p>
            </div>
        </div>
    </div>
</body>

</html>