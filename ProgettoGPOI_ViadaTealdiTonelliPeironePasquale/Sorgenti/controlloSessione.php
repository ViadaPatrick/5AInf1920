<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Utente loggato correttamente";
		header('location: login.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Non sei <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>Disconnettiti <a href="index.html" style="color: red;">Home</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>