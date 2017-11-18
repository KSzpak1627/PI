<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['admin']);
unset($_SESSION['organizator']);
unset($_SESSION['uzytkownik']);
header('Location: index.php');
?>