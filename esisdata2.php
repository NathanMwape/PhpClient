<?php
    extract($_POST);

    $wsdl="http://localhost:8585/EsisWebService?wsdl";
     $clientSOAP = new SoapClient($wsdl);

     $etudiant = new stdClass();

     //$etudiant->idEtudiant =$id;
     $etudiant->nom = $nom;
     $etudiant->matricule = $matricule;
     $etudiant->dateNaissance = $date;
     $etudiant->email = $mail;
     $etudiant->password = $password;
     $etudiant->telephone = $tel;
     $etudiant->adresse =$adresse;
     
     $obj = array();
     $obj['etudiant'] = $etudiant;

     $param = new SoapParam(new SoapVar($obj,
     SOAP_ENC_OBJECT),'etudiant');

     try{
         $resultat = $clientSOAP->__soapCall("insererEtudiant",array($param));

         if($resultat){
             echo "Insertion effectue avec succes !";
            header('Location: index.php');

         }else{
             echo "Insertion non effectue !!!!";
            header('Location: index.php');
         }
     }catch(Exception $e){
         echo "<h2> Exception Error</h2>";
         echo $e->getMessage();
     }


?>