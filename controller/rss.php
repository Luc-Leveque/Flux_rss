<?php

require "Model/rss.php";

    $contenu = curl("http://www.lefigaro.fr/rss/figaro_sciences.xml");
    $xml = new simpleXMLElement($contenu);

    foreach($xml->channel->item as $v){
        $titre = $v->title ;
        $desc = $v->description ;
        $date = $v->pubDate ; 
        $link = $v->link ;
        $date = strftime("%Y-%m-%d %H:%M:%S", strtotime($date));
        
        if(verif_existe($link)){
             ajout_donnée_flux($titre, $desc, $link, $date) ;   
        }
    } 
?>
