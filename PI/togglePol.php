<?php
session_start();
	if (isset($_SESSION['login'])) {
			$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				  $guery=mysqli_query($myConnection, "set names 'utf8'");
				  $sqlCommand="SELECT * FROM zapisypol WHERE IDuser='".$_SESSION['id']."' AND IDpol='".mysqli_real_escape_string($myConnection, $_GET['id'])."'";
				  $query=mysqli_query($myConnection, $sqlCommand);            
				  if (mysqli_num_rows($query) > 0) {
					$sqlCommand="DELETE FROM zapisypol WHERE IDuser='".$_SESSION['id']."' AND IDpol='".mysqli_real_escape_string($myConnection, $_GET['id'])."'"; 
				  } else {
				  $sqlCommand="INSERT INTO zapisypol(IDuser, IDpol) VALUES ('".$_SESSION['id']."','".mysqli_real_escape_string($myConnection, $_GET['id'])."')";
				  }
				  $query=mysqli_query($myConnection, $sqlCommand);            
	}
header('Location: log.php');
?>