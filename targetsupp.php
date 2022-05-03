<?php
    extract($_POST);

    $wsdl="http://localhost:8585/EsisWebService?wsdl";
     $clientSOAP = new SoapClient($wsdl);

     $etudiant = new stdClass();

     $etudiant=$id;
     $obj = array();
     $obj['idEtudiant'] =$etudiant;
  
     $param = new SoapParam(new SoapVar($obj,
     SOAP_ENC_OBJECT),'idEtudiant');

     try{
         $resultat = $clientSOAP->__soapCall("deleteEtudiant",array($param));

         if($resultat){
             echo "Suppression effectueé !";
          //   header('Location: index.php');

         }else{
             echo "Suppression non effectue !!!!";
           //  header('Location: index.php');
         }
     }catch(Exception $e){
         echo "<h2> Exception Error</h2>";
         echo $e->getMessage();
     }


?>