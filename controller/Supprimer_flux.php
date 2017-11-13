<?php
require "Model/gerer_flux.php";

$supp = $_GET['supp'];
$id_t = (int)$_GET['id_t'];
if(isset($_GET['id_f'])){
    $id_f = (int)$_GET['id_f'];
    supprimer_flux($id_f,$id_t) ;
    header("Location:index.php?page=gerer_$supp");
}

supprimer_cat($id_t) ; 
header("Location:index.php?page=gerer_$supp");

?>

