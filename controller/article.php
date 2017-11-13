<?php

require "Model/article.php";


$title = "article";

//$articles = get_last_articles(); 


$req = "Select * from article ";
$requete = $bdd->query($req);

while($data = $requete->fetch())
{	

?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                    <?php 
                    echo "<h4 class='media-heading'><a href='index?page=page_article&id_a=".$data['id_a']."'>".$data['titre']."</a></h4> " ; ?> 
                    <?php echo str_sub($data['contenu']) ; ?>
                    <div class="clearfix"></div>
                    <a href="<?php echo $data['link'] ; ?>"><?php echo $data['link'] ; ?></a>             
               </div>
            </div>
        </div>
    </div>
</div>
    <?php   
    }

?>


