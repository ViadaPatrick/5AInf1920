<?php 
	session_start();

	// dichiaro le variabili
	$username = "";
	$email    = "";
	$codiceFiscale = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connessione al db
	$db = mysqli_connect('sql7.freesqldatabase.com', 'sql7337000', 'NNCn6fnUMv', 'sql7337000');

	// se registrazione
	if (isset($_POST['registrazione_user'])) {
		//trasformo in stringhe i valori
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$codiceFiscale = mysqli_real_escape_string($db, $_POST['codiceFiscale']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// controllo se ci sono i campi
		if (empty($username)) { array_push($errors, "Inserire lo username"); }
		if (empty($email)) { array_push($errors, "Inserire l' email"); }
		if (empty($codiceFiscale)) { array_push($errors, "Inserire il codice fiscale"); }
		if (empty($password_1)) { array_push($errors, "Inserire la password"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Le due password non combaciano");
		}

		// se non ci sono errori....
		if (count($errors) == 0) {
			$password = md5($password_1);//comando per crittografare la pasword
			$query = "INSERT INTO users (username, email, codiceFiscale, password) 
					  VALUES('$username', '$email', '$codiceFiscale', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Utente registrato correttamente";
			header('location: controlloSessione.php');
		}

	}

	

	// se login
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Inserire lo username");
		}
		if (empty($password)) {
			array_push($errors, "inserire la password");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Sei già loggato";
				header('location: controlloSessione.php');
			}else {
				array_push($errors, "Password errata");
			}
		}
	}

?>