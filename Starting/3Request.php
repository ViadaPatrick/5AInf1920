<?php
/**
 * Created by PhpStorm.
 * User: inf.viadap0611
 * Date: 25/10/2019
 * Time: 12:09
 */
    //http://localhost:8080/5AInf/starting/3Request.php

    //con parametri in GET
    //http://localhost:8080/5AInf/starting/3Request.php?key1=value1&key2=value2

    //$_REQUEST: vettore associativo creato in automatico quando carico la pagina
    //vettore associativo: l'indice è una stringa
    $value1= $_REQUEST["key1"];
    $value2= $_REQUEST["key2"];
    echo $value1. "<br>";
    echo $value2;
?>