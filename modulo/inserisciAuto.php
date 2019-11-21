<?php
/**
 * Created by PhpStorm.
 * User: inf.viadap0611
 * Date: 11/11/2019
 * Time: 12:54
 */
    $cognome = $_REQUEST["cognome"];
    //$cognome = $_GET["cognome"];
    //$cognome = $_POST["cognome"];

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    /*
     * localhost:63342/modulo/inserisciAuto.php?
     * cognome=Viada&nome=Patrick&email=patrickviada25%40gmail.com
     * &password=Pat12345&marca=1&modello=2&optional=2&optional=3
     * &nomeFile=&bInvia=invia
     */
    $marca = $_REQUEST["marca"];
    $modello = $_REQUEST["modello"];

    //optional è un checkbox e quindi generea un vettore php
    $optional = $_REQUEST["optional"];

    $debug=1;

    if($debug){
        echo "nome: ".$nome. "</br>";
        echo "cognome: ".$cognome. "</br>";
        echo "email: ".$email. "</br>";
        echo "password: ".$password. "</br>";
        echo "marca: ".$marca. "</br>";
        echo "modello: ".$modello. "</br>";

        echo "optional: ";
        
        foreach($optional as $opt){
            echo  $opt. ", ";
        }
    }

?>