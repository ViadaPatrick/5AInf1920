<?php //ACCESSO AL DATABASE
	define('DBNAME', '5ainf1920');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	
	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	if($con-> connect_errno){   //connect_errno=0 -> if(false)
		$codice = $con ->connect_errno;     //codice errore
		$descErrore = $con->connect_error;	//descrizione errore  
		die("Errore di connessione: $codice - $descErrore");


	}
?>