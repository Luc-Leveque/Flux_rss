<?php

require "Model/authentification.php";

if(isset($_POST['submit'])){
    if(isset($_POST['login']) && preg_match("#^([A-Za-z0-9 -_.%]{1,})$#",$_POST['login'])){
        if(isset($_POST['nom']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['nom'])){
            if(isset($_POST['prenom']) && preg_match("#^([A-Za-z]{1,})$#",$_POST['prenom'])){
                if(isset($_POST['mdp']) && preg_match("#^([A-Za-z0-9]{1,})$#",$_POST['mdp'])){
                    if(isset($_POST['email'])){
                
                   $nom=htmlspecialchars($_POST['nom']);
                   $login=htmlspecialchars($_POST['login']);
                   $prenom=htmlspecialchars($_POST['prenom']);
                   $email=htmlspecialchars($_POST['email']);
                   $mdp=sha1(($_POST['mdp']));
                    
                    inscription($nom,$prenom,$mdp,$email,$login);
                    }
                }
            }
        }
    }
}


require "view/inscription.php";





?>