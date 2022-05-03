<?php
    $wsdl="http://localhost:8585/EsisWebService?wsdl";
    $clientSOAP= new SoapClient($wsdl);
    $etudiants =$clientSOAP->__soapCall("getListEtudiant",array());

    //echo "<pre>";
        //var_dump($etudiants);
    //echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
   
   
    <title>Accueil</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid e1">
            <div class="row ligne1">
                <div class="col-md-4">
                     <img src="icon/pencil-square.svg" width ="25" height ="25" alt="Bootstrap">
                     <a href="inscription.php">Inserer</a>
                </div>
                <div class="col-md-4">
                    <img src="icon/arrow-clockwise.svg" width ="25" height ="25" alt="Bootstrap">   
                    <a href="update.php">Mettre a jour</a>
                </div>
                <div class="col-md-4">
                 <img src="icon/trash.svg" width ="25" height ="25" alt="Bootstrap">
                    <a href="delete.php">Effacer</a>
                </div>
               
            </div>
            
        </div>
        <div class="row">
                <table border= '1' class="container" >
                <thead>
                            <tr class="headings">
                                <th>id</th>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Date Naissance</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Adresse</th>                           
                                
                            </tr>
                        </thead>  
                                <?php foreach($etudiants->return as $etudiant){ ?>
                                            
                                    <tr class="even pointer">
                                        <td><?php echo $etudiant->idEtudiant?></td>
                                        <td> <?php echo $etudiant->nom ?></td>
                                        <td> <?php echo $etudiant->matricule ?></td>
                                        <td> <?php echo $etudiant->dateNaissance ?></td>
                                        <td> <?php echo $etudiant->email ?><i class="fa fa-envelope"> </td>
                                        <td> <?php echo $etudiant->telephone ?><i class="fa fa-phone-square"></td>
                                        <td> <?php echo $etudiant->adresse ?><i class="fa fa-map-marker"></td>
                                    </tr>
                                            
                                <?php }?>
                    
                <table>
            </div>

        
    </div>
  
</body>
</html>