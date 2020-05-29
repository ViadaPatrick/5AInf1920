<?php

    require("./connection.php");
	
	//txtCodiceFiscale   -     txtIndirizzo   -   orderBy
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

    //ricevo i parametri
    if(isset($_REQUEST["orderBy"])){
        $orderBy = $_REQUEST["orderBy"];
    }else{
        $settedPar = false;
        $orderBy = "";
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

    if($orderBy != ""){
        if($orderBy == "OrderByAnnoASC"){
            $sql .= " ORDER BY diplomato.annoDiploma ASC";
        }else{
            if($orderBy == "OrderByAnnoDESC"){
                $sql .= " ORDER BY diplomato.annoDiploma DESC";
            }else{
                if($orderBy == "OrderByVotoASC"){
                    $sql .= " ORDER BY diplomato.votoDiploma ASC";
                }else{
                    if($orderBy == "OrderByVotoDESC"){
                        $sql .= " ORDER BY diplomato.votoDiploma DESC";
                    }
                }
            }
        }
    }else{
        die("errore nella query jsonOrdinaDiplomati.php");
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