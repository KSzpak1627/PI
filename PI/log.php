<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "kolonie";

$fname = "";
$lname = "";
$id = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['IDkol'];
    return $posts;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży </title>
<script src='java-script.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel='stylesheet' href='css-style.css' />




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style>
	@import url('https://fonts.googleapis.com/css?family=Comfortaa|Nothing+You+Could+Do')
</style> 
</head>

<body>
<body class="log">



<div id="page">

<div id="content">

<div id="header">

	<div class="panel">
		<div class="container">
			<div class="header-gora col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 logo">
			        <a href="index.php" title="">
						<img class="img-responsive" src="img/logo.png" style="margin: 0px auto;">
					</a>
	                <h1>Kolonie i obozy językowe </h1>
	            </div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 register">
					    <a href="register.php" class="rejestracja text-uppercase btn btn-outline" title="zarejestruj sie">Zarejestruj się</a>
	                </div>
					
	                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 login">
					<?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
					        <li><a href="log.php" class="logowanie text-uppercase btn btn-outline" title="panel">Twój profil</a></li> 
							<p> | <a href="logout.php">Wyloguj się!</a> | </p>
																				
   					        <?php } else if (isset($_SESSION['admin']) && !$_SESSION['admin']) { ?>
					        <li><a href="log.php" class="logowanie text-uppercase btn btn-outline" title="pane2">Twój profil</a></li>   
							<p><a href="logout.php">Wyloguj się!</a></p>
                            <?php } else { ?>
					        <li><a href="log.php" class="logowanie text-uppercase btn btn-outline" title="Zaloguj się">Zaloguj się</a></li>
							
							
                            <?php } ?>
								
					</div>		
							
			</div>
		</div>
	</div><!-- panel koniec -->

	<div class="container">

		<div id="menu-row" class="menu-row col-xs-12" style="top: 0px;">
			<div class="container">

				<div class="menu navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12 no-padding">
					<div class="navbar-header">
					</div>
					<div class="collapse navbar-collapse no-padding" id="collapse">
						<div class="menu-gorne-menu-container">
							<ul id="menu-gorne-menu" class="menu nav navbar-nav text-uppercase">
								<li id="menu-item-2" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22">
									<a href="index.php" title="Strona główna">Strona główna</a>
								</li>
								<li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3">
									<a href="onas.php" title="O nas">O nas</a>
								</li>
								<li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta ▼</a>
									 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								  <a class="dropdown-item" href="kolonie.php">Kolonie</a>
								  <a class="dropdown-item" href="polkolonie.php">Półkolonie</a>
								  <a class="dropdown-item" href="obozy.php">Obozy językowe</a>
								</div>					
								</li>
								</li>
								<li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49">
									<a href="galeria.php" title="Galeria">Galeria</a>
								</li>
								<li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
									<a href="kontakt.php" title="Kontakt">Kontakt</a>
								</li>
								
								
							</ul>
						</div>
					</div>
				</div>

				<div class="navbar navbar-light bg-light justify-content-between col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="Wpisz szukaną frazę" aria-label="search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Wyszukaj</button>
					</form>
				</div>

			</div>
		</div>
	</div>		
	
</div><!-- koniec header -->

<div id="slider">
	<div class="container">
	   <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol> 
			 
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img src="img/nag11.png" alt="" style="margin: 0px auto;">
				</div> 
				
				<div class="carousel-item">
				<img src="img/nag1.2.png" alt="" style="margin: 0px auto;">
				</div> 
				
			</div> 			
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Poprzedni</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div><!-- slider -->


