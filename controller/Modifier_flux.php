<?php 

require "Model/gerer_flux.php";

$id = (int)$_GET['id_f']; 

$req1 = req($id) ;
$req2 = lescats();


if(isset($_POST['submit'])){
    
	$id_f = (int)$_GET['id_f']; 
    $titre = htmlspecialchars($_POST['titre']); 
	$lien = htmlspecialchars($_POST['lien']);
    $cat = htmlspecialchars($_POST['cat']); 

    mod_flux($titre , $lien , $id_f , $cat) ; 


    header("Location:index.php?page=gerer_flux");


}

require "view/modifier_flux.php";