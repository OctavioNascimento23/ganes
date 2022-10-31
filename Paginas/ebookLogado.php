<?php
    include'../connect.php';
	include'../checkLogin.php';
?>

<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>Ganes</title>
	<link rel="stylesheet" href="../css/fancySelect.css" />
	<link rel="stylesheet" href="../css/uniform.css" />
	<link rel="stylesheet" href="../css/all.css" />
	<link rel="stylesheet" href="../css/estiloPersonalizado.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="../css/screen.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<span ><a  href="indexLogado.php"><img class="logo-ganes"src="../images/logoganes.png" alt="ganes"></a></span>
				<ul class="tools-nav tools-nav-mobile">
					
					<li class="login">
						
					<?php

						$sqlCity = mysqli_query($con, "select username from reg");

						while ($item = mysqli_fetch_assoc($sqlCity)) {
							$idItem = utf8_encode($item['username']);
							
							echo "Bom dia, " . $idItem;
						}
						?>

					</li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="indexLogado.php" class="tirarLink"><span class="btn white normal">MENU</span></a></li>
							<li><a href="productsLogado.php" class="tirarLink"><span class="btn white normal">LIVROS</span></a></li>
							<li><a href="ebookLogado.php" class="tirarLink"><span class="btn black normal">EBOOKS</span></a></li>
							<li><a href="quem_somosLogado.php" class="tirarLink"><span class="btn white normal">QUEM SOMOS?</span></a></li>
						</ul>
					</nav>
					<ul class="tools-nav">
					
						<li class="login">
							
						<?php

						$sqlCity = mysqli_query($con, "select username from reg where id='$_SESSION[id]");

						while ($item = mysqli_fetch_assoc($sqlCity)) {
							$idItem = utf8_encode($item['username']);
							
							echo "Bom dia, " . $idItem;
						}
						?>

						</li>
					</ul>
				</div>
			</header>
			<section class="promo">
				<ul class="slider">
					<li style="background: url(../images/slide1.png) no-repeat 50% 50%; height: 500px;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1></h1>
								<p></p>
							</div>
						</div>
					</li>
					<li style="background: url(../images/slide2.png) no-repeat 50% 50%; height: 500px;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1></h1>
								<p></p>
							</div>
						</div>
					</li>
					<li style="background: url(../images/slide3.png) no-repeat 50% 50%; height: 500px;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1></h1>
								<p></p>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<section id="main">
				<div class="boxes">
					<div class="box">
						<a href="Ofertas.php">
							<span class="bg"></span>
							<img src="../images/imp.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>Promoção</span></span>
									<h2>Livros Em Oferta</h2>
									<span class="btn white normal">Acessar</span>
								</div>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="Lancamentos.php">
							<span class="bg"></span>
							<img src="../images/mord.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>Lançamentos</span></span>
									<h2>Livros Lançados</h2>
									<span class="btn white normal">Acessar</span>
								</div>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="Destaques.php">
							<span class="bg"></span>
							<img src="../images/osol.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>Destaques</span></span>
									<h2>Livros Populares</h2>
									<span class="btn white normal">Acessar</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="block-advice">
					<div class="advice-holder">
						<h2>Alguma Dúvida?</h2>
						<p>Entre em contato conosco.</p>
					</div>
					<form action="#" class="form-newsletter">
						<fieldset>
							<input type="text" placeholder="Seu email..." />
							<input class="btn black normal" type="submit" value="Enviar" />
						</fieldset>
					</form>
				</div>
			</section>
		</div>

		<!-- FOOTER -->
		<?php
		include'../components/footer.php'
		?>
		
	</div>
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="../js/fancySelect.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>