<div id="container" class="container">
	 <!--logowanie-->
	
		<div class="log col-xs-12">

				<div class="blog-wpis col-xs-12">
				<div id='kolumny' class='kolumny container-fluid'>
			         
			<div id='komulna-2' class='kolumna-2 col-xs-6 col-xs-offset-3'>
			<?php 
				if(isset($_POST['update']))
					{
					    $data = getPosts();
					    $update_Query = "UPDATE `kolonie` SET `aktywnoscKol`='1' WHERE `IDkol` = $data[0]";
					    try{
					        $update_Result = mysqli_query($connect, $update_Query);
					        
					        if($update_Result)
					        {
					            if(mysqli_affected_rows($connect) > 0)
					            {
					                echo '<div class="alert alert-success">Kolonia zaakceptowana!</div>';
					            }else{
					                echo '<div class="alert alert-danger"><b>Błąd!</b></div>';
					            }
					        }
					    } catch (Exception $ex) {
					        echo 'Error Update '.$ex->getMessage();
					    }
					}								
			?>

			<?php 
				if(isset($_POST['delete']))
					{
					    $data = getPosts();
					    $update_Query = "UPDATE `kolonie` SET `aktywnoscKol`='0' WHERE `IDkol` = $data[0]";
					    try{
					        $update_Result = mysqli_query($connect, $update_Query);
					        
					        if($update_Result)
					        {
					            if(mysqli_affected_rows($connect) > 0)
					            {
					                echo '<div class="alert alert-success">Kolonia usunięta!</div>';
					            }else{
					                echo '<div class="alert alert-danger"><b>Błąd!</b></div>';
					            }
					        }
					    } catch (Exception $ex) {
					        echo 'Error Update '.$ex->getMessage();
					    }
					}
			?>
						
            <!--login-->
            <form action="login.php" method="post">
            <div id='login'>
            <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
				<div class="tyt"></div>
            <div class="form-group">
			<h4 class="text-center text-uppercase"><title="panelUzytkownika">Panel administratora</title></h4> 
					
			<!--informacje-->
			
			<div class="informacje">
			
			<label><h3>Informacje</h3></label>
						
			<?php $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				$sqlCommand="SELECT * FROM kolonie";	
				$lik_id = "SELECT count(aktywnoscKol) FROM kolonie";
				$lip_id = "SELECT count(aktywnoscPol) FROM polkolonie";
				$zgl_akt = "SELECT count(aktywnoscKol) FROM kolonie WHERE `aktywnoscKol`='1'";
				$ocze_kl = "SELECT count(aktywnoscKol) FROM kolonie WHERE `aktywnoscKol`='0'";
				$ocz_kl2 = "SELECT count(organizator) FROM user WHERE `organizator`='1'";
				$us_akt = "SELECT count(IDuser) FROM user";
							$lik = mysqli_query($myConnection, $lik_id);
                            $liczba1 = mysqli_fetch_assoc($lik);
							$zgl = mysqli_query($myConnection, $zgl_akt);
                            $liczba2 = mysqli_fetch_assoc($zgl);
							$ocze = mysqli_query($myConnection, $ocze_kl);
                            $liczba3 = mysqli_fetch_assoc($ocze);
							$us = mysqli_query($myConnection, $us_akt);
                            $liczba4 = mysqli_fetch_assoc($us);
							$ocz = mysqli_query($myConnection, $ocz_kl2);
                            $liczba5 = mysqli_fetch_assoc($ocz);
							$lip = mysqli_query($myConnection, $lip_id);
                            $liczba6 = mysqli_fetch_assoc($lip);

			 $query=mysqli_query($myConnection, $sqlCommand);            
                              { ?>
						
			<div class=".col-6 .col-md-4 vertical  no-padding">		
                               <p class="text-left bg-info">Ilość wszystkich użytkowników: <?php echo $liczba4['count(IDuser)'];?></p>
							   <p class="text-left bg-info">Ilość wszystkich organizatorów: <?php echo $liczba5['count(organizator)'];?></p>
							   </div>
							   
			<div class=".col-6 .col-md-4 vertical  no-padding">						   
							   <p class="text-left bg-info">Ilość wszystkich kolonii:  <?php echo $liczba1['count(aktywnoscKol)'];?></p>
							   <p class="text-left bg-info">Ilość wszystkich półkolonii:  <?php echo $liczba6['count(aktywnoscPol)'];?></p>
							   <p class="text-left bg-info">Ilość wszystkich obozów:  </p>
							   </div>
							  
			<div class=" .col-6 .col-md-4  vertical no-padding">		
                               <p class="text-left bg-success">Ilość zgłoszonych organizatorów: </p>
							   <p class="text-left bg-success">Ilość zgłoszonych kolonii: <?php echo $liczba2['count(aktywnoscKol)'];?></p>
							   <p class="text-left bg-success">Ilość zgłoszonych półkolonii: </p>
							   <p class="text-left bg-success">Ilość zgłoszonych obozów: </p>
							   </div>
							   
				<div class=".col-6 .col-md-4 vertical no-padding">			   
						   
                               <p class="text-left bg-danger">Ilość oczekujących organizatorów: </p>
							   <p class="text-left bg-danger">Ilość oczekujących kolonii: <?php echo $liczba3['count(aktywnoscKol)'];?></p>
							   <p class="text-left bg-danger">Ilość oczekujących półkolonii: </p>
							   <p class="text-left bg-danger">Ilość oczekujących obozów: </p>
							   </div>
			
			
			<?php } ?>
			</div>
			
			<!--1 panel - kolonie -->
			
						<div class="tyt"><h3>Kolonie</h3></div></div>
								
		
			<?php
					        $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
                            $sqlCommand="SELECT * FROM kolonie WHERE `aktywnoscKol`='1'"; 
                            $query=mysqli_query($myConnection, $sqlCommand); 
								while($row = mysqli_fetch_array($query)){ ?>
																                     
                      <?php }?>
								
			<div class="col-xs-12 vertical2 no-padding admin-kolonie">
                          <div class="col-lg-3 header1">
                              <h2>Nazwa</h2>
                          </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-padding vertical2 header1">
                              <h2>Organizator</h2>
                          </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-padding vertical2 header1">
                              <h2>Status</h2>
                          </div>
                          <div class="col-lg-3 header1">
                            <h2>Opcje</h2>
                          </div>
                      </div>
			
			
			<?php
                            $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
							$guery=mysqli_query($myConnection, "set names 'utf8'");
                            $sqlCommand="SELECT * FROM kolonie"; 
                            $query=mysqli_query($myConnection, $sqlCommand); 
							
							
							
                             while($row = mysqli_fetch_array($query)){ ?>
						<div class="col-xs-12 vertical2 kolonia-accepted well well-sm">
                          
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-padding vertical2">
						  <div class='tab-naz'>
                              <h4> <a class="btn-link btn" href="kolonie.php?id=<?php echo "$row[0]";?>"> <?php echo "$row[nazwakol]";?> </a> </h4></div>
                          </div>
						  
						  <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12 no-padding vertical1">
						  <div class='tab-org'>
                              <h4><?php echo "$row[org]";?></h4></div>
                          </div>			  
						  
						 <div class="col-lg-3 col-md-1 col-sm-1 col-xs-12 no-padding vertical1">
                            <?php if("$row[aktywnoscKol]"==1) { ?>
                              <h4 style="color:green;">Zaakceptowany</h4>
                            <?php } else { ?>
                              <h4 style="color:red;">Oczekuje</h4>
                            <?php } ?>
                          </div>
						  <div class="col-lg-3 vertical2">
						  
                              <form action="log.php" method="post">
							  <div class='tab-but'>
                                   <input type="hidden" name="IDkol" value="<?php echo "$row[IDkol]";?>">                                  
                                   <input type="hidden" name="aktywnoscKol" value="<?php echo "$row[aktywnoscKol]";?>">
                                   <?php if("$row[aktywnoscKol]"==1) { ?>
                                   <input class="btn btn-danger" type="submit" name="delete" value="Zarchiwizuj kolonie">
                                   <?php } else { ?>
                                   <input class="btn btn-success" type="submit" name="update" value="Zaakceptuj kolonie">
								    <input class="btn btn-danger" type="submit" name="delete" value="Usuń kolonie">
                                   <?php } ?>
								   
                              </form>
                         </div>
						  </div>
                      </div>
                      <?php } ?>

					  <!--lista uzytkowników-->
					  
					             
			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading11">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                    </a>
                      Dodaj kolonie 
                  </h4>
                </div>
                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                  			  
				  <div id="formularz">

