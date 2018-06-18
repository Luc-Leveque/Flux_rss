<?php

require "Model/gerer_flux.php";

$req = lescats();

if(isset($_POST['submit'])){
	if(isset($_POST['nom']) && !empty($_POST['nom']) && preg_match("#^([A-Z]([a-z]){1,})|([A-Za-z0-9 -_]{1,})$#",$_POST['nom'])){
                $nom = $_POST['nom'];
           
                    
            ajout_une_cat($nom);
			
			$reussite = '<div class="alert alert-success">
			Le flux a était ajouter à la base de données  </div> ';
	}
	else
	{
        $erreur = '<div class="alert alert-warning"> <strong>Warning!</strong>Veullez saisir un Nom dans le bon</div>' ;
	}
}

require "view/gerer_cat.php";
?>
