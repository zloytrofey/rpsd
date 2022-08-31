<?php
	include "./config/connect.php";
	function deleteCookie(){
		if(isset($_COOKIE["token"])){
			global $pdo;
	
			$pdo->query("UPDATE users SET cookie_token = '' WHERE cookie_token = '".$_COOKIE["token"]."'");
		
			setcookie("token", null, time() - 36000, '/rpsd');
			header("Location: ./index.php");
		}
		else{
			header("Location: ./index.php");
		}
	}
	function setcook($login, $password){
		global $pdo;
		$token = md5($login.$password.time());
		//Добавляем созданный токен в базу данных
		$pdo->query("UPDATE users SET cookie_token ='$token' WHERE email = '$login'");
	
		setcookie("token", $token, time() + 36000,'/rpsd');
		 
	}
	function auth($login, $password) {
		global $pdo;
		foreach($pdo->query("SELECT * FROM users WHERE email = '$login'") as $row) {
			if ($row['email'] == $login && $row['userpassword'] == md5($password)) {
				$_COOKIE["is_auth"] = true; 
				$_COOKIE["login"] = $login; 
				return true;
			}
			else { 
				$_COOKIE["is_auth"] = false;
				return false; 
			}
		}
	}
	function IsCookie(){
		if(isset($_COOKIE["token"])){
			global $pdo;
			$array = $pdo->query("SELECT * FROM users WHERE cookie_token = '".$_COOKIE["token"]."'")->fetch(PDO::FETCH_ASSOC);
			if (!empty($array['cookie_token'])) {
				header("Location: ./profile.php");
			}
		}
	}
	function getLogin() {
		global $pdo;
		if (isset($_COOKIE['token'])) { 
			$user = $pdo->query("SELECT * FROM users WHERE cookie_token = '".$_COOKIE["token"]."'")->fetch(PDO::FETCH_ASSOC);
			echo '<a class="nav__link" href="profile.php">'.$user['email'].'</a>';
		}
		else{
			echo '<a class="nav__link" href="auth.php">Войти</a>';
		}
	}
	function ReturnToAuth(){
		if(!isset($_COOKIE["token"])){
			header("Location: ./auth.php");
		}
	}
	function getFio(){
		global $pdo;
		$user = $pdo->query("SELECT * FROM users WHERE cookie_token = '".$_COOKIE["token"]."'")->fetch(PDO::FETCH_ASSOC);
		echo $user['usersurname'].' '.$user['username'].' '.$user['usermiddlename'];
	}

?>