<form id="form2" method="post" action="log.php" style="background: #fff"> 

<br />
<input type="text" name="nazwakolonii" placeholder="Nazwa kolonii" style="width:100%"/><br />
<br />
<input type="text" name="organizator" placeholder="Organizator" style="width:100%"/><br />
<br />
<input type="text" name="datapocz" placeholder="Data początkowa" style="width:100%;"/><br />
<br />
<input type="text" name="datakon" placeholder="Data końcowa" style="width:100%;"/><br />
<br />
<textarea name="opis" cols="30" rows="10" placeholder="Opis kolonii" style="width:100%;"></textarea><br />
<input type="submit" name="submit" style="width:100%; " value="Dodaj kolonie"/> <br />
<input type="reset" style="width:100%; " value="Wyczyść"/><br />
</form>
				  
                </div>              
				 
			</div>			
		  </div>
			 
			  
			  </div>
			  
			  <!----2panel---->
			  
			  
			  
			  <!----3panel---->
			  
			  
			  
			 <!----4panel---->

			  
	 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading10">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                      Użytkownicy 
                    </a>
				</h4>
				  			  
                </div>
			 <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                  <ul class="list-group">
				  
				  <input class="form-control" id="myInput" type="text" placeholder="Wyszukaj użytkownika...">
			<div id="uzytlist">
				  
				  
			<?php      $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$sqlCommand="SELECT * FROM user";
			$user = array();
			$query=mysqli_query($myConnection, $sqlCommand);   
			if("$row[organizator]"==0)                             
					
			$sqlCommand="SELECT * FROM user";
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ 
				$buttons = '<a href="toggleUzyt.php?id='.$row['IDuser'].'" class="btn btn-xs btn-danger">Usuń użytkownika</a> ';
				if (isset($user["$row[organizator]"==1]))
				$buttons .= '<a href="toggleUzyt.php?id='.$row['organizator'].'" class="btn btn-xs btn-danger">Usuń organizatora</a> ';				
				else
				$buttons .= '<a href="toggleUzyt.php?id='.$row['organizator'].'" class="btn btn-xs btn-success">Ustaw jako organizatora</a> ';
			?>
					<li class="list-group-item"><?php echo $row['imie'], $row['nazwisko'], $row['nick']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
			<?php  } ?>
                    </ul>
				</div>	
                </div>
              </div>
			  </div>		  
			  	
            <br/><?php $dzien = date("d");
				$miesiac = date("m");
				$rok = date("Y");
				switch($miesiac){
					case '01':$miesiac='stycznia';break;
					case '02':$miesiac='lutego';break;
					case '03':$miesiac='marca';break;
					case '04':$miesiac='kwietnia';break;
					case '05':$miesiac='maja';break;
					case '06':$miesiac='czerwca';break;
					case '07':$miesiac='lipca';break;
					case '08':$miesiac='sierpnia';break;
					case '09':$miesiac='września';break;
					case '10':$miesiac='października';break;
					case '11':$miesiac='listopada';break;
					case '12':$miesiac='grudnia';break;
					default:$miesiac='niezidentyfikowany';break;}
					print "Dziś jest <strong>$dzien $miesiac $rok</strong>";
					?>
            <br/><a href='logout.php' class='btn btn-default'>Wyloguj</a>
			<?php } else
			
			
			// KONTO UZYTKOWNIKA
			if ($_SESSION['uzytkownik']==1){?>
            <div class="form-group">
			<h4 class="text-center text-uppercase"><title="panelUzytkownika">Panel użytkownika</title></h4> 
			Jesteś zalogowany jako <?php echo $_SESSION['imie'].' '.$_SESSION['nazwisko']; ?>
			
			
			
			
			
			<div class="informacje">
			
			<label><h3>Informacje</h3></label>
						
			<?php $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				$sqlCommand="SELECT * FROM zapisykol";	
				$lik_id = "SELECT count(IDkol) FROM zapisykol WHERE IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
				$lip_id = "SELECT count(IDpol) FROM zapisypol WHERE IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
				$zgl_akt = "SELECT count(IDobo) FROM zapisyobo WHERE IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
				
							$lik = mysqli_query($myConnection, $lik_id);
                            $liczba1 = mysqli_fetch_assoc($lik);
							$lip = mysqli_query($myConnection, $lip_id);
                            $liczba6 = mysqli_fetch_assoc($lip);
							$zgl = mysqli_query($myConnection, $zgl_akt);
                            $liczba3 = mysqli_fetch_assoc($zgl);

			 $query=mysqli_query($myConnection, $sqlCommand);            
                              { ?>
						
			
							   
			<div class=".col-6 .col-md-4 vertical  no-padding">						   
							   <p class="text-left bg-info">Ilość Twoich kolonii:  <?php echo $liczba1['count(IDkol)'];?></p>
							   <p class="text-left bg-info">Ilość Twoich półkolonii:  <?php echo $liczba6['count(IDpol)'];?></p>
							   <p class="text-left bg-info">Ilość Twoich obozów:  <?php echo $liczba3['count(IDobo)'];?></p>
							   </div>
							  
						
			
			<?php } ?>
			</div>
			
			
			
			
			
			
			
			
			
			
			<!-----dostepne kolonie ------>
						
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading9">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
					Twoje kolonie 
                    </a>
                  </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                  <ul class="list-group">
				  <!-- WYSWIETLANIE KOLONII, W KTORYCH BIERZE SIE UDZIAL -->
				  <?php      
				  $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
					$guery=mysqli_query($myConnection, "set names 'utf8'");
						  
					$sqlCommand="SELECT z.IDuser, k.IDkol, k.nazwakol FROM zapisykol z JOIN kolonie k ON z.IDkol=k.IDkol WHERE z.IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
					$query=mysqli_query($myConnection, $sqlCommand);        
					while($row = mysqli_fetch_array($query)){ 
						$buttons = '<a href="toggleUczK.php?iduser='.$row['IDuser'].'&idkol='.$row['IDkol'].'" class="btn btn-xs btn-danger">Wypisz</a>';
					?>
					<li class="list-group-item"><?php echo $row['nazwakol']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
				  <?php  } ?>
				  <!-- KONIEC WYSWIETLANIA KOLONII, W KTORYCH BIERZE SIE UDZIAL -->
                    </ul>
                </div>
              </div>
              </div>
				  
				  				  
				  <!-----dostepne polkolonie------>
						
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading9">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
					Twoje półkolonie
                    </a>
                  </h4>
                </div>
                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                  <ul class="list-group">
				  <!-- WYSWIETLANIE POLKOLONII, W KTORYCH BIERZE SIE UDZIAL -->
				  <?php      
				  $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
					$guery=mysqli_query($myConnection, "set names 'utf8'");
						  
					$sqlCommand="SELECT z.IDuser, p.IDpol, p.nazwapol FROM zapisypol z JOIN polkolonie p ON z.IDpol=p.IDpol WHERE z.IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
					$query=mysqli_query($myConnection, $sqlCommand);        
					while($row = mysqli_fetch_array($query)){ 
						$buttons = '<a href="toggleUczP.php?iduser='.$row['IDuser'].'&idpol='.$row['IDpol'].'" class="btn btn-xs btn-danger">Wypisz</a>';
					?>
					<li class="list-group-item"><?php echo $row['nazwapol']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
				  <?php  } ?>
				  <!-- KONIEC WYSWIETLANIA POLKOLONII, W KTORYCH BIERZE SIE UDZIAL -->
                    </ul>
                </div>
              </div>
              </div>
				  
				  
				  <!-----dostepne obozy------>
						
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading15">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
					Twoje obozy językowe
                    </a>
                  </h4>
                </div>
                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                  <ul class="list-group">
				  <!-- WYSWIETLANIE OBOZÓW, W KTORYCH BIERZE SIE UDZIAL -->
				  <?php      
				  $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
					$guery=mysqli_query($myConnection, "set names 'utf8'");
						  
					$sqlCommand="SELECT z.IDuser, o.IDobo, o.nazwaobo FROM zapisyobo z JOIN obozy o ON z.IDobo=o.IDobo WHERE z.IDuser = '".mysqli_real_escape_string($myConnection, $_SESSION['id'])."'";
					$query=mysqli_query($myConnection, $sqlCommand);        
					while($row = mysqli_fetch_array($query)){ 
						$buttons = '<a href="toggleUczO.php?iduser='.$row['IDuser'].'&idobo='.$row['IDobo'].'" class="btn btn-xs btn-danger">Wypisz</a>';
					?>
					<li class="list-group-item"><?php echo $row['nazwaobo']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
				  <?php  } ?>
				  <!-- KONIEC WYSWIETLANIA OBOZÓW, W KTORYCH BIERZE SIE UDZIAL -->
                    </ul>
                </div>
              </div>
              </div>
				  
				  
				  
				  
			
			<!-----1panel---->
			
			<label><h3>Dostępne wyjazdy</h3></label>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Dostępne kolonie
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <ul class="list-group">
            <?php      $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$sqlCommand="SELECT * FROM zapisykol WHERE IDuser='".$_SESSION['id']."'";
			$zapisykol = array();
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){
				$zapisykol[$row['IDkol']] = true;
			}			
			
			$sqlCommand="SELECT * FROM kolonie";
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ 
				$buttons = '<a href="kolonie.php?id='.$row['IDkol'].'" class="btn btn-xs btn-default" target="_blank">Więcej informacji</a> ';
				if (isset($zapisykol[$row['IDkol']]))
					$buttons .= '<a href="toggleKol.php?id='.$row['IDkol'].'" class="btn btn-xs btn-danger">Wypisz się</a> ';
				else
					$buttons .= '<a href="toggleKol.php?id='.$row['IDkol'].'" class="btn btn-xs btn-success">Zapisz się</a> ';
			?>
					<li class="list-group-item"><?php echo $row['nazwakol']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
			<?php  } ?>
                    </ul>
						
					
                </div>
              </div>
              </div>
			  
			  
			  <!----2 panel-->
			 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Dostępne półkolonie
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <ul class="list-group">
            <?php      $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$sqlCommand="SELECT * FROM zapisypol WHERE IDuser='".$_SESSION['id']."'";
			$zapisypol = array();
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){
				$zapisypol[$row['IDpol']] = true;
			}			
			
			$sqlCommand="SELECT * FROM polkolonie";
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ 
				$buttons = '<a href="polkolonie.php?id='.$row['IDpol'].'" class="btn btn-xs btn-default" target="_blank">Więcej informacji</a> ';
				if (isset($zapisypol[$row['IDpol']]))
					$buttons .= '<a href="togglePol.php?id='.$row['IDpol'].'" class="btn btn-xs btn-danger">Wypisz się</a> ';
				else
					$buttons .= '<a href="togglePol.php?id='.$row['IDpol'].'" class="btn btn-xs btn-success">Zapisz się</a> ';
			?>
					<li class="list-group-item"><?php echo $row['nazwapol']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
			<?php  } ?>
                    </ul>
                </div>
              </div>
              </div> 
			  
			  <!----3 panel-->
			 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      Dostępne obozy językowe
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <ul class="list-group">
            <?php      $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$sqlCommand="SELECT * FROM zapisyobo WHERE IDuser='".$_SESSION['id']."'";
			$zapisyobo = array();
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){
				$zapisyobo[$row['IDobo']] = true;
			}			
			
			$sqlCommand="SELECT * FROM obozy";
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ 
				$buttons = '<a href="obozy.php?id='.$row['IDobo'].'" class="btn btn-xs btn-default" target="_blank">Więcej informacji</a> ';
				if (isset($zapisyobo[$row['IDobo']]))
					$buttons .= '<a href="toggleObo.php?id='.$row['IDobo'].'" class="btn btn-xs btn-danger">Wypisz się</a> ';
				else
					$buttons .= '<a href="toggleObo.php?id='.$row['IDobo'].'" class="btn btn-xs btn-success">Zapisz się</a> ';
			?>
					<li class="list-group-item"><?php echo $row['nazwaobo']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
			<?php  } ?>
                    </ul>
                </div>
              </div>
              </div> 

            <br/><?php $dzien = date("d");
				$miesiac = date("m");
				$rok = date("Y");
				switch($miesiac){
					case '01':$miesiac='stycznia';break;
					case '02':$miesiac='lutego';break;
					case '03':$miesiac='marca';break;
					case '04':$miesiac='kwietnia';break;
					case '05':$miesiac='maja';break;
					case '06':$miesiac='czerwca';break;
					case '07':$miesiac='lipca';break;
					case '08':$miesiac='sierpnia';break;
					case '09':$miesiac='września';break;
					case '10':$miesiac='października';break;
					case '11':$miesiac='listopada';break;
					case '12':$miesiac='grudnia';break;
					default:$miesiac='niezidentyfikowany';break;}
					print "Dziś jest <strong>$dzien $miesiac $rok</strong>";
					?>
            <br/><a href='logout.php' class='btn btn-default'>Wyloguj</a>
            </div>
			<?php }
			// KONIEC KONTA UZYTKOWNIKA

			// KONTO ORGANIZATORA
			if ($_SESSION['organizator']==1){?>
			<h4 class="text-center text-uppercase"><title="panelUzytkownika">Panel organizatora</title></h4> 
            <div class="form-group">
			Jesteś zalogowany jako <?php echo $_SESSION['imie'].' '.$_SESSION['nazwisko']; ?>

			  <center>
			  </center>
			  <!---Informacje---> 
			  <div class="informacje">
			
			<label><h3>Informacje</h3></label>
						
			<?php $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
				$sqlCommand="SELECT * FROM kolonie";	
				$lik_id = "SELECT count(aktywnoscKol) FROM kolonie";
				$lip_id = "SELECT count(aktywnoscPol) FROM polkolonie";
				
							$lik = mysqli_query($myConnection, $lik_id);
                            $liczba1 = mysqli_fetch_assoc($lik);
							$lip = mysqli_query($myConnection, $lip_id);
                            $liczba6 = mysqli_fetch_assoc($lip);

			 $query=mysqli_query($myConnection, $sqlCommand);            
                              { ?>
						
										   
			<div class=".col-6 .col-md-4 vertical  no-padding">						   
							   <p class="text-left bg-info">Ilość Twoich kolonii:  <?php echo $liczba1['count(aktywnoscKol)'];?></p>
							   <p class="text-left bg-info">Ilość Twoich półkolonii:  <?php echo $liczba6['count(aktywnoscPol)'];?></p>
							   <p class="text-left bg-info">Ilość Twoich obozów:  </p>
							   </div>
							  
			
			
			
			<?php } ?>
			</div>
			  
			  
			  <!---twoje kolonie---->
			  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading9">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
					Twoje kolonie 
                    </a>
                  </h4>
                </div>
                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                  <ul class="list-group">
				  <!-- WYSWIETLANIE KOLONII, W KTORYCH BIERZE SIE UDZIAL -->
				  <?php      
				  $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
					$guery=mysqli_query($myConnection, "set names 'utf8'");
						  
					$sqlCommand="SELECT nazwakol FROM kolonie WHERE org='".mysqli_real_escape_string($myConnection, $_SESSION['org'])."'";
					$query=mysqli_query($myConnection, $sqlCommand);        
					while($row = mysqli_fetch_array($query)){ 
						$buttons = '<a href="toggleUczK.php?iduser='.$row['IDuser'].'&idkol='.$row['IDkol'].'" class="btn btn-xs btn-default">Zarządzaj</a>';
						

					?>
					<li class="list-group-item"><?php echo $row['nazwakol']; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
				  <?php  } ?>
				  <!-- KONIEC WYSWIETLANIA KOLONII, W KTORYCH BIERZE SIE UDZIAL -->
                    </ul>
                </div>
              </div>
              </div>
			  
			  <!---Dodaj kolonie---> 
			 
			
			<label><h3>Dodaj wyjazd</h3></label>
			  
			  			  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading19">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                      Dodaj kolonie 
                    </a>
                  </h4>
                </div>
                <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                  			  
				  <div id="dodajwyjazd">

<form id="form" method="post" action="log.php"> 

<br />
<input type="text" name="nazwakolonii" placeholder="Nazwa kolonii" style="width:100%"/><br />
<br />
<input type="text" name="organizator" placeholder="Organizator" style="width:100%"/><br />
<br />
<input type="text" name="datapocz" placeholder="Data początkowa" style="width:100%;"/><br />
<br />
<input type="text" name="datakon" placeholder="Data końcowa" style="width:100%;"/><br />
<br />
<textarea name="opis" cols="30" rows="10" placeholder="Opis kolonii" style="width:100%;"></textarea><br />
<input type="submit" name="submit" style="width:100%; " value="Dodaj kolonie"/> <br />
<input type="reset" style="width:100%; " value="Wyczyść"/><br />
</form>
				  
                </div>              
				 
			</div>			
		  </div>
			 
			  
			  </div>
			  
			  
			  			  
			  
			  
			  

            <br/><?php $dzien = date("d");
				$miesiac = date("m");
				$rok = date("Y");
				switch($miesiac){
					case '01':$miesiac='stycznia';break;
					case '02':$miesiac='lutego';break;
					case '03':$miesiac='marca';break;
					case '04':$miesiac='kwietnia';break;
					case '05':$miesiac='maja';break;
					case '06':$miesiac='czerwca';break;
					case '07':$miesiac='lipca';break;
					case '08':$miesiac='sierpnia';break;
					case '09':$miesiac='września';break;
					case '10':$miesiac='października';break;
					case '11':$miesiac='listopada';break;
					case '12':$miesiac='grudnia';break;
					default:$miesiac='niezidentyfikowany';break;}
					print "Dziś jest <strong>$dzien $miesiac $rok</strong>";
					?>
            <br/><a href='logout.php' class='btn btn-default'>Wyloguj</a>
            </div>
			
			<?php
			// KONIEC KONTA ORGANIZATORA
			} 
			else if (!isset($_SESSION['admin'])) {?>
            <div class='tyt'></div>
			<h5 class="text-center text-uppercase"><title="zaloguj">Zaloguj się na swoje konto</title></h4>	
            <?php if (isset($_SESSION['register_success'])) { ?>
              <div class="form-group">
                <label>Konto zostało utworzone, możesz się teraz zalogować</label>
              </div>
             <?php } ?>
            <?php if (isset($_SESSION['error'])) { ?>
              <div class="form-group">
                <label>Błąd logowania</label>
              </div>
             <?php } ?>
              <div class="form-group">
                <label for="exampleInputLogin1">Login</label>
                <input type="text" class="form-control" id="exampleInputLogin1" placeholder="Login" name="login">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Hasło</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło" name="password">
              </div>
              <div class="form-group">
              <label>
              <button type="submit" class="btn btn-default" name="submit">Zaloguj</button>
              </label>
              <br />Nie posiadasz konta?
              <br /><label>
              <a href="register.php" class="btn btn-default">Zarejestruj się</a>
              </label>
              </div>
              <?php }?>
              </div>
            </form>
	</div>
    </div>
