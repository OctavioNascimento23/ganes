<?php
    include'../connect.php';
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
								<li><a href="ebookLogado.php" class="tirarLink"><span class="btn white normal">EBOOKS</span></a></li>
								<li><a href="quem_somosLogado.php" class="tirarLink"><span class="btn black normal">QUEM SOMOS?</span></a></li>
							</ul>
						</nav>
						<ul class="tools-nav">
						
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
					</div>

					<br>

				<section class="bar">
					<div class="bar-frame">
					</div>
				</section>

				<div class="quem">
					<p>MISSÃO</p>
					<p>VISÃO</p>
					<p>VALORES</p>
					</div>

					<div class="quem2">
						<div class="missao2">
						<img class="missao_foto" src="../images/missao.png" alt="">
						</div>
						<div class="visao2">
						<img class="visao_foto" src="../images/visao.png" alt="">
						</div>
						<div class="valores2">
						<img class="valores_foto" src="../images/valores.png" alt="">
						</div>
					</div>
					<div class="quem3">
						<div class="missao">
						<p>Somos uma empresa que pretende trazer facilidade e inovação no mundo do comércio literário.</p>
						</div>
						<div class="visao">
						<p>Queremos nos tornar a empresa mais bem avaliada, mudar o comércio com nossas conquistas e propagar a importancia da leitura.</p>
						</div>
						<div class="valores">
						<p>GANES é uma empresa que prega inovação, segurança, facilidade e um bom atendimento aos consumidores.</p>
						</div>
					</div>

			</header>
		</div>	
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