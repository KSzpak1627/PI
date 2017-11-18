<?php
session_start();
if (isset($_POST['submit'])) {
	$myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
                   $sqlCommand="SELECT * FROM user WHERE nick='".mysqli_real_escape_string($myConnection, $_POST['login'])."' AND password=PASSWORD('".mysqli_real_escape_string($myConnection, $_POST['password'])."')";
                          $guery=mysqli_query($myConnection, "set names 'utf8'");
                          $query=mysqli_query($myConnection, $sqlCommand);      
						  $set = false;      
						  while($row = mysqli_fetch_array($query)){
							  $_SESSION['id'] = $row['IDuser'];
							  $_SESSION['login'] = $row['nick'];
							  $_SESSION['imie'] = $row['imie'];
  							  $_SESSION['nazwisko'] = $row['nazwisko'];
							  					
							  $_SESSION['admin'] = false;
							  $_SESSION['uzytkownik'] = false;
							  $_SESSION['organizator'] = false;
							  
							  // ustaw adminka
							  if ($row['nick'] == 'admin')
								$_SESSION['admin'] = true;
							  else
								$_SESSION['admin'] = false;
							
							  // ustaw organizatorka
							  if ($row['organizator'] == 1)
								$_SESSION['organizator'] = true;
							  else
								$_SESSION['organizator'] = false;
							
							  // ustaw uzytkowniczka
							  if ($row['uzytkownik'] == 1)
								$_SESSION['uzytkownik'] = true;
							  else
								$_SESSION['uzytkownik'] = false;
							
							  $set = true;}
						if (!$set) $_SESSION['error'] = true;
}
header('Location: log.php');?>



