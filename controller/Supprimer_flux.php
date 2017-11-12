<?php
require "Model/gerer_flux.php";
 
$id_f = (int)$_GET['id_f'];
$id_t = (int)$_GET['id_t'];

		supprimer_flux($id_f,$id_t) ; 

header('Location:index.php?page=gerer_flux');



?>