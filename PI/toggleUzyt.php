<?php
session_start();
	if (isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin']) {
			$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				  $guery=mysqli_query($myConnection, "set names 'utf8'");
				  $sqlCommand="SELECT * FROM user";
				  $query=mysqli_query($myConnection, $sqlCommand);            
				  if (mysqli_num_rows($query) > 0) {
					$sqlCommand="DELETE FROM user";
				  } else {
				  $update_Query = "UPDATE `kolonie` SET `organizator`='1'";
				  }
				  $query=mysqli_query($myConnection, $sqlCommand);            
	}
header('Location: log.php');
?>