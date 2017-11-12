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