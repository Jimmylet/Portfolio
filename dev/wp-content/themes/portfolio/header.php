<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title();?> - Jimmy Letecheur</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css';?>">
</head>

<body>
	<div class="site-container">
		<div class="site-pusher">
			<header class="header">
				<h1 class="header__title" aria-level="1">Portfolio de Jimmy Letecheur</h1>
				<input type="checkbox" class="header__icon" id="header__icon">
				<label for="header__icon" class="header__icon__label">Menu</label>
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<span class="visuallyhidden">Retour à l'accueil</span>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio_logo.png';?>" alt="Logo du site Jimmy Letecheur" title="Retour à l'accueil" width="50" height="45">
					<svg width="43" height="20" viewBox="0 0 43 20" xmlns="http://www.w3.org/2000/svg">
						<g fill="none">
							<path d="M1 20c.5.5 9-4 10-4.5s30.5.5 31 0 .5-13.5 0-14.5-34.5-1-35.504 0c-1.004 1-5.996 18.5-5.496 19z" fill="#D8D8D8" />
							<text font-family="Bariol-Regular, Bariol" font-size="10" letter-spacing=".276" fill="#27384A" transform="translate(-84 -7) translate(84 7)">
								<tspan x="8.191" y="10.88">Accueil</tspan>
							</text>
						</g>
					</svg>
				</a>
				<nav class="menu">
					<h2 class="menu__title" aria-level="2">Menu de navigation</h2>
					<?php
						global $post;
						$thePostID = $post->ID;
					?>

					<?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
	            <a href="<?php echo $navItem->url;?>" class="menu__item <?php echo $thePostID == $navItem->id ? "active" : "" ;?>  "><?php echo $navItem->label;?></a>
					<?php endforeach; ?>
				</nav>
			</header>
			<div class="site-content">
				<div class="container">
					<main>
