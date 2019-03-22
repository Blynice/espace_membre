<?php
if(isset($_POST['connect'])){
    if(isset($_POST['email']) AND isset($_POST['password'])){
        if(!empty($_POST['email']) AND !empty($_POST['password'])){

            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $crypt_password = hash('sha256', $password);

            $req = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $req->execute(array($email, $crypt_password));

            if($req->rowCount() == 1){

                $user = $req->fetch();
                $_SESSION['user'] = $user;

                header('location: profil.php');
                exit();

        }else{
            $error = "Nom d'utilisateur ou mot de passe incorrect";
        }
        }
    }else{
        $error = "ERREUR";
    }
}