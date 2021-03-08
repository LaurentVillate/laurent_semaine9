<br>
        <h3 class ="text-center">Ajouter un produit</h3>
        <br>
        <!--formulaire -->
        <form name="ajout" action="add_script.php" method="post" enctype="multipart/form-data">
            <fieldset>
            <!-- récupération des catégories liste déroulante-->
                <?php
                require "connexion_bdd.php"; // Bibliothèque de fonctions
                //$db = connexionBase(); // Fonction de connexion//
                    $requete = "SELECT DISTINCT cat_id, cat_nom FROM categories";//Sélection des différentes catégories//
                    $result = $db->query($requete);

                    if (!$result){
                        $tableauErreurs = $db->errorInfo();
                        echo $tableauErreur[2]; 
                        die("Erreur dans la requête");
                    }

                    if ($result->rowCount() == 0){
                        // Pas d'enregistrement
                        die("La table est vide");
                    }
                    // Création d'un menu déroulant et boucle pour insérer les option//
                    echo "<form name='deroulant' action='' method='post'>";
                    echo "<div class='form-group'>";
                    echo "<label for='sujet'>Catégorie</label>";
                    echo "<select class='form-control' name='cat[]'>";
                    while ($row = $result->fetch(PDO::FETCH_OBJ)){
                                echo "<option value= \"$row->cat_id\">$row->cat_nom</option>";
                    }
                    echo "</select><br>";
                    echo "</form";
                    echo "</div>";
                // Fin de la liste déroulante catégorie//
                ?>
                <!--Ajout d'une référence-->
                <div class="form-group">
                    <label for="ref">Référence</label>
                    <input type="text" class="form-control" name ="ref" id="ref" placeholder="Saisissez la référence" value="">    
                </div>
                <!--Ajout d'un libellé-->
                <div class="form-group">
                    <label for="libel">Libellé</label>
                    <input type="text" class="form-control" name ="libel" id="libel" placeholder="Saisissez le libellé" value="">    
                </div>
                <!--Ajout d'une description-->
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name = "desc" id="desc" rows="3"></textarea>
                <!--Ajout d'un prix-->
                </div>
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="text" class="form-control" name ="prix" id="prix" placeholder="Saisissez le prix" value="">
                <!--Ajout d'un stock-->    
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" placeholder="Saisissez le stock" value="" >  
                <!--Ajout d'une couleur-->
                </div>
                <div class="form-group">
                    <label for="coul">Couleur</label>
                    <input type="text" class="form-control" name ="coul" id="coul" placeholder="Saisissez la couleur" value="">
                </div>
                <!-- Ajout d'une photo-->
                <div class="form-group">
                    <label for="photo">Photo</label><br>
                    <input type="file" name="photo">
                </div>
                <!-- Date du jour -->
                <div class="form-group">
                    <label for="date">date</label>
                    <input type="text" class="form-control" name ="date" id="date" placeholder="" value="<?php echo date("Y/m/d")?>">
                </div>
                <!--Ajout d'un produit bloqué-->  
                <div class="form-group">
                    Produit bloqué: 
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bloque" id="" value="oui">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bloque" id="" value="non">
                    <label class="form-check-label" for="inlineRadio1">Non</label>
                    </div>
                </div>
                <div class="form-group">
                <!-- Envoyer-->
                <input type="submit" class="btn btn-outline-primary" value="Envoyer" id="">
            </fieldset>             
        </form>
        <br><br><br>
<!--fin du formulaire-->
        </div>
<!--javascript boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

