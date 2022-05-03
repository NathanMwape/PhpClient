<?php
    session_start();   
    extract($_POST);
    if (isset($id)){
        $wsdl="http://localhost:8585/EsisWebService?wsdl";
        $clientSOAP= new SoapClient($wsdl);
        $etudiants = new stdClass();

        $etudiants->idEtudiant=$id;
        $etudiants->nom=$nom;
        $etudiants->matricule=$matricule;
        $etudiants->dateNaissance=$date;
        $etudiants->email=$mail;
        $etudiants->password=$password;
        $etudiants->telephone=$tel;
        $etudiants->adresse=$adresse;

        $obj=array();
        $obj['Etudiant']=$etudiants;
        $param= new SoapParam(new SoapVar($obj,SOAP_ENC_OBJECT),'Etudiant');
        try{
            $resultat=$clientSOAP->__soapCall("updateEtudiant",array($param));
            if($resultat){
                header("Location:index.php");
            }else{
                echo "Insertion non effectuee";
                header("Location:index.php");
            }
        }catch(Exception $e){
            echo "<h2> Exception Error </h2>";
            echo $e->getMessage();
            //header("Location:index.php");
        }
    }
?>

