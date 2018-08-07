<?php

	session_start();
	require_once "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$email = $_POST['email1'];
	if (isset($_POST['potwierdzenie1'])) {
		$checkbox = $_POST['potwierdzenie1'];
		unset($_SESSION['e_checkbox']);
	}
	else {
		$_SESSION['e_checkbox']="1";
		header('Location: index.php');
		exit();
	}

	$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$_SESSION['e_email']="1";
			header('Location: index.php');
			exit();

		}

	if ($polaczenie->connect_error) {
    die("Connection failed: " . $polaczenie->connect_error);
	} 

	$sql = "INSERT INTO emaile (id, imie, nazwisko, email) VALUES (NULL, '-', '-', '$email')";

	if ($polaczenie->multi_query($sql) === TRUE) {
    	echo "New records created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $polaczenie->error;
	}

	$_SESSION['potwierdzenie11']="1";

	header('Location: index.php');

	$polaczenie->close();

?>