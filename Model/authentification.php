<?php

function inscription($nom , $prenom , $mdp , $email , $login){
    
    
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO user(nom,prenom,email,mdp,login)  Values(:nom ,:prenom , :email , :mdp , :login) ");
    $requete ->bindValue(":nom",$nom,PDO::PARAM_STR);
    $requete ->bindValue(":login",$login,PDO::PARAM_STR);
    $requete ->bindValue(":prenom",$prenom,PDO::PARAM_STR);
    $requete ->bindValue(":email",$email,PDO::PARAM_STR);
    $requete ->bindValue(":mdp",$mdp,PDO::PARAM_STR);
    $requete->execute();
    
    return $requete;
}

function login($mdp , $email){
        $alert="";
        global $bdd ;
        $requete = $bdd->prepare("SELECT * FROM user WHERE  email=:email  ");
        $requete ->bindValue(":email",$email,PDO::PARAM_STR);
        $requete->execute();
    
        if($reponse = $requete->fetch()){
                    $_SESSION['connecte'] = true;
                    $_SESSION['id_u'] = $reponse['id_u'];
                    $_SESSION['lvl'] = $reponse['lvl'];
            $alert= "t'es co";
            return $alert;
        }
        $alert="erreur de connexion";
        return $alert;
    }

function cookie($id){
    $cookie_id = "user";
    $cookie_value = $id;
    setcookie($cookie_id, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

function verif_cookie($cookie){
    if(!isset($cookie)) {
         return false ; 
    } 
    else{
            global $bdd ;
            $requete = $bdd->prepare("SELECT * FROM user WHERE  id=:id  ");
            $requete ->bindValue(":id",$cookie,PDO::PARAM_STR);
            $requete->execute();
            $_SESSION['connecte'] = true;
            $_SESSION['id_u'] = $reponse['id_u'];
            $_SESSION['lvl'] = $reponse['lvl'];
    }
}