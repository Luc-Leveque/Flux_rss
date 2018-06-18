<?php

require "Model/gerer_flux.php";

$req1 = lesthemes() ;
$req2 = lescats();

if(isset($_POST['submit'])){
	if(isset($_POST['titre']) && !empty($_POST['titre']) && preg_match("#^([A-Z]([a-z]){1,})|([A-Za-z0-9 -_]{1,})$#",$_POST['titre'])){
	   if(isset($_POST['lien']) && !empty($_POST['lien'])){

                 $titre = $_POST['titre'];
                  $lien = $_POST['lien'];
                  $cat = $_POST['cat'] ; 
           
                    
            ajout_un_flux($titre , $lien , $cat ) ;
			
			$reussite = '<div class="alert alert-success">
			Le flux a était ajouter à la base de données  </div> ';
           	}
	else
	{
        $erreur = '<div class="alert alert-warning"> <strong>Warning!</strong>Veullez saisir un Lien dans le bon</div>' ;
	}

	}
	else
	{
        $erreur = '<div class="alert alert-warning"> <strong>Warning!</strong>Veullez saisir un Nom dans le bon</div>' ;
	}
}

require "view/gerer_flux.php";
?>
