<?php
/***************************************Connexion à la base de données*******************************/

  /*  $db = new PDO('mysql:host=localhost;dbname=brce8142_espace_membre;charset=utf8', 'brce8142_selyne', 'Kobayashi2019');*/
try
{
  $db = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?>
