    <?php if(isset($erreur) && !empty($erreur) ) {echo $erreur ; } ?>
        </br>
        </br>
        <?php if(isset($reussite) && !empty($reussite) ) {echo $reussite ; } ?>
            </br>
            </br>
            <form method="post" class="form-horizontal" action="#" class="form">
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Nom Categorie:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="nom" value=""> </div>
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
                        <h1>Categorie :</h1>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                </tr>
                            </thead>
                            <?php
                            while($data = $req->fetch())
                            {
                            ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $data['nom']; ?>
                                        </td>
                                        <td> <a href='<?php echo "index.php?page=Supprimer_flux&supp=cat&id_t=".$data['id_t'] ; ?>'>Supprimer </a> </td>
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