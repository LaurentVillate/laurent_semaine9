<!Doctype html>
<html lang="fr">   
<!-- CODE DE L'EN-TÊTE DU SITE JUSQU'À LA FIN DU MENU-->   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--intégration Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jarditou</title>
</head>
<body>
    <!--Container boostrap-->
    <div class="container">
<!--header: logo et slogan-->
        <header>
            <div class="row">
                <div class="col-6">
                    <!--<img img="fluid" src="src\img\jarditou_logo.jpg" alt="logo jarditou" title="logo jarditou" width="100%">-->
                    <img img="fluid" src="<?php echo base_url("assets/images/jarditou_logo.jpg"); ?>" alt="logo jarditou" title="logo jarditou" width="100%"> 

                </div>
                <div class="col-6 text-right">
                    <h2>Tout le jardin</h2>
                </div>
            </div>
        </header>
<!--menu: liste non ordonnée 3 liens-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">jarditou.com</a>
<!--toggler... bascule vers bouton hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
<!--Menu de navigation formulaire de recherche à droite-->
            <ul class= "navbar-nav mr-auto">
                <li class="nav-item active"><a  class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a  class="nav-link" href="about.php">A propos</a></li>
                <!--<li class="nav-item"><a  class="nav-link" href="contact.php">Contact</a></li>-->
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('cijarditou/contact');?>">Contact</a></li>

                <li class="nav-item"><a  class="nav-link" href="<?php echo site_url('cijarditou/clientconnex');?>">Se connecter</a></li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
        </nav>
