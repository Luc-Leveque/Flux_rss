<?php

require "Model/article.php"; ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2">
                <h1>Les derniers articles</h1>
            </div>
        </div>
    </div>


    <?php 

    
$reponse = getLien();
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$reponse['lien']);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$contenu = curl_exec($curl);
$xml = new simpleXMLElement($contenu);
foreach($xml->channel->item as $v){
    
    require "view/accueil.php";
    
     } 
