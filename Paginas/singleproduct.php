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
				<span class="logo"><a href="index.php">Elegantic</a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.php"><span>2</span> Items, <strong>$599.00</strong></a></li>
					<li class="login"><a href="login1.php">Login</a> / <a href="#">Cadastrar</a></li>
				</ul>
				<a class="menu_trigger" href="#">menu</a>
				<div class="bar-holder">
					<nav id="nav">
						<ul>
							<li><a href="products.php">Suits</a></li>
							<li><a href="products.php">Coats</a></li>
							<li><a href="products.php">Jackets</a></li>
							<li><a href="products.php">Shirts</a></li>
							<li><a href="products.php">Shoes</a></li>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Jackets</a></li>
						<li>Deserunt Mollitia</li>
					</ul>
				</div>
			</section>
			<section id="main">
				<div class="details-info">
					<div class="image">
						<img src="../images/img-item-02-big.jpg" alt="" />
					</div>
					<div class="description">
						<div class="head">
							<h1 class="title">deserunt mollitia</h1>
							<h2>$399.00</h2>
						</div>
						<div class="section">
							<form class="form-sort" action="#">
								<fieldset>
									<div class="row">
										<label for="sort">Size:</label>
										<select id="sort">
											<option>XL</option>
											<option>XXL</option>
										</select>
									</div>
									<div class="row">
										<label for="page">Quantity:</label>
										<select id="page">
											<option>1</option>
											<option>2</option>
										</select>
									</div>
									<input type="submit" value="Add to cart" class="btn black normal" />
								</fieldset>
							</form>
						</div>
						<div class="entry">
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
						</div>
					</div>
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