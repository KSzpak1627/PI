<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src='java-script.js'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel='stylesheet' href='css-style.css' />




<style>
	@import url('https://fonts.googleapis.com/css?family=Comfortaa|Nothing+You+Could+Do')
</style>

</head>

<body>
<body class="kontakt">



<div id="page">

<div id="content">

<div id="header">

	<div class="panel">
		<div class="container">
			<div class="header-gora col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 logo">
			        <a href="#" title="">
						<img class="img-responsive" src="img/logo.png" style="margin: 0px auto;">
					</a>
	                <h1>Kolonie i obozy językowe </h1>
	            </div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 register">
					    <a href="register.php" class="rejestracja text-uppercase btn btn-outline" title="zarejestruj sie">Zarejestruj się</a>
	                </div>
	                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 login">
						<a href="log.php" class="logowanie text-uppercase btn btn-outline" title="Zaloguj się">Zaloguj się</a>
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
          <a class="dropdown-item" href="kolonie.php">Kolonie               </a>
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
						 
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img src="img/nag-oferta.jpg" alt="" style="margin: 0px auto;">
				</div> 
				
				
				
			</div> 			
				
		</div>
	</div>
</div><!-- slider -->


<div id="container" class="container">
	
		
		<div class="kont col-xs-12">
				<div class="header col-xs-12 no-padding">
				<div id="tyt1">
		            <h2 class="text-center text-uppercase">Oferta</h2></div>
		        </div>
				<div class="blog-wpis col-xs-12">
				
				<div class="title col-xs-12 no-padding">
		            <h3 class="text-center">Półkolonie - oferta 2018</h3></div>
					
										
					
				
				<?php
            $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			if (isset($_GET['id'])) 
				$sqlCommand="SELECT * FROM polkolonie WHERE IDpol='".mysqli_real_escape_string($myConnection, $_GET['id'])."'";			
			else		
				$sqlCommand="SELECT * FROM polkolonie";
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ ?>
					<div class='post-head'><?php echo $row['nazwapol'];?></div>
                    <div class='post-tre'><?php echo $row['opis'];?></div>
			<?php
			} 
			if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Lista zapisanych osób
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <ul class="list-group">
            <?php      $myConnection= mysqli_connect("localhost","root","", "kolonie") or die ("could not connect to mysql"); 
			$guery=mysqli_query($myConnection, "set names 'utf8'");
			$sqlCommand="SELECT * FROM user";
			$user = array();
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){
				$user[$row['IDuser']] = $row['imie'].' '.$row['nazwisko'].' - '.$row['nick'];
			}			
			
			$sqlCommand="SELECT * FROM zapisypol WHERE IDpol = '".mysqli_real_escape_string($myConnection, $_GET['id'])."'";
			$query=mysqli_query($myConnection, $sqlCommand);        
			while($row = mysqli_fetch_array($query)){ 
				$buttons = '<a href="toggleUczK.php?iduser='.$row['IDuser'].'&idpol='.$row['IDpol'].'" class="btn btn-xs btn-danger">Wypisz</a>';
			?>
					<li class="list-group-item"><?php echo $user[$row['IDuser']]; ?> <div class="pull-right"><?php echo $buttons; ?></div></li>
			<?php  } ?>
                    </ul>
                </div>
              </div>
              </div>
            <?php
			}
			?>
				
				
				
					




					</div>
			</div>


</div>
	

		
<footer>

	<div class="container footer-content">
	
		<div class="widget-area-footer widget-area-footer-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">	
		<div id="footm">
			<div id="nav_menu-4" class="widget widget_nav_menu">
			
				<h3 class="widget-title">Menu</h3>
				<div class="menu-gorne-menu-container">
					<ul id="menu-gorne-menu-1" class="menu">
						<li class="menu-item2 menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22">
									
							<a href="index.php" title="Strona główna">Strona główna</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-47">
							<a href="onas.php" title="O nas">O nas</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-48">
							<a href="kolonie.php" title="Kolonie">Kolonie</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-48">
							<a href="polkolonie.php" title="półkolonie">Półkolonie</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-48">
							<a href="obozy.php" title="Obozy">Obozy językowe</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-49">
							<a href="galeria.php" title="Galeria">Galeria</a>
						</li>
						<li class="menu-item2 menu-item-type-post_type menu-item-object-page menu-item-25">
							<a href="kontakt.php" title="Kontakt">Kontakt</a>
						</li>
						</ul>
					</div>
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
					<p>email:
					<a href="centrumkolonii@gmail.com" title="Email">centrumkolonii@gmail.com</a>
					</p>
				</div>
			</div>
		</div>
		<div class="social col-xs-2 no-padding">                                      
			            <div class="col-xs-12 no-padding">
							<a href="https://www.facebook.com/" title="">
								<img src="img/fejs.png" class="img-responsive" style="margin: 0px auto;"height="30" width="50;">
							</a>
							<a href="https://www.instagram.com" title="">
								<img src="img/insta.png" class="img-responsive" style="margin: 0px auto;"height="30" width="50;">
							</a>
							<a href="https://www.youtube.com/" title="">
								<img src="img/yt.png" class="img-responsive" style="margin: 0px auto;"height="30" width="50;">
							</a>
							<a href="https://twitter.com/" title="">
								<img src="img/twitter.png" class="img-responsive" style="margin: 0px;" height="30" width="50;">
							</a>
							
						</div>
						</div>
						
						
	</div>
	<div class="clear"></div>
	<div class="clear"></div>
	<div class="col-xs-12 copyright">
		© 
		<a href="index.php" title="Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży">Kolonie, półkolonie i obozy językowe dla dzieci i młodzieży</a> 
	</div>
	
</div>
</div>
</footer>



</div> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

