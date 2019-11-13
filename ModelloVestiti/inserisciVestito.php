<?php

    $cognome = $_REQUEST["cognome"];
    //$cognome = $_GET["cognome"];
    //$cognome = $_POST["cognome"];

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $passqord = $_REQUEST["password"];

 
    $tipo = $_REQUEST["tipo"];
    $colore = $_REQUEST["colore"];
    $password = $_REQUEST["password"];

   $accessori = $_REQUEST["accessori"];



    $debug=1;

    if($debug){
        echo "nome: ".$nome. "</br>";
        echo "cognome: ".$cognome. "</br>";
        echo "email: ".$email. "</br>";
        echo "password: ".$password. "</br>";
        echo "tipo: ".$tipo. "</br>";
        echo "colore: ".$colore. "</br>";

        echo "accessori: ";

        foreach($accessori as $acc){
            echo  $acc. ", ";
        }
    }

     

?>