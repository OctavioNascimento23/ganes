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
				<span ><a  href="index.php"><img class="logo-ganes"src="../images/logoganes.png" alt="ganes"></a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.php"><span>2</span> Items, <strong>$599.00</strong></a></li>
					<li class="login"><a href="#">Login</a> / <a href="#">Cadastrar</a></li>
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
						<li class="login"><a href="#">Login</a> / <a href="#">Cadastrar</a></li>
					</ul>
				</div>
			</header>
			<section class="bar">
				<div class="bar-frame">
					<ul class="breadcrumbs">
						<li><a href="index.php">Menu</a></li>
						<li>Carrinho</li>
					</ul>
				</div>
			</section>
			<section id="main">
				<ul class="list-table">
					<li>
						<div class="rows rows-item">
							<img src="../images/img-item-02-small.jpg" height="99" width="99" alt="" />
							<h3>deserunt mollitia</h3>
						</div>
						<div class="rows-holder">
							<div class="rows rows-select">
								<div class="row">
									<label for="size">Size:</label>
									<select id="size">
										<option>XL</option>
										<option>XXL</option>
									</select>
								</div>
							</div>
							<div class="rows rows-select">
								<div class="row">
									<label for="quantity">Quantity:</label>
									<select id="quantity">
										<option>1</option>
										<option>2</option>
									</select>
								</div>
							</div>
							<div class="rows rows-price">
								<span>$399.00</span>
							</div>
							<div class="rows rows-delete">
								<a class="btn-delete" href="#"></a>
		
							</div>
						</div>
					</li>
					<li>
						<div class="rows rows-item">
							<img src="../images/img-item-05-small.jpg" height="99" width="99" alt="" />
							<h3>labore et dolore</h3>
						</div>
						<div class="rows-holder">
							<div class="rows rows-select">
								<div class="row">
									<label for="sort">Size:</label>
									<select id="sort">
										<option>XL</option>
										<option>XXL</option>
										<option>XXXL</option>
									</select>
								</div>
							</div>
							<div class="rows rows-select">
								<div class="row">
									<label for="quantity-2">Quantity:</label>
									<select id="quantity-2">
										<option>1</option>
										<option>2</option>
									</select>
								</div>
							</div>
							<div class="rows rows-price">
								<span>$399.00</span>
							</div>
							<div class="rows rows-delete">
								<a class="btn-delete" href="#">delete</a>
							</div>
						</div>
					</li>
				</ul>
				<form action="#" class="form-payment">
					<fieldset>
						<div class="column">
							<h2>Endereço de Entrega:</h2>
							<div class="row">
								<label for="name">Nome:</label>
								<input type="text" id="name" placeholder="Patrick Biggins" />
							</div>
							<div class="row">
								<label for="street">Endereço</label>
								<input type="text" id="street" placeholder="Winkle" />
							</div>
							<div class="row">
								<label for="city">Cidade:</label>
								<input type="text" id="city" placeholder="Detroit" />
							</div>
							<div class="row">
								<label for="phone">Celular:</label>
								<input type="text" id="phone" placeholder="(46) 527 526 763" />
							</div>
							<div class="row">
								<label for="email">email:</label>
								<input type="text" id="email" placeholder="Patrick_biggie@hotmail.com" />
							</div>
						</div>
						<div class="column column-add">
							<h2>Método de Pagamento:</h2>
							<ul class="pay-list">
								<li class="paypal">
									<div class="pay-holder">
										<p>Paypal</p>
									</div>
									 <input type="radio" name="pay" value="paypal" />
								</li>
								<li class="mastercard">
									<div class="pay-holder">
										<p>MasterCard</p>
									</div>
									<input type="radio" name="pay" value="mastercard" />
								</li>
								<li class="visa">
									<div class="pay-holder">
										<p>MasterCard</p>
									</div>
									<input type="radio" name="pay" value="visa" />
								</li>
								<li class="express">
									<div class="pay-holder">
										<p>American Express</p>
									</div>
									<input type="radio" name="pay" value="american express" />
								</li>
								<li class="discover">
									<div class="pay-holder">
										<p>Discover</p>
									</div>
									<input type="radio" name="pay" value="discover" />
								</li>
							</ul>
							<div class="row row-total">
								<h4 class="total">Total: <strong>$599.00</strong></h4>
								<input type="submit" class="btn black normal"  value="Make a payment" />
							</div>
						</div>
					</fieldset>
				</form>
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