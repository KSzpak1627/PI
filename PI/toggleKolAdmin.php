<?php
session_start();
	if (isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin']) {
			$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				  $guery=mysqli_query($myConnection, "set names 'utf8'");
				$sqlCommand="DELETE FROM zapisykol WHERE IDuser='".mysqli_real_escape_string($myConnection, $_GET['iduser'])."' AND IDkol='".mysqli_real_escape_string($myConnection, $_GET['idkol'])."'"; 
 
				  
				  
				  
				  $query=mysqli_query($myConnection, $sqlCommand);            
	}
header('Location: log.php?id='.$_GET['idkol']);
?>

