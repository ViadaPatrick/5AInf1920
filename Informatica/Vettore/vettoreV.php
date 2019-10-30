

<?php



	$v1 = array('rosso', 'bianco', 'rosè', 'spumante');

	$v2 = ['rosso', 'bianco', 'rosè', 'spumante'];

	$v3 = array(
		0 => "rosso",
		1 => "bianco",
		2 => "rosè",
		3 => "spumante"
	);

	$v4 = array(
		"ro" => "rosso",
		"bi" => "bianco",
		"rs" => "rosè",
		"sp" => "spumante"
	);

	$v5 = array(1 => 'rosso', 'bianco', 'rosè', 'spumante');

	//stampa 
	foreach($v1 as $item){
		echo $item . ' ,';
	}
    echo "<br>";

	//stampa
    foreach($v2 as $item2){
    echo $item2.  ' ,';
    }
    echo "<br>";
	
	//stampa
    foreach($v3 as $item3){
    echo $item3. ' ,';
    }
    echo "<br>";

	//stampa
	echo $v4["ro"]. ' ,';
	echo $v4["bi"]. ' ,';
	echo $v4["rs"]. ' ,';
	echo $v4["sp"]. ' ,';
    echo "<br>";

	//stampa
    foreach($v5 as $item5){
    echo $item5. ' ,';
    }




?>





