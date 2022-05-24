<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Vendas de Bicicletas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->						
						<h1><a href="index.php" id="logo">Vendas <em>de bicicletas</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Home</a></li>
								<li>
									<a href="#">Produtos</a>
									<ul>
										<?php
											$sql = "SELECT * FROM menu WHERE bloco='Produtos'";
											$r = mysqli_query($con, $sql);
											while ($dados = mysqli_fetch_array($r)) {
												echo "<li>";
												echo "<a href=\"".$dados['url']."\">";
												echo $dados['titulo'];
												echo "</a></li>";
											}
										?>

									</ul>
								</li>
								<li><a href="#">Ver Carrinho</a></li>
								<li><a href="#">Finalizar</a></li>
								<li>
									<a href="#">Administração</a>
									<ul>
									<?php
										$sql="select * from menu where bloco='Admin'";
										$r=mysqli_query($con,$sql);
										while ($dados=mysqli_fetch_array($r))
										{
											echo "<li>";
											echo "<a href=\"".$dados['url']."\">";
											echo $dados['titulo'];
											echo "</a></li>";
										}
									?>
									</ul>
								</li>
								<li><a href="#">Login</a></li>
							</ul>
						</nav>

				</div>
