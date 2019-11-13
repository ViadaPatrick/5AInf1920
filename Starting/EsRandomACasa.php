<?php
/**
 * Created by PhpStorm.
 * User: inf.viadap0611
 * Date: 25/10/2019
 * Time: 12:51
 */

    $value1= $_REQUEST["min"];
    $value2= $_REQUEST["max"];
    $value3= $_REQUEST["num"];

    $jsonPari= "[";
    $jsonDispari= "[";
    for($cntJson=0 ; $cntJson<$value3 ; $cntJson=$cntJson+1){
        $num = rand($value1,$value2);
        if($num%2==0){
            if($cntJson!=$value3-1){
                $jsonPari=$jsonPari.$num.",";
            }else{
                $jsonPari=$jsonPari.$num;
            }


        }else{
            if($cntJson!=$value3-1){
                $jsonDispari=$jsonDispari.$num.",";
            }else{
                $jsonDispari=$jsonDispari.$num;
            }

        }
    }
    $jsonPari = $jsonPari."]";
    $jsonDispari = $jsonDispari."]";
    echo "Vettore pari:".$jsonPari. "<br>";
    echo "Vettore dispari:".$jsonDispari;

?>