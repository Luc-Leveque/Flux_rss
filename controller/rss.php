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



<?php
header('COntent-type : application/rss+xml');

$articles = $bdd->query('SELECT * From article order by date_parution
 desc limit 0,25') ; 


$lastBuildDate = $bdd->query('SELECT date_parution From article order by date_parution
 desc limit 0,1') ;
$lastBuildDate = $lastBuildDate->fetch()['date_parution']  ;

?>

<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>Mon site</title>
        <description>Ceci est un exemple de flux RSS 2.0</description>
        <lastBuildDate><?= date(DATE_RSS , strtotime($lastBuildDate)) ?> </lastBuildDate>
        <link>http://www.example.org</link>
        <?php while($data = $articles->fetch()){  ?>
        <item>
            <title><?= $data['titre'] ?></title>
            <description><?= $data['contenu'] ?></description>
            <pubDate><?= date(DATE_RSS , strtotime($data['date_parution'])) ?></pubDate>
            <link>http://www.example.org/?id=<?= $data['id_a'] ?></link>
            <image>
                <url>http://www.example.org/miniature/?id=<?= $data['id_a'] ?></url>
                <link>http://www.example.org/miniature/?id=<?= $data['id_a'] ?></link>
            </image>
        </item>
        <?php } ?>
    </channel>
</rss>