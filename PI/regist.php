<?php
session_start();
if (isset($_POST['regist']) && $_POST['password1'] == $_POST['password2'] && !empty($_POST['login']) && !empty($_POST['password1']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) ) {
	$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
	$guery=mysqli_query($myConnection, "set names 'utf8'");
	$sqlCommand="SELECT * FROM user WHERE nick = '".mysqli_real_escape_string($myConnection, $_POST['login'])."'"; 
                          $query=mysqli_query($myConnection, $sqlCommand);
	if (mysqli_num_rows($query) > 0) {
			$_SESSION['error'] = true;
			header('Location: register.php');
			die();
	}
                   $sqlCommand="INSERT INTO user (nick, email, imie, nazwisko, password) VALUES ('".mysqli_real_escape_string($myConnection, $_POST['login'])."', '".mysqli_real_escape_string($myConnection, $_POST['email'])."', '".mysqli_real_escape_string($myConnection, $_POST['imie'])."', '".mysqli_real_escape_string($myConnection, $_POST['nazwisko'])."', PASSWORD('".mysqli_real_escape_string($myConnection, $_POST['password1'])."'));"; 
                          $query=mysqli_query($myConnection, $sqlCommand);
						  $_SESSION['register_success'] = true;
	header('Location: log.php');
} else {
	$_SESSION['error'] = true;
	header('Location: register.php');	
}
?>