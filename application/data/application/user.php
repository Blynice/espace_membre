<?php

$user = $_SESSION['user'];

// changement de format d'affichage de la date
$origDate = $user['creation_date'];
$newDate = date("d-m-Y", strtotime($origDate));

if(isset($_GET['user'])) {
    $id = htmlspecialchars($_GET['user']);
    
    $req = $db->prepare("SELECT * FROM users WHERE id = ?");
    $req->execute(array($id));
    
    if($req->rowCount() == 1){

        $user = $req->fetch();
    }else{
        $error = 'Utilisateur introuvable';
    } 
}