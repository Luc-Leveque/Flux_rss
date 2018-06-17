<?php

require "Model/article.php";


    $id = $_GET['cat'];
    $reponse = getLienSelonId($id);
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$reponse['lien']);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $contenu = curl_exec($curl);

    $xml = new simpleXMLElement($contenu);

    require "view/page_article.php";
?>