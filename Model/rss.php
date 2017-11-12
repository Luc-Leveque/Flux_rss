<?php

function ajout_donnée_flux($titre , $contenu , $link , $date_parution ){
     
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO article(titre , contenu  , date_parution , link)  Values(:titre ,:contenu , :date_parution , :link) ");
    $requete ->bindValue(":titre",$titre,PDO::PARAM_STR);
    $requete ->bindValue(":contenu",$contenu,PDO::PARAM_STR);
    $requete ->bindValue(":date_parution",$date_parution,PDO::PARAM_STR);
    $requete ->bindValue(":link",$link,PDO::PARAM_STR);
    $requete->execute();

}

function verif_existe($link){
    
    global $bdd ; 
   
    $articles = $bdd->query('SELECT link FROM article') ; 
    while($data = $articles->fetch()){
        if($link == $data['link']){
            return false ; 
        }
    }
    return true ;
}