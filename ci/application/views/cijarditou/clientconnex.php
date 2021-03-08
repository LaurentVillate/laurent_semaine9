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
<!--Container boostrap-->
    <div class="container">
        <br><br>
        <h2 class= "text-success text-center">Connexion à votre espace client</h2>
        <br><br>
        <h5> Vous n'êtes pas encore client?</h5>
        <a href="inscr_form.php" class="btn btn-dark">Créer votre compte</a>
        <br><br><br>
    <?php if(isset($erreur)):?>
        <br><br>
    <?php endif; ?>
<!--formulaire -->
<!--<form name="jarditouessai" action=" " method="POST" id="formulaire">-->
    <?php form_open('clientconnex');?>
    <fieldset>  
                <!-- saisie du login -->
                <div class="form-group">
                    <label for="login">Login (mail)</label>
                    <input type="email" class="form-control" name="login" id="login"><br> 
                </div>
                <!-- saisie du mot de passe -->
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="mdp" id="password"><br> 
                </div>
                <!-- mot de passe perdu? --> 
  
                    <br>
                <input type="submit" class="btn btn-dark" name = "connexion" value="Se connecter" id="envoyer">
            </fieldset>             
        <?php echo form_close();?>
<!--fin du formulaire-->
        <!--pied de page pour second menu, liste ordonnée 3 liens-->
        
    </div>
<!--javascript boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



