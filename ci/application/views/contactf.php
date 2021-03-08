<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>formulaire</title>
</head>
<body>
<?php echo form_open(); ?>

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
        <?php echo form_error('nom');?>
    </div> 
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <?php echo form_error('prenom');?>
    </div> 
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" class="form-control">
    </div> 
    <br>
    <div class="form-group">
                    <label for="question">Votre question:</label><br>
                    <textarea class="form-control" name ="question" id="question" rows="4"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-dark">Envoyer</button>
    <br>    
<?php echo form_close(); ?>

</body>
</html>