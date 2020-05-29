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
    $settedPar = true;
    
    //ricevo i parametri
    if(isset($_REQUEST["txtNomeUtente"])){
        $txtNomeUtente = $_REQUEST["txtNomeUtente"];
    }else{
        $settedPar = false;
    }
    //ricevo i parametri
    if(isset($_REQUEST["txtEmail"])){
        $txtEmail = $_REQUEST["txtEmail"];
    }else{
        $settedPar = false;
    }

    //ricevo i parametri
    if(isset($_REQUEST["txtCF"])){
        $txtCF = $_REQUEST["txtCF"];
    }else{
        $settedPar = false;
    }

    //ricevo i parametri
    if(isset($_REQUEST["txtPassword"])){
        $txtPassword = $_REQUEST["txtPassword"];
    }else{
        $settedPar = false;
    }
    if($settedPar){
        $true = 1;
        $false = 0;

        $sql = "INSERT INTO users (id, username, email, codiceFiscale, password) VALUES (NULL, '$txtNomeUtente', '$txtEmail', '$txtCF', '$txtPassword')";
        
        $rs = $con->query($sql);
        if($rs == false){
            //die("errore nella query ");
            echo $false;
        }else{
            echo $true;
        }
    }

    
?>