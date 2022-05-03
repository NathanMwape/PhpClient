<?php
    session_start();   
    extract($_POST);
    if (isset($need)){
        $wsdl="http://localhost:8565/EsisWebService?wsdl";
        $clientSOAP= new SoapClient($wsdl);
        $etudiants = new stdClass();

        $etudiants->idEtudiant=$id;
        $etudiants->nom=$nom;
        $etudiants->matricule=$mat;
        $etudiants->dateNaissance=$dates;
        $etudiants->email=$email;
        $etudiants->password=$password;
        $etudiants->telephone=$tel;
        $etudiants->adresse=$adresse;

        $obj=array();
        $obj['Etudiant']=$etudiants;
        $param= new SoapParam(new SoapVar($obj,SOAP_ENC_OBJECT),'Etudiant');
        try{
            $resultat=$clientSOAP->__soapCall("insererEtudiant",array($param));
            if($resultat){
                header("Location:index.php");
            }else{
                echo "Insertion non effectuee";
            }
        }catch(Exception $e){
            echo "<h2> Exception Error </h2>";
            echo $e->getMessage();
        }
    }
?>

