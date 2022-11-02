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
	<title>Elegantic</title>
	<link rel="stylesheet" href="../css/fancySelect.css" />
	<link rel="stylesheet" href="../css/uniform.css" />
	<link rel="stylesheet" href="../css/all.css" />
	<link rel="stylesheet" href="../css/estiloPersonal.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="../css/screen.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">

			<header id="header">
				<span ><a  href="index.php"><img class="logo-ganes"src="../images/logoganes.png" alt="ganes"></a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.php"><span>2</span> Items, <strong>$599.00</strong></a></li>
					<li class="login"><a href="login1.php">Login</a> / <a href="#">Cadastrar</a></li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="../PaginasProd/romance.php" class="tirarLink"><span class="btn white normal">Romance</span></a></li>
							<li><a href="../PaginasProd/ficcao.php" class="tirarLink"><span class="btn white normal">Ficção</span></a></li>
							<li><a href="../PaginasProd/drama.php" class="tirarLink"><span class="btn white normal">Drama</span></a></li>
							<li><a href="../PaginasProd/politica.php" class="tirarLink"><span class="btn white normal">Política</span></a></li>
							<li><a href="../PaginasProd/fantasia.php" class="tirarLink"><span class="btn white normal">Fantasia</span></a></li>
						</ul>
					</nav>
					<ul class="tools-nav">
						<li class="items"><a href="cart.php"><span>2</span> Items, <strong>$599.00</strong></a></li>
						<li class="login"><a href="login1.php">Login</a> / <a href="#">Cadastrar</a></li>
					</ul>
				</div>
			</header>

			<section class="bar">
				<div class="bar-frame">
					<ul class="breadcrumbs">
						<li><a href="index.php">Menu</a></li>
						<li>Livros</li>
					</ul>
				</div>
			</section>
			<section id="main">
				<div class="top-bar top-bar-add">
				<ul class="paging">
					<li class="prev"><a href="products copy.php">prev</a></li>
						<li><a href="products.php">1</a></li>
						<li><a href="products copy.php">2</a></li>
						<li class="active"><a href="products copy 2.php">3</a></li>
						<li><a href="products copy 3.php">4</a></li>
						<li><a href="products copy 4.php">5</a></li>
						<li class="next"><a href="products copy 3.php">next</a></li>
					</ul>
				</div>

				
				<ul class="item-list">
				<?php
                  $sq="SELECT * FROM livro
				  WHERE idLivro BETWEEN 17 AND 24;";
                  $qu=mysqli_query($con,$sq);
                  while($f=  mysqli_fetch_assoc($qu)){
              	?>

					<li>
						<div class="item">
							<div class="image">
								<img src="../<?php echo $f['capaLivro'];?>" alt="SEM IMAGEM"/>
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name"><?php echo $f['nomeLivro'];?></span>
							<span><?php echo $f['precoLivro'];?></span>
						</div>
					</li>
					<?php } ?>
					<!-- <li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-02.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">deserunt mollitias</span>
							<span>$399.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-03.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">cumque nihil impedit</span>
							<span>$299.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-04.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">maxime placeat facere</span>
							<span>$450.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-05.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">omnis dolor</span>
							<span>$200.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-06.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">sunt in culpa qui </span>
							<span>$120.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-07.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">optio cumque nihil</span>
							<span>$499.00</span>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="image">
								<img src="../images/img-item-08.jpg"  alt="" />
								<div class="hover">
									<div class="item-content">
										<a href="cart.php" class="btn white normal">Add to cart</a>
										<a href="singleproduct.php" class="btn white normal">See details</a>
									</div>
									<span class="bg"></span>
								</div>
							</div>
							<span class="name">aut reiciendis dolor</span>
							<span>$250.00</span>
						</div>
					</li> -->
				</ul>
				<div class="top-bar top-bar-add">
				<ul class="paging">
					<li class="prev"><a href="products copy.php">prev</a></li>
						<li><a href="products.php">1</a></li>
						<li><a href="products copy.php">2</a></li>
						<li class="active"><a href="products copy 2.php">3</a></li>
						<li><a href="products copy 3.php">4</a></li>
						<li><a href="products copy 4.php">5</a></li>
						<li class="next"><a href="products copy 3.php">next</a></li>
					</ul>
				</div>
			</section>
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