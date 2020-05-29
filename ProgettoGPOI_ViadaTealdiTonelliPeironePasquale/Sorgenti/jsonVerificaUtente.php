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
    if(isset($_REQUEST["txtPassword"])){
        $txtPassword = $_REQUEST["txtPassword"];
    }else{
        $settedPar = false;
    }

    if($settedPar){
        $false = 0;
        $true = 1;
        $sql = "SELECT * FROM users WHERE users.username = '$txtNomeUtente' AND users.password = '$txtPassword'";
       
        $rs = $con->query($sql);
        if($rs == false){
            echo $false;
            //header('location: ./login.php?msg=errore');
        }else{ 
            
            if(mysqli_num_rows($rs) == 0){
                //echo $false;
                header('location: ./login.php?msg=errore');
            }else{
                echo $true;
                header('location: ./index.html');
            }

        }
    }
?>