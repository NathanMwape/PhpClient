<?php
   // session_start();   
    extract($_POST);
   if (isset($id)){
        $wsdl="http://localhost:8585/EsisWebService?wsdl";
        $clientSOAP= new SoapClient($wsdl);
        $etudiants = new stdClass();

        $etudiants=$id;
        
        $obj=array();
        $obj['idEtudiant']=$etudiants;
        $param= new SoapParam(new SoapVar($obj,SOAP_ENC_OBJECT),'idEtudiant');
        try{
            $resultat=$clientSOAP->__soapCall("deleteEtudiant",array($param));
         
            if($resultat){
                
               header("Location:index.php");
            }else{
                echo "Effacement non  effectuee";
            }
        }catch(Exception $e){
            echo "<h2> Exception Error </h2>";
            echo $e->getMessage();
        }
    }
?>

