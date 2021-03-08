<!Doctype html>
<html lang="fr">      
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--intégration Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jarditou</title>
</head>
<body>
    <!--Container bootstrap-->
    <div class="container">
        <!--En-tête espace administrateur-->
        <header>
        <br><br>
        <h2 class = "text-center">Jarditou – Espace administrateur</h2>
        <br><br>
        </header>
        <!--menu: liste non ordonnée-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--toggler... bascule vers bouton hamburger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>   
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!--Menu de navigation espace administrateur-->
                <ul class= "navbar-nav mr-auto">
                    <li class="nav-item"><a  class="nav-link" href="<?php echo site_url('cijarditou/accueil');?>">Aller sur le site</a></li>
                    <li class="nav-item active"><a  class="nav-link" href="<?php echo site_url('cijarditou/accueiladmin');?>">Accueil administrateur</a></li>
                    <li class="nav-item"><a  class="nav-link" href="<?php echo site_url('cijarditou/liste');?>">Liste des produits</a></li>
                    <li class="nav-item"><a  class="nav-link" href="<?php echo site_url('cijarditou/ajout');?>">Ajouter un produit</a></li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
