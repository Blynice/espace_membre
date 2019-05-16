<?php
session_start();
require 'include/header.php';
require 'application/reg.php';
?>
 <header id = "jumbotron" class="jumbotron bg-primary jumbotron-fluid">

    <div class="container">
        <h1 id="font" class="display-4">Inscription</h1>
        <p class="info">Bienvenue sur mon site, pour en voir plus inscrivez-vous!
            Sinon <a class="nav-link" href="login.php">connectez-vous </a>
        </p>
    </div>
    <button class="btn btn-secondary" id="change">Changer de thème</button>
</header>
    <div class="container container-color" id="bg">
        <div class ="d-flex justify-content-center">

          <form action="index.php" method="post" class="form-signin">
              <label for="pseudo" class="sr-only">Pseudo</label>
              <input type="text"  name= "pseudo" class="form-control" placeholder="Pseudo" required autofocus
                  value ="<?php if (isset($_POST["pseudo"])) echo $_POST["pseudo"]?>">

              <label for="city" class="sr-only">Votre ville</label>
              <input type="text"  name= "city" class="form-control" placeholder="Votre ville" required autofocus
              value ="<?php if (isset($_POST["city"])) echo $_POST["city"]?>">

              <label for="email" class="sr-only">Votre email</label>
              <input type="email"  name= "email" class="form-control" placeholder="Votre email" required autofocus
              value ="<?php if (isset($_POST["email"])) echo $_POST["email"]?>">

              <label for="password" class="sr-only">Mot de passe</label>
              <input type="password"  name="password" class="form-control" placeholder="Mot de passe" required>

              <label for="password" class="sr-only">Mot de passe(confirmer)</label>
              <input type="password"  name="password_confirm" class="form-control" placeholder="Mot de passe(confirmer)" required>

              <button id="btn" name="inscription" class="btn btn-lg btn-primary btn-block" type="submit">Je m'inscris</button>
              <?php
                  if(isset($error)){
                   echo '<div class="error text-center">', $error, '</div>';  }
              ?>

          </form>
        </div>
    </div>

<?php require 'include/footer.php'; ?>

  <script src = "script/script.js"></script>
