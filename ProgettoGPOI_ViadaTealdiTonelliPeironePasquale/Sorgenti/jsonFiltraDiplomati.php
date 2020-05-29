<?php

    require("./connection.php");
	
	//txtCodiceFiscale   -     txtIndirizzo
    $settedPar = true;
    $parCF = false;
    $parIndirizzo = false;
	

    //ricevo i parametri
    if(isset($_REQUEST["txtCodiceFiscale"])){
        $txtCodiceFiscale = $_REQUEST["txtCodiceFiscale"];
    }else{
        $settedPar = false;
    }

    //ricevo i parametri
    if(isset($_REQUEST["txtIndirizzo"])){
        $txtIndirizzo = $_REQUEST["txtIndirizzo"];
    }else{
        $settedPar = false;
    }

    if($settedPar){
        if($txtCodiceFiscale != ""){
            $parCF = true;
        }
        if($txtIndirizzo != ""){
            $parIndirizzo = true;
        }
    }

    $sql = "";

    if($parCF and $parIndirizzo){
        $sql = "SELECT * FROM diplomato WHERE diplomato.codiceFiscale = '$txtCodiceFiscale' AND diplomato.indirizzo = '$txtIndirizzo'";
    }else{
        if($parCF){
            $sql = "SELECT * FROM diplomato WHERE diplomato.codiceFiscale = '$txtCodiceFiscale'";
        }else{
            if($parIndirizzo){
                $sql = "SELECT * FROM diplomato WHERE diplomato.indirizzo = '$txtIndirizzo'";
            }else{
                $sql = "SELECT * FROM diplomato";
            }
        }
    }

    //faccio la query sulla connessione
    $rs = $con->query($sql);
    //faccio il controllo
    if($rs == false){
        //messaggio di errore + exit()

        die("errore nella query jsonFiltraDiplomati.php");
    }



    //vettore che conterrà i diplomati
    $vet = array();


    //ciclo che scorre i diplomati della query
    while($record = $rs->fetch_assoc()){

        //metto nel vettore ogni record, VETTORE DI RECORD
        array_push($vet, $record);
    }

    //converto il vettore in un json
    $json = json_encode($vet);

    echo $json;




?>