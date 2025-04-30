<?php
#header.php
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../includes/css/icon.css?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../includes/css/materialize.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="../includes/js/jquery-2.1.1.min.js"></script>
		<script src="../includes/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../includes/css/index.css">
		<script>
			$(function(){
				$(".button-collapse").sideNav();
			});
		</script>
	</head>
	<body>
		<nav class="menu-navegacao">	
			<div class="nav-wrapper">
			<div class="menu-navegacao-logo">
				<a href="../public/index.php" class="brand-logo menu-navegacao-logo">
					<img src="../includes/img/logo_generica.png" alt="Logo" style="height: 60px;">
				</a>
			</div>
				
				
				<a href="#" data-activates="menu-mobile" class="button-collapse">
					<i class="material-icons">menu</i>
				</a>

				<ul class="right hide-on-med-and-down">
					<li><a href="../public/index.php" class="menu-navegacao-link">CADASTRAR</a></li>
					<li><a href="../public/listar.php" class="menu-navegacao-link">VER LISTA</a></li>
				</ul>


				<!-- Menu mobile -->
				<ul class="side-nav" id="menu-mobile">
					<li><a href="cadastro.php">CADASTRAR</a></li>
					<li><a href="listar.php">VER LISTA</a></li>
				</ul>
			</div>
		</nav>

