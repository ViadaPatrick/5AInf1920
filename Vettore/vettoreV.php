

<?php



	$h1 = array('rosso', 'bianco', 'rosè', 'spumante');

	$h2 = ['rosso', 'bianco', 'rosè', 'spumante'];

	$h3 = array(
		0 => "rosso",
		1 => "bianco",
		2 => "rosè",
		3 => "spumante"
	);

	$h4 = array(
		"ro" => "rosso",
		"bi" => "bianco",
		"rs" => "rosè",
		"sp" => "spumante"
	);

	$h5 = array(1 => 'rosso', 'bianco', 'rosè', 'spumante');

	//stampa 
	foreach($h1 as $item){
		echo $item . ' ,';
	}
    echo "<br>";

	//stampa
    foreach($h2 as $item2){
    echo $item2.  ' ,';
    }
    echo "<br>";
	
	//stampa
    foreach($h3 as $item3){
    echo $item3. ' ,';
    }
    echo "<br>";

	//stampa
	echo $h4["ro"]. ' ,';
	echo $h4["bi"]. ' ,';
	echo $h4["rs"]. ' ,';
	echo $h4["sp"]. ' ,';
    echo "<br>";

	//stampa
    foreach($h5 as $item5){
    echo $item5. ' ,';
    }




?>





