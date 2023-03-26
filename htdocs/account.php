<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/account.css">

</head>
<body>
    <header>
    <nav>
        <a class="navbar-brand" href="index.php">
            SushiKoning
        </a>
        <ul class="nav-list">
            <li class="nav-item">
               <a class="nav-link" href="producten.php">Producten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overons.php">Over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account.php">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section class="login">
        <form>
            <h5>Heeft u een account?</h5>
            <h3>Inloggen</h3>

        <label for="username">Gebruikersnaam</label>
        <input type="text" placeholder="Email of telefoonnummer" id="username">

        <label for="password">Wachtwoord</label>
        <input type="password" placeholder="Wachtwoord" id="password">

        <button>Log In</button>
    </form>

    </section>
    
    <section class="register">
    <form>
            <h5>Nog geen account?</h5>
            <h3>Registreren</h3>

        <label for="username">Gebruikersnaam</label>
        <input type="text" placeholder="Email of telefoonnummer" id="username">

        <label for="password">Wachtwoord</label>
        <input type="password" placeholder="Wachtwoord" id="password">

        <button>Registreer</button>
    </form>
    </section>
</main>

<footer>
    <section class="footer-content">
        <h3>SushiKoning</h3>
        <p>Vragen of opmerkingen? Mail ons!</p>
        <a href="#" id="email">SushiKoning@info.com</a>
        <p>Of bezoek een van onze socials hieronder.</p>
        <ul class="socials">
            <li><a id="instagram" href="https://www.google.com/" target="_blank"><i
                        class="fa fa-instagram"></i></a></li>
            <li><a id="twitter" href="https://www.google.com/" target="_blank"><i
                        class="fa fa-twitter"></i></a></li>
            <li><a id="facebook" href="https://www.google.com/" target="blank"><i
                        class="fa fa-facebook-square"></i></a></li>
        </ul>
    </section>
    <section class="footer-bottom">
        <p>copyright ©2023 SushiKoning | All Rights Reserved.</p>
    </section>
</footer>