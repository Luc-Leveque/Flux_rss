<?php


    while($data = $req1->fetch())
    {
?>
<?php if(isset($erreur) && !empty($erreur) ) {echo $erreur ; } ?>
<form method="post" class="form-horizontal">
    <fieldset>
        <div class="row">
            <div class="col-md-3 col-lg-2 col-xs-offset-1 jolie">
                <h1> Modifier info Flux :</h1> </div>
        </div>
        <div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="last_name">Titre</label>
                <div class="col-md-4">
                    <input id="last_name" name="titre" type="text" class="form-control input-md" value="<?php echo $data['titre']  ?>"> </div>
            </div>
            <!-- Prepended text-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Lien</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input id="email" name="lien" class="form-control" placeholder="email utilisateur" type="text" value="<?php echo $data['lien']  ?>"> </div>
                </div>
            </div>
           <div class="form-group">
                    <label for="nom" class="col-md-4 control-label">Categorie:</label>
                    <div class="col-md-8">
                        <select class="btn btn-default " name="cat"  >
                        <?php 
                            
                            echo " <option value=".$data['id_t'].">".$data['nom']."</option></br>"; 
    }

                            while($data = $req2->fetch())
                            {	
                               echo " <option value=".$data['id_t'].">".$data['nom']."</option></br>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
            <div class="row">
                <div class="col-xs-1 col-xs-offset-4">
                    <div class="form-group ">
                        <button type="submit" name="submit" class="btn btn-primary ">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>