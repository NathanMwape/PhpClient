<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link rel="stylesheet" href="bootstrap/inscription.css">
    
    <title>Mettre a jour </title>
</head>
<body>
    <div class="bluePart"></div>
   <form action="UpdateController.php" method="post" class="formulaire">
        <input type="number" placeholder="Saisir l'Id de l utilisateur " name="id" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir le nom de l utilisateur " name="nom" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir le matricule ex(ESIS-002)" name="matricule" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir la date de naissance" name="date" REQUIRED>
        <br>
        <input type="email" placeholder="Saisir une Adresse E-mail " name="mail" REQUIRED>
        <br>
        <input type="password" placeholder="Saisir un mot de passe" name="password" REQUIRED>
        <br>
        <input type="number" min=0 placeholder="Saisir le numéro de téléphone" name="tel" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir une Adresse  " name="adresse" REQUIRED>
        <br>
        <div class="send-receive">
            <input type="submit" class="envoyer" value="Envoyer">
            <br>
            <input type="reset" class="envoyer" value="Annuler" style="background: rgb(201, 17, 17); border: none; margin-left: 5px;">
        </div>
   </form>
    
        

    
</body>
</html>