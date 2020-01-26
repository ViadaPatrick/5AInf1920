<?php

	if(isset($_REQUEST["cognome"])){

		$cognome = $_REQUEST["cognome"];
		//echo $cognome;
	}
    if(isset($_REQUEST["nome"])){

		$nome = $_REQUEST["nome"];
		//echo $nome;
	}
     

?>


<!doctype html>
<html lang="it">
<head>
<!--istruzioni per il bootstrap-->

<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Viada">
		<meta name="description" content="Tabelle Cognome Nome">
		
		<title>Tabella Cognome Nome</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script href="vendor/bootstrap/js/bootstrap.js"></script>
		<script type="application/javascript" src="js/script.js"></script>
		<script type="application/javascript" src="vendor/jquery/jquery-3.4.1.js"></script>
        
</head>


<body>
	<div class="container-fluid">
				<div class="row" style="margin-top: 20px">
					<div class="col-sm-4">						
					</div>
					<div class="col-sm-4">
						<form method="GET" action="filtro.php"> <!-- action è la pagina alla quale viene fatta la richiesta quando si schiaccia su submit(che gli passa tutti gli elementi in automatico) -->
							
							<div class="form-group input-group">
								<input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" />
							</div>

							<div class="form-group input-group">
								<input type="text" id="cognome" name="cognome" class="form-control" placeholder="Cognome" />
							</div>
							<div class="form-group">
								<input type="submit" value="Filtra" class="btn btn-secondary form-control"/> 
							</div>

						</form>
					</div>
					<div class="col-sm-4">						
					</div>
				</div>
			<!--</div>-->
		</div>
    </body>

</html>

<div class="container-fluid">
				<div class="row" style="margin-top: 20px">
					<div class="col-sm-5">						
					</div>
<?php
        $string = file_get_contents("./json/jsonNomeCognome.json");
        $json_a=json_decode($string,true);

		//echo json_encode($json_a); 
		?>

<table border="1" cellpadding="10">
    <thead><tr><th>Nome</th> <th>Cognome</th></tr></thead>
    <tbody>

<?php foreach($json_a as $key => $value): ?>

	<tr>
			<td><?php 
			
					if(isset($nome)){
						if($value[0]==$nome){
							echo $value[0];
						}
					}else{
						echo $value[0];
					}

                    
             ?></td>
            <td><?php 
                    if(isset($cognome)){
						if($value[1]==$cognome){
							echo $value[1];
						}
					}else{
						echo $value[1];
					}
             ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</div>
	<div class="col-sm-4">						
	</div>

</div>