</div>  
						
						

					</div>
			</div>


</div>
	

		
<footer>

	<div class="container footer-content">
		<div class="widget-area-footer widget-area-footer-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">	
			<div id="nav_menu-4" class="widget widget_nav_menu">
				<h3 class="widget-title">Menu</h3>
				<div class="menu-gorne-menu-container">
					<ul id="menu-gorne-menu-1" class="menu">
						<li class="menu-item2 menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22">
									
							<a href="." title="Strona główna">Strona główna</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-47">
							<a href="." title="O nas">O nas</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-48">
							<a href="." title="Oferta">Oferta</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-49">
							<a href="." title="Galeria">Galeria</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-25">
							<a href="." title="Kontakt">Kontakt</a>
						</li>
						</ul>
					</div>
				</div> 
			</div>
			<div class="widget-area-footer widget-area-footer-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">	
				<div id="custom_html-6" class="widget_text widget widget_custom_html">
					<h3 class="widget-title">Kontakt</h3>
				<div class="textwidget custom-html-widget">
					<p>Centrum Kolonii, półkolonii i obozów językowych dla dzieci i młodzieży</p>
					<p>al. W. Sikorskiego 54b, 35-650 Rzeszów</p>
					<p>tel.
					<a href="tel:+48178721000" title="Telefon"> +48 17 654 90 10</a>
					</p>
				</div>
			</div>
		</div>
		<div class="social col-xs-2 no-padding">                                      
			            <div class="col-xs-12 no-padding">
							<a href="https://www.facebook.com/" title="">
								<img src="img/fejs.png" class="img-responsive" style="margin: 0px auto;"height="30" width="50;">
							</a>
							<a href="https://twitter.com/" title="">
								<img src="img/twitter.png" class="img-responsive" style="margin: 0px;" height="30" width="50;">
							</a>
							<a href="https://www.youtube.com/" title="">
								<img src="img/yt.png" class="img-responsive" style="margin: 0px auto;"height="30" width="50;">
							</a>
							
						</div>
						</div>
						
						
	</div>
	<div class="clear"></div>
	<div class="clear"></div>
	<div class="col-xs-12 copyright">
		© 
		<a href="." title="Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży">Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży</a> 
	</div>
	
</div>
</div>
</footer>



</div> 
</div>

 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#uzytlist *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
<?php
unset($_SESSION['register_success']);
unset($_SESSION['error']);
?>
		
