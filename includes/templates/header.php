<?php 
	if(!isset($_SESSION)){
		session_start();
	}
	$auth = $_SESSION["login"] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Plantilla desarrollada para probar competencias de desarrollo web y programación orientada a objetos con PHP, se reaizo con HTML5-CSS3-JavaScript">
	<title>INNOVAHOME</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="/build/css/font-awesome.min.css">
	<link rel="stylesheet" href="/build/css/app.css">
</head>
<body id="<?php echo $inicio ? "" : "OtherPage"; ?>">
	<div class="top-user-interaction">
		<div class="contenedor top-user-interaction__contenedor">
			<div>
				<?php if(!$auth): ?>
					<a href="login.php" class="top-user-interaction__link">
						<i class="fa fa-sign-in" aria-hidden="true"></i>
						<span class="top-user-interaction__link-text">Login</span>
					</a>
					<a href="register.php" class="top-user-interaction__link">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
						<span class="top-user-interaction__link-text">Register</span>
					</a>
					<?php else: ?>
						<a href="cerrar_sesion.php" class="top-user-interaction__link">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<span class="top-user-interaction__link-text">Logout</span>
						</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<header class="Header" id="header">
		<div class="contenedor Header-contenedor">
			<a href="index.php" class="Header-logo">
				<h1>INNOVA</h1>
			</a>
			<div class="Header-call">
				<p class="Header-call__title">Call Today</p>
				<a href="phone">320-123-4371</a>
			</div>
			<nav class="Navigation" id="navigation">
				<ul class="Navigation-urden">
					<li class="Navigation-urden__list">
						<a href="<?php echo $inicio ? "#about": "index.php#about"; ?>" class="Navigation-urden__list-a">about</a>
					</li>
					<li class="Navigation-urden__list">
						<a href="<?php echo $inicio ? "#works": "index.php#works"; ?>" class="Navigation-urden__list-a">works</a>
					</li>
					<li class="Navigation-urden__list">
						<a href=<?php echo $inicio ? "#blog": "index.php#blog"; ?> class="Navigation-urden__list-a">blog</a>
					</li>
					<li class="Navigation-urden__list">
						<a href="<?php echo $inicio ? "#testimonials": "index.php#testimonials"; ?>" class="Navigation-urden__list-a">testimonials</a>
					</li>
					<li class="Navigation-urden__list">
						<a href="<?php echo $inicio ? "#contact": "index.php#contact"; ?>" class="Navigation-urden__list-a">contact</a>
					</li>
				</ul>
			</nav>
			<button class="Header-btnMobile" id="btnMobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
		</div>
	</header>