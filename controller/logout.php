<?php
    
    setcookie('user','valeur',time()+365*24*3600);
    setcookie('user','',time());

    session_start();
    session_destroy();

    header("location:index?page=accueil");   
?>