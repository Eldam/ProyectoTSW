<?php
    if(isset($_SESSION['lang'])){
        // si es true, se crea el require y la variable lang
        $lang = $_SESSION["lang"];
        require "../Lang/".$lang.".php";
        // si no hay sesion por default se carga el lenguaje espanol
    }else{
        require "../Lang/es.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Assembled</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  

	
	<link rel="stylesheet" href="../Locales/style.css">
	 

		
</head>


<body>


	<div class="container-fluid" id="container">

		<nav class="row navbar bgheader ">
			<div class="container">
				<div class="navbar-header">
				<a class="textColor navbar-brand" href="../Controllers/index_controller.php">Assembled</a>
				</div>
				<ul class="nav navbar-nav">
				<li><a class="textColor active" href="../Controllers/index_controller.php"><?php echo $lang["start"] ?></a></li>
				<li><a class="textColor" href="#"><?php echo $lang["msgs"] ?></a></li>
				<li><a class="textColor" href="../Controllers/crear_evento.php"><?php echo $lang["seeEvents"] ?></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a class="textColor active" href="../Functions/Desconectar.php"><span class="glyphicon glyphicon-log-out"></span> <?php echo $lang["LogOut"] ?></a></li>
				</ul>
			</div>
		</nav>