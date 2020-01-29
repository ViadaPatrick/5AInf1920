<?php require("./connection.php");

    $sql = " select * from computer";

    $rs = $con->query($sql);
    if($rs==false){
        die("sql error".$con->error."<br/>".$sql);
    }

    $vet=array();
    
        while($record = $rs->fetch_assoc()){
            array_push($vet, $record);  //fifo gestisce un vettore

    }

    $json = json_encode($vet);
    echo $json;


?>