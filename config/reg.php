<?php

	session_start();
	require_once 'connect.php';

	$name = $_POST['username'];
	$surname = $_POST['usersurname'];
	$middlename = $_POST['usermiddlename'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password__confirm = $_POST['password__confirm'];

	if($name = ''){
		$_SESSION['message'] = 'Вы не введи данные.';
		exit();
	}

	if ($surname = ''){
		$_SESSION['message'] = 'Вы не введи данные.';
		exit();
	}

	if($phonenumber = ''){
		$_SESSION['message'] = 'Вы не введи данные.';
		exit();
	}

	if($email = ''){
		$_SESSION['message'] = 'Вы не введи данные.';
		exit();
	}

	if($password = ''){
		$_SESSION['message'] = 'Вы не введи данные.';
		exit();
	}
	
	if($password__confirm <> $password){
		$_SESSION['message'] = 'Пароли не совпадают';
	}


	$password = md5($password);

	$query = "INSERT INTO rapsody_db.users (`username`, `usersurname`, `usermiddlename`, `phone_number`, `email`, `userpassword`) VALUES ('$name', '$surname', '$middlename', '$phonenumber', '$email', '$password');";


	mysqli_query($connect, $query);

	header('Location: ../index.php');
?>