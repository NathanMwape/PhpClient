<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/inscription1.css">
    <title>suppression</title>
</head>
<body>
    <form action="deleteController.php" method="post" class='formulaire'>

        <input type="number" placeholder="Saisir l'id à supprimer  " name="id" REQUIRED>
    <br>
        <div class="send-receive">
            <input type="submit" class="envoyer" value="Envoyer">
            <br>
            <input type="reset" class="envoyer" value="Annuler" style="background: rgb(201, 17, 17); border: none; margin-left: 5px;">
        </div>
    </form>
    
</body>
</html>