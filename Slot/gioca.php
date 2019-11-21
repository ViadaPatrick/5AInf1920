<?php
/**
 * Created by PhpStorm.
 * User: inf.viadap0611
 * Date: 18/11/2019
 * Time: 12:39
 */
    session_start();

    //<img src="img/r.png" width="400" height="300" />"

    $frutta=["R","G","B"];

    $cntEstrazioni;
    $valoriEstratti=[];
    $estrazione = [];
    $_SESSION["nGiocate"]=$_SESSION["nGiocate"]+1;
    for($cntEstrazioni=0; $cntEstrazioni < 3 ; $cntEstrazioni++){
        $estrazione[$cntEstrazioni] = rand(0,2);
        $valoriEstratti[$cntEstrazioni]=$frutta[$estrazione[$cntEstrazioni]];
    }

    $risultato = $valoriEstratti[0] . ", ". $valoriEstratti[1]. ", ". $valoriEstratti[2];

    echo $risultato."<br>";

    calcolateHandlePoint($estrazione);

    echo "punteggio: ".$_SESSION["punteggio"]."<br>";
    echo "numero partite: ". $_SESSION["nGiocate"]."<br>";
    echo "numero partite senza punti: ". $_SESSION["nPartiteSenzaPunti"]."<br>";

    //pulsante che ricarica la pagina
    echo "<input type=\"button\" name=\"binvia\"  value=\"gioca\" onclick=\"window.location='gioca.php'; window.load();\"> <br>";

    if($_SESSION["nPartiteSenzaPunti"]>=2){
        echo "PARTITA PERSA!" . "<br>"."RICARICARE PER GIOCARE DI NUOVO";
        $_SESSION["nGiocate"]=0;
        $_SESSION["punteggio"]=0;
        $_SESSION["nPartiteSenzaPunti"]=0;

    }

    //fatto senza la isset(), essa controlla che la session sia stata inizializzata e che non sia scaduta
    function calcolateHandlePoint($estrazione){

        if($estrazione[0] == $estrazione[1] && $estrazione[1] == $estrazione[2]){
            $_SESSION["punteggio"] = $_SESSION["punteggio"]+3;
            $_SESSION["nPartiteSenzaPunti"]=0;
        }
        if($estrazione[0] == $estrazione[1] || $estrazione[0] == $estrazione[2] || $estrazione[1] == $estrazione[2]){
            $_SESSION["punteggio"] = $_SESSION["punteggio"]+2;
            $_SESSION["nPartiteSenzaPunti"]=0;
        }
        if($estrazione[0] != $estrazione[1] && $estrazione[1] != $estrazione[2] && $estrazione[0] != $estrazione[2]){
            $_SESSION["nPartiteSenzaPunti"]=$_SESSION["nPartiteSenzaPunti"]+1;
        }

    }

?>



