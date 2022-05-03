<?php

    $wsdl="http://localhost:8585/EsisWebService?wsdl";
    $clientSOAP = new SoapClient($wsdl);
    $etudiants = $clientSOAP->__soapCall("getListEtudiant", array());

    echo "<pre>";
        var_dump($etudiants);
        $obj = array();
        $obj['etudiant'] = $etudiants;
       print_r($obj);
    echo "</pre>";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\dist\css\bootstrap.min.css">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class='container-fluid red'>

    </div>
    <div class="container">
    <div class="row">
        <div class="col-sm-4">fgfbbvbbgfg</div>
        <div class="col-sm-4">rgfgfgfgf</div>
        <div class="col-sm-4">5ghgfhhgfh</div>
    </div>
</div>
<table border="1">
            <tr>
                <th>Nom</th>
                <th>Matricule</th>
                <th>Date naissance</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
            </tr>
                <?php foreach($etudiants->return as $etudiants){?>
                    <tr>
                   
                    <td><?php echo $etudiants->nom ?></td>
                    <td><?php echo $etudiants->matricule ?></td>
                    <td><?php echo $etudiants->dateNaissance ?></td>
                    <td><?php echo $etudiants->email ?></td>
                    <td><?php echo $etudiants->telephone ?></td>
                    <td><?php echo $etudiants->adresse ?></td>
                    </tr> 
                <?php } ?>
                   
        
        </table>    

</body>
</html>


      