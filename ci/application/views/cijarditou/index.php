<!--CODE DU CONTENU DE LA PAGE INDEX-->
    <!--image promotion en bannière-->
        <!--<img class="img-fluid" src="src\img\promotion.jpg" alt="promotion" title="promotion">-->
       <img  class="img-fluid" src="<?php echo base_url("assets/images/promotion.jpg");?>" alt=“promotion” title=“promotion”>

    <!--colonne 8 à gauche pour écran + 992px, colonne 12 pour écran - 992px;
    colonne 4 à droite pour écran + 992px, colonne 12 - 992px.
    Donc, sur écran - 992 px les colonnes sont l'une sur l'autre
--> <div class="container">
<br><br>
    <h2 class =" text-success text-center">Nos produits</h2>
    <br><br>
    <?php
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
//$db = connexionBase(); // Appel de la fonction de connexion//
$requete = "SELECT * FROM produits WHERE ISNULL(pro_bloque) ORDER BY pro_d_ajout DESC";

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

echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";
    echo "<th><h4>Photo</h3></th>";
    echo "<th><h4>ID</h3></th>";
    echo "<th><h4>Catégorie</th>";
    echo "<th><h4>Référence</h3></th>";
    echo "<th><h4>Libellé</h3></th>";
    echo "<th><h4>Prix</h3></th>";
    echo "<th><h4>Stock</h3></th>";
    echo "<th><h4>Couleur</h3></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($row = $result->fetch(PDO::FETCH_OBJ))
{
    $photo= $row->pro_id.".".$row->pro_photo;
    //echo"<tr class='table-warning'>";//
    //echo"<td><img class='img-fluid' src='src\img\\$photo' alt='' title=''width='40%'></td>";//
    // Ici: problème. Utiliser base URL? ou écrire : ci\assets..//
    echo"<td><img class='img-fluid' src='assets\images\\$photo' alt='' title=''width='40%'></td>";//
    echo"<td>".$row->pro_id."</td>";
    echo"<td>".$row->pro_cat_id."</td>";
    echo"<td>".$row->pro_ref."</td>";
    //Le lien "detail.php?pro_id" créé une url avec le numéro contenu dans $row->pro_id, qui est récupéré dans le script PHP par une variable GET//
    echo"<td><a href=\"detail.php?pro_id=".$row->pro_id."\" title=\"".$row->pro_libelle."\">$row->pro_libelle</a></td>";
    echo"<td>".$row->pro_prix."</td>";
    echo"<td>".$row->pro_stock."</td>";
    echo"<td>".$row->pro_couleur."</td>";
    echo"</tr>";
}
echo "</tbody>";
echo "</table>"; 
?>
<br>
        
