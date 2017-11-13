<?php


function get_last_articles($deb= 0 , $fin = 5){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT * FROM article LIMIT :deb ,:fin");
    $requete ->bindValue(":deb",$deb,PDO::PARAM_INT);
    $requete ->bindValue(":fin",$fin,PDO::PARAM_INT);
    $requete->execute();
    return $requete->fetchAll();
}


function displayArticle($id){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT * FROM article Where id_a = :id");
    $requete ->bindValue(":id",$id,PDO::PARAM_INT);
    $requete->execute();
    return $requete->fetchAll();
}

function commenter($id_u ,$id_a ,$contenu){
    
    global $bdd ; 

    $req = "INSERT INTO commentaire(contenu,id_u,id_a) VALUES (:contenu , :id_u , :id_a)";
        $req = $bdd->prepare($req);
        $req = $req->execute(array(
        ':contenu' => $contenu,
        ':id_u' => $id_u,
        ':id_a' => $id_a
        ));
    
}

function get_last_articles_by_cat($deb= 0 , $fin = 10 , $cat){
    
    global $bdd ; 
    
    $requete = $bdd->prepare("SELECT * FROM article where id_t= :cat LIMIT :deb ,:fin");
    $requete ->bindValue(":deb",$deb,PDO::PARAM_INT);
    $requete ->bindValue(":fin",$fin,PDO::PARAM_INT);
    $requete ->bindValue(":cat",$cat,PDO::PARAM_INT);
    $requete->execute();
    return $requete->fetchAll();
}



?>
