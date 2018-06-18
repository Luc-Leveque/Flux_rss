 <?php if(isset($erreur) && !empty($erreur) ) {echo $erreur ; } ?>
        <?php if(isset($reussite) && !empty($reussite) ) {echo $reussite ; } ?>

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

                            while($data = $req1->fetch())
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
                

                            while($data = $req2->fetch())
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
echo "</table>"; ?>
                            
                    </div>
                </div>
            </div>
