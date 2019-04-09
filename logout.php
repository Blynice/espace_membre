<?php
session_start();
require 'include/header.php';
session_destroy();
echo "Vous êtes déconnecté"
?>


<header class="jumbotron jumbotron-fluid">
<nav>
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
    </li>
    </ul>
</nav>
<h1 class="display-4">Déconnexion</h1>
    <p>Se connecter à nouveau</p>
</header>
    <form action="login.php" method="POST" class="form-signin">
        <label for="email" class="sr-only">Votre email</label>
        <input type="email"  name= "email" class="form-control" placeholder="Votre email" required autofocus>
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password"  name="password" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="connect">Connexion</button>
    </form>
<?php
    require 'include/footer.php';
?>
