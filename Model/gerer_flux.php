<?php

function ajout_un_flux($titre , $lien , $cat ){
     
    global $bdd ;
    
			$req = "INSERT INTO flux (titre,lien) VALUES (:titre,:lien)";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':titre' => $titre,
			':lien' => $lien
			));
           
           
           $id_f =$bdd->lastInsertId();
           
           $req = "INSERT INTO appartenir (id_f,id_t) VALUES (:id_f, :id_t)";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':id_f' => $id_f,
			':id_t' => $cat
			));
}

function supprimer_flux($id_f,$id_t){
     
    global $bdd ;
    
			$req = "DELETE FROM flux WHERE id_f= :id_f";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':id_f' => $id_f
			));

                   
           $req = "DELETE FROM appartenir where id_f=:id_f and  id_t = :id_t";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':id_f' => $id_f,
			':id_t' => $id_t
			));
}

function mod_flux($titre , $lien , $id_f , $cat){
    
    global $bdd ;
    
    $requete = 'UPDATE flux SET titre = :titre, lien = :lien WHERE id_f = :id_f';

	$requete = $bdd->prepare($requete);
	$requete = $requete->execute(array(
		'titre' => $titre ,
		'lien' => $lien ,
		'id_f' => $id_f
	));
    
    $requete  ="UPDATE appartenir SET id_t = :cat WHERE id_f = :id_f";
        
    $requete = $bdd->prepare($requete);
	$requete = $requete->execute(array(
		':cat' => $cat ,
		':id_f' => $id_f
	));
}


function ajout_une_cat($nom){
     
    global $bdd ;
    
			$req = "INSERT INTO theme (nom) VALUES (:nom)";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':nom' => $nom
			));
}

function supprimer_cat($id_t){
     
    global $bdd ;
    
			$req = "DELETE FROM theme WHERE id_t= :id_t";
			$req = $bdd->prepare($req);
			$req = $req->execute(array(
			':id_t' => $id_t
			));
}



function lesthemes(){
        
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM theme  ");
    $req->execute();
    return($req);
    
}

function lescats(){
        
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM flux f , theme t , appartenir a where f.id_f = a.id_f and a.id_t=t.id_t ");
    $req->execute();
    return($req);
    
}

function req($id){
        
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM flux f , theme t , appartenir a where f.id_f = a.id_f and a.id_t=t.id_t  and f.id_f=:id ");
    $req->execute(array(':id' => $id));
    return($req);
    
}


