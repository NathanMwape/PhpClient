<link rel="stylesheet" href="bootstrap/inscription.css">

<body>
    <form action="esisdata2.php" method="post" class="formulaire">
        <h1><marquee behavior="" direction="left">Bienvenu sur MonApp</marquee></h1>
        <br>
        
        <input type="text" placeholder="Saisir le nom de l utilisateur " name="nom" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir le matricule ex(ESIS-002)" name="matricule" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir la date de naissance" name="date" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir une Adresse E-mail " name="mail" REQUIRED>
        <br>
        <input type="text" placeholder="Saisir un mot de passe" name="password" REQUIRED>
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