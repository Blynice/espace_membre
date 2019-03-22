<?php
session_start();
require 'include/header.php';
require 'application/log.php';
?>



<header class="jumbotron jumbotron-fluid">
    <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
        </ul>
    </nav>  
    <h1 class="display-4">Connexion</h1>
</header>

<div class="container container-color">
    <div class ="d-flex justify-content-center">
        <form action="login.php" method="POST" class="form-signin">
            <label for="email" class="sr-only">Votre email</label>
            <input type="email"  name= "email" class="form-control" placeholder="Votre email" required autofocus>
            <label for="password" class="sr-only">Mot de passe</label>
            <input type="password"  name="password" class="form-control" placeholder="Mot de passe" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="connect">Connexion</button>
        </form>
        <?php if(isset($error)) {echo $error;} ?>
        </div> 
<?php 
    require ('include\footer.php'); 
?>
</div>
    
