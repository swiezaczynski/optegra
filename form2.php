<?php

	session_start();
	require_once "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$email = $_POST['email2'];
	$imie = $_POST['imie2'];
	$nazwisko = $_POST['nazwisko2'];
	if (isset($_POST['potwierdzenie2'])) {
		$checkbox = $_POST['potwierdzenie2'];
		unset($_SESSION['e_checkbox2']);
	}
	else {
		$_SESSION['e_checkbox2']="1";
		header('Location: index.php#voucherstopka');
		exit();
	}

	$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$_SESSION['e_email2']="1";
			header('Location: index.php#voucherstopka');
			exit();

		}

	if ($polaczenie->connect_error) {
    die("Connection failed: " . $polaczenie->connect_error);
	} 

	$sql = "INSERT INTO emaile (id, imie, nazwisko, email) VALUES (NULL, '$imie', '$nazwisko', '$email')";

	if ($polaczenie->multi_query($sql) === TRUE) {
    	echo "New records created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $polaczenie->error;
	}

	$_SESSION['potwierdzenie22']="1";

	header('Location: index.php#voucherstopka');

	$polaczenie->close();

?>