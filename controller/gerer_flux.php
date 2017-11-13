<?php

require "Model/gerer_flux.php";

if(isset($_POST['submit'])){
	if(isset($_POST['titre']) && !empty($_POST['titre']) && preg_match("#^([A-Z]([a-z]){1,})|([A-Za-z0-9 -_]{1,})$#",$_POST['titre'])){
	   if(isset($_POST['lien']) && !empty($_POST['lien'])){

                $titre = $_POST['titre'];
                  $lien = $_POST['lien'];
                  $cat = $_POST['cat'] ; 
           
                    
            ajout_un_flux($titre , $lien , $cat ) ;
			
			$reussite = '<div class="alert alert-success">
			Le flux a était ajouter à la base de données  </div> ';
           	}
	else
	{
        $erreur = '<div class="alert alert-warning"> <strong>Warning!</strong>Veullez saisir un Lien dans le bon</div>' ;
	}

	}
	else
	{
        $erreur = '<div class="alert alert-warning"> <strong>Warning!</strong>Veullez saisir un Nom dans le bon</div>' ;
	}
}
	
?>
    <?php if(isset($erreur) && !empty($erreur) ) {echo $erreur ; } ?>
        </br>
        </br>
        <?php if(isset($reussite) && !empty($reussite) ) {echo $reussite ; } ?>
            </br>
            </br>
            <form method="post" class="form-horizontal" action="#" class="form">
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Titre:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="titre" value=""> </div>
                </div>
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Lien:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="lien" value=""> </div>
                </div>
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Categorie:</label>
                    <div class="col-sm-9">
                        <select class="btn btn-default " name="cat" >
                        <?php   
                            $req = "Select * from theme ";
                            $requete = $bdd->query($req);

                            while($data = $requete->fetch())
                            {	
                               echo " <option value=".$data['id_t'].">".$data['nom']."</option></br>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary pull-left" data-somestringvalue-text="Loading Finished" autocomplete="off">Ajouter</button>
                    </div>
                </div>
            </form>
            <div class="contenaire">
                <div class="row">
                    <div class="col-xs-7 col-xs-offset-2">
                        <h1>Flux_RSS :</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Lien</th>
                                    <th>Categorie</th>
                                </tr>
                            </thead>
                            <?php
                            $req = 'SELECT * FROM flux f , theme t , appartenir a where f.id_f = a.id_f and a.id_t=t.id_t  ';
                            $requete = $bdd->query($req);

                            while($data = $requete->fetch())
                            {
                            ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $data['titre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['lien']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nom']; ?>
                                        </td>
                                        <td> <a href='<?php echo "index.php?page=Modifier_flux&id_t=".$data['id_t']."&id_f=".$data['id_f']; ?>'>Modifier </a> </td>
                                        <td> <a href='<?php echo "index.php?page=Supprimer_flux&supp=flux&id_t=".$data['id_t']."&id_f=".$data['id_f']; ?>'>Supprimer </a> </td>
                                    </tr>
                                </tbody>
                                <?php
}
echo "</table>";
?>
                    </div>
                </div>
            </div>
</div>