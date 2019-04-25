<?php
/****************************************INSCRIPTION************************************/
if(isset($_POST['inscription'])){
    if(isset($_POST['pseudo']) AND isset($_POST['city']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['password_confirm'])){

        if(!empty($_POST['pseudo']) AND !empty($_POST['city']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password_confirm'])){

            // definition des variables

            $pseudo = trim(htmlspecialchars($_POST['pseudo']));
            $city = trim(htmlspecialchars($_POST['city']));
            $email = trim(htmlspecialchars($_POST['email']));
            $password = trim(htmlspecialchars($_POST['password']));
            $password_confirm = trim(htmlspecialchars($_POST['password_confirm']));

            // filtres entrées utilisateur

            if(strlen($email <= 255)){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if(strlen($pseudo) >= 3 AND strlen($pseudo) <= 255){
                        if(strlen($password) >= 6 AND strlen($password) <= 50){
                            if($password == $password_confirm){

                                //cryptage du mot de passe
                                $password_crypt = hash('sha256', $password);

                                //insertion des valeurs dans la bdd
                                $req = $db->prepare("INSERT INTO users (pseudo, city, email, password) VALUES (?,?,?,?)");
                                $req->execute(array($pseudo, $city, $email, $password_crypt));
                                header('location: login.php');

                            }else{
                                $error = "Vos mot de passe ne correspondent pas";
                            }

                        }else{
                            $error = "Votre mot de passe doit comporter au moin 6 caractères";
                        }
                    }else{
                        $error = "Votre pseudo doit comporter entre 3 et 255 caractères";
                    }

                }else{
                    "Votre email a un format incorrect";
                }
            }else{
                $error = "Votre email doit faire moins de 255 caractères";
            }

        }else{
            $error = "Veuillez remplir tous les champs";
        }
    }
}

?>
