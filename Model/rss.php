<?php

function ajout_donnée_flux($titre , $contenu , $link , $date_parution ,$cat ){
     
    global $bdd ; 
    
    $requete = $bdd->prepare("INSERT INTO article(titre , contenu  , date_parution , link , id_t)  Values(:titre ,:contenu , :date_parution , :link , :id_t) ");
    $requete ->bindValue(":titre",$titre,PDO::PARAM_STR);
    $requete ->bindValue(":contenu",$contenu,PDO::PARAM_STR);
    $requete ->bindValue(":date_parution",$date_parution,PDO::PARAM_STR);
    $requete ->bindValue(":link",$link,PDO::PARAM_STR);
    $requete ->bindValue(":id_t",$cat,PDO::PARAM_INT);
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

function recup_lien(){

    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT lien FROM flux ");
    $requete->execute();
    return $requete->fetchAll();
}


function supprimer_article($id_a){
     
    global $bdd ;
    
			$req = "DELETE FROM article WHERE id_a= :id_a";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':id_a' => $id_a
			));
}
