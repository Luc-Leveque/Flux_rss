<?php

require "Model/article.php";


$cat = (int)$_GET['cat'];

$articles = get_last_articles_by_cat(0,10,$cat); 

require "view/accueil.php";

foreach($articles as $k=> $v)
{
    $articles[$k]['contenu'] = str_sub($articles[$k]['contenu']);
}
    foreach($articles as $article)
    {
    ?>
        
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                    <?php 
        echo "<h4 class='media-heading'><a href='index?page=page_article&id_a=".$article['id_a']."'>".$article['titre']."</a></h4> " ; ?> 
                    <?php echo str_sub($article['contenu']) ; ?>
                    <div class="clearfix"></div>
                    <a href="<?php echo $article['link'] ; ?>"><?php echo $article['link'] ; ?></a>             
               </div>
            </div>
        </div>
    </div>
</div>
    <?php   
    }

?>