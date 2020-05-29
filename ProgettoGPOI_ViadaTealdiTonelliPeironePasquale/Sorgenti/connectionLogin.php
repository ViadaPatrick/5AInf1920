<?php
	//nella cartella magazzino
	define('DBNAME', 'epiz_25169328_login');
	define('DBHOST', 'sql207.epizy.com');
	define('DBUSER', 'epiz_25169328');
	define('DBPASS', 'bbVnvx12cp5w');
	
	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	
	if($con->connect_errno)	{//connect_errno=0 -> if(false)
		$codice = $con->connect_errno;		//codice errore
		$descErrore = $con->connect_error;	//descrizione errore
		die("Errore di connessione: $codice - $descErrore");
	}
	
	$con->set_charset("utf-8");

    $sql = "SELECT * FROM users WHERE id=1";
    $rs = $con->query($sql);

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