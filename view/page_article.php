
<?php    
foreach($articles as $article)
    {
    ?>
        
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                    <a href="index?page=page_article&id_a="<?php echo  $article['id_a'] ;  ?>><h4 class="media-heading"><?php echo $article['titre'] ; ?></h4></a> 
                    <?php echo $article['contenu']; ?>
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
<?php
$req = "Select * from commentaire c, user u where u.id_u=c.id_u and id_a = $id_a ";
$requete = $bdd->query($req);

while($data = $requete->fetch())
{	
?>
<div class="container">
<h3>Espace commentaire :</h3>

	<div class="row">
        <div class="comment-box">
            <div class="comment-head">
                <h6 class="comment-name by-author"><?= $data['login'] ?></h6>
                <span><?= $data['date_post'] ?></span>
            </div>
            <div class="comment-content">
            <?= $data['contenu'] ?>
            </div>
        </div>
    </div>
</div>



<?php }