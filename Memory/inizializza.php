<?php

    session_start();

    $_SESSION["selezionate"]=0;
    $_SESSION["r1"]=0;
    $_SESSION["c1"]=0;
    $_SESSION["r2"]=0;
    $_SESSION["c2"]=0;                  //0,0             //0,1           //1,0            //1,1          //2,0           //2,1              //3,0           //3,1
    $_SESSION["vettoreImmagini"]=["img\picche.png","img\cuori.png","img\quadri.png","img//fiori.png","img\picche.png","img\cuori.png","img\quadri.png","img//fiori.png"];
    $_SESSION["trovate"]=0;
    $_SESSION["coppia1"]="";
    $_SESSION["coppia2"]="";
    $_SESSION["coppia3"]="";
    $_SESSION["coppia4"]="";

    shuffle($_SESSION["vettoreImmagini"]);
    foreach($_SESSION["vettoreImmagini"] as $immagine){
        echo $immagine ." &nbsp";
    }

    echo "<br> Inizializzato";
   

?>