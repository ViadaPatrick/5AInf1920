<?php
	
	define('DBNAME', 'epiz_25169328_utentiDiplomati');
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
?>