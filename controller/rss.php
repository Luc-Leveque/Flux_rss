<?php

require "Model/rss.php";


$req = "Select * from article ";
$requete = $bdd->query($req);

while($data = $requete->fetch())
{	

    $date =strtotime($data['date_parution']);
    $timeActu = time() ;
    
    if($timeActu - $date > 604800){
        $id_a = $data['id_a'] ; 
        supprimer_article($id_a) ;
    }
}

$req = "Select * from flux f , appartenir a where a.id_f=f.id_f ";
$requete = $bdd->query($req);

while($data = $requete->fetch())
{	

    $lien = $data['lien'] ;
    $cat = $data['id_t'] ;
    
    $contenu = curl($lien);
    
    $xml = new simpleXMLElement($contenu);

    
    foreach($xml->channel->item as $v){
        $titre = $v->title ;
        $desc = $v->description ;
        $date = $v->pubDate ; 
        $link = $v->link ;
        $date = strftime("%Y-%m-%d %H:%M:%S", strtotime($date));
        
        if(verif_existe($link)){
            ajout_donnée_flux($titre, $desc, $link, $date , $cat) ;   
        }
    } 
    
}
header("Location:index.php?page=accueil");
?>


