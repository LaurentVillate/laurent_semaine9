<br>
        <h3 class ="text-center">Modifier un produit</h3>
        <br>
        <!-- script php pour récupérer l'ID du produit -->
        <?php   
        require "connexion_bdd.php";
     // Récupération de l'id en get par l'url//
        $pro_id = $_GET["pro_id"];
        $pro_id = (int)$pro_id;
            $requete = "SELECT * FROM produits WHERE pro_id=" .$pro_id;
            $result = $db->query($requete);
    // Renvoi de l'enregistrement sous forme d'un objet
        $produit = $result->fetch(PDO::FETCH_OBJ);
        ?>

<!--formulaire -->
        <form name="formliste" action="admin_update_script.php" method="post" id="formulaire">
            <fieldset>
<!--Récupération de l'id-->
                <div class="form-group">
                    <label for="ID">ID</label>
                    <input type="number" class="form-control" name="ID" id="ID" value="<?php echo $pro_id; ?>" >  
                </div>
<!--Récupération de la référence-->
                <div class="form-group">
                    <label for="ref">Référence</label>
                    <input type="text" class="form-control" name ="ref" id="ref" value="<?php echo $produit->pro_ref; ?>">  
                </div>
<!-- catégorie liste déroulante-->
                <?php
                $requete = "SELECT DISTINCT cat_id, cat_nom FROM categories";//Sélection des différentes catégories//
                $result = $db->query($requete);

                if (!$result) 
                {
                $tableauErreurs = $db->errorInfo();
                echo $tableauErreur[2]; 
                die("Erreur dans la requête");
                }

                if ($result->rowCount() == 0) 
                {
                // Pas d'enregistrement
                die("La table est vide");
                }
                // Création d'un menu déroulant et boucle pour insérer les option//
                echo "<form name='deroulant' action='' method='post'>";
                echo "<div class='form-group'>";
                echo "<label for='cat'>changer la catégorie</label>";
                echo "<select class='form-control' name='cat[]'>";
                while ($row = $result->fetch(PDO::FETCH_OBJ))
                {
                echo "<option value= \"$row->cat_id\">$row->cat_nom</option>";
                }
                echo "</select><br>";
                echo "</form";
                echo "</div>";
// Fin de la liste déroulante catégorie//
?>
<!--Récupération du libellé; lien vers détail-->
                <div class="form-group">
                    <label for="libel">libellé</label>
                    <input type="text" class="form-control" name ="libel" id="libel" value="<?php echo $produit->pro_libelle; ?>">  
                </div>
<!--Récupération de la description-->
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="desc" id="desc" rows="3"><?php echo $produit->pro_description; ?></textarea>
<!--Récupération du prix-->
                </div>
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="text" class="form-control" name ="prix" id="prix" value="<?php echo $produit->pro_prix; ?>">
<!--Récupération du stock-->    
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" value="<?php echo $produit->pro_stock; ?>" >  
<!--Récupération de la couleur-->
                </div>
                <div class="form-group">
                    <label for="coul">Couleur</label>
                    <input type="text" class="form-control" name ="coul" id="coul" value="<?php echo $produit->pro_couleur; ?>">
<!-- Date du jour -->
<div class="form-group">
                    <label for="photo">date</label>
                    <input type="text" class="form-control" name ="date_modif" id="date_modif" placeholder="" value="<?php echo date("Y/m/d")?>">
                </div>
<!--checked du bouton oui ou non pour produit bloqué-->  
                </div>
                <div class="form-group">
                    Produit bloqué: 
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bloque" id="" value="oui" checked = "<?php $produit->pro_couleur != NULL; ?>">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bloque" id="" value="non" checked = "<?php $produit->pro_couleur != NULL; ?>">
                    <label class="form-check-label" for="inlineRadio1">Non</label>
                    </div>
                </div>
<!-- liens vers modification ou retour à la liste des produits-->
                <input type="submit" class="btn btn-outline-primary" value="Enregistrer les modifications" id="">
            </fieldset>             
        </form>
        <br><br><br>
<!--fin du formulaire--><!-- CRÉER UN LIEN: retour à la liste et un lien modifier (renvoyant au formulaire)-->
        
<!--javascript boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
