<?php
session_start();
require 'include/header.php';
require 'application/user.php';
?>


<header class="jumbotron jumbotron-fluid">
   <div class="container">
      <nav>
         <ul class="nav">
            <li class="nav-item">
               <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="logout.php">Me déconnecter</a>
            </li>
         </ul>
      </nav>
         <h1 class="text-center">Mon profil</h1>
      </div>
</header>
<div class="container">
   <div class="row">
      <div class="col-sm">
         <img src="https://placeimg.com/300/300/any" class="img-thumbnail" alt="image profil">
      </div>
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <div class="card-header">
               MON PROFIL
            </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">Pseudo: <?= $user['pseudo'] ?></li>
                  <li class="list-group-item">Ville: <?= $user['city']; ?></li>
                  <li class="list-group-item">Email: <?= $user['email']; ?></li>
                  <li class="list-group-item">Date d'inscription: <?= $newDate ?></li>
               </ul>

<?php
  if(isset($error)){
    echo $error;
  }
?>
      </div>
   </div>
</div>


<?php
require ('include/footer.php');
?>
