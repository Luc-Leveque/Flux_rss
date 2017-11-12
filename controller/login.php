<?php


require "Model/authentification.php";

$cookie_name = "user";

if(!isset($_COOKIE[$cookie_name])) {
        if(isset($_POST['submit'])){
            $error = false;
        if(!isset($_POST['email'])){
            $error = true;
        }
        if(!isset($_POST['mdp']) || !preg_match("#^([A-Za-z0-9]{1,})$#",$_POST['mdp'])){
            $error = true;
        }

        if($error == false){
            $alert = login(sha1($_POST['mdp']), $_POST['email']);
            echo $alert;
            if(isset($_SESSION['id_u']) && isset($_POST['svm'])){
                cookie($_SESSION['id_u']);
                header('Location:index.php?page=accueil');
            }
        }
    } 
}

if(isset($_COOKIE[$cookie_name])){
    $cookie  = $_COOKIE[$cookie_name] ; 
    verif_cookie($cookie);{
    header('Location:index.php?page=accueil'); 
    }
}




require "view/login.php";
