<?php
session_start();
require 'include/header.php';
require 'application/user.php';
?>



<header>
<div id="jumbotronTheme" class="jumbotron jumbotron-fluid bg-primary text-center">
  <div class="container">
    <h2 id="headerTitleTheme" class="text-center col-xs">Bienvenue <?= $user['pseudo'] ?> :)</h2>
  </div>
</div>
</header>
<section  id="bgProfilTheme">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" id="cardBgTheme" style="width: 18rem;">
        <h5  id="titleCardTheme" class="card-header text-center">Mon Profil</h5>
        <img src="https://placeimg.com/150/150/any" class="card-img-top rounded-circle mx-auto d-block" alt="image user profil">
          <p class="card-text">
            <ul id= "fontProfilTheme" class="list-group list-group-flush">
              <li class="list-group-item">Pseudo: <?= $user['pseudo'] ?></li>
              <li class="list-group-item">Ville: <?= $user['city']; ?></li>
              <li class="list-group-item">Email: <?= $user['email']; ?></li>
              <li class="list-group-item">Date d'inscription: <?= $newDate ?></li>
            </ul>
          </p>
      </div>
    </div>
<div class="col-sm-8">
  <div class="card text-center card-modif">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Changer de thème</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="infoModif.php">Modifier mes informations</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title title-modif text-center">Choisir un thème pour mon profil</h5>
       <p class= "content-butn">
          <button type="button" class="butn_nature" id="nature" data-toggle="tooltip" data-placement="top" title="Thème nature"></button>
          <button type="button" class="butn_rubble" id="rubble" data-toggle="tooltip" data-placement="top" title="Thème Rubble"></button>
          <button type="button" class="butn_PJmask" id="PJmask" data-toggle="tooltip" data-placement="top" title="Thème Pyjamask"></button>
          <button type="button" class="butn_night" id="night"  data-toggle="tooltip" data-placement="top" title="Thème Nuit"></button>
      </p>
  </div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm">
    <div class="card" style="width: 18rem;">
      <h5 class="card-header">Paramètres</h5>
      <ul class="list-group list-group-flush">
        <li><a class="nav-link" href="index.php">Modifier mes informations</a></li>
        <li><a class="nav-link" href="logout.php">Me déconnecter</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>

<?php
if(isset($error)){
  echo $error;
}
?>
<footer id= "footerTheme" class="nav-footer">
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <i class="fab fa-github"></i>
    <a class="nav-link" href="https://github.com/Blynice">github</a>
  </li>
  <li class="nav-item">
    <i class="fab fa-codepen"></i>
    <a class="nav-link" href="https://codepen.io/Minky/">codepen</a>
  </li>
  <li class="nav-item">
    <i class="fas fa-laptop-code"></i>
    <a class="nav-link" href="#">Portfolio(En cours)</a>
  </li>
</ul>
</footer>
  <script src = "script/changeTheme.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>
