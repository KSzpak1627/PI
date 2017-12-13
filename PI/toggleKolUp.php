<?php
session_start();
	if (isset($_SESSION['login'])) {
			$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				  $guery=mysqli_query($myConnection, "set names 'utf8'");
				  $sqlCommand="SELECT * FROM zapisykol WHERE IDuser='".$_SESSION['id']."' AND IDkol='".mysqli_real_escape_string($myConnection, $_GET['id'])."'";
				  $query=mysqli_query($myConnection, $sqlCommand);            
				  $sqlCommand="DELETE FROM kolonie WHERE IDkol='".mysqli_real_escape_string($myConnection, $_GET['id'])."'"; 
				  
				  $query=mysqli_query($myConnection, $sqlCommand);            
	}
header('Location: kolonie.php');
?>
