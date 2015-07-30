<?php defined('ROOT') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php show::siteLang(); ?>">
<head>
	<?php eval($core->callHook('frontHead')); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php show::titleTag(); ?></title>
	<base href="<?php show::siteUrl(); ?>/" />
	<link rel="icon" href="theme/<?php show::theme("[id]"); ?>/favicon.ico" />
	<?php show::linkTags(); ?>
	<?php show::scriptTags(); ?>
	<?php eval($core->callHook('endFrontHead')); ?>
</head>
<body>
	<header>
		<div class="ban">
			<a href="<?php show::siteUrl(); ?>/" class="logo">
				<img src="theme/<?php show::theme("[id]"); ?>/images/logo.png" alt="Logo Image">
			</a><br />
		</div>
	</header>
	<div class="content">
		<!-- START NAVIGATION -->
		<div id="navigation">
			<nav>
				<?php eval($core->callHook('sidebar')); ?>
				<ul>
					<li id="home" class="current first">
						<a href="<?php show::siteUrl(); ?>/"><img src="theme/<?php show::theme("[id]"); ?>/images/home.png" alt="Page d'accueil"> <span>Accueil</span></a>
					</li>
					<li id="menu_fondation" onclick="">
						<span>Fondation MOVEO</span>
						<ul class="menu_level_1">
							<li class="first">
								<a href="<?php show::siteUrl(); ?>/fondation/missions">Missions</a>
							</li>
							<li>
								<a href="<?php show::siteUrl(); ?>/fondation/organisation">Organisation</a>
							</li>
							<li class="last">
								<a href="<?php show::siteUrl(); ?>/fondation/presse">Presse</a>
							</li>
						</ul>
					</li>
					<li id="menu_projets" onclick="">
						<span>Nos projets</span>
						<ul class="menu_level_1">
							<li class="first">
								<a href="<?php show::siteUrl(); ?>/projets/realite-augmentee">Réalité augmentée</a>
							</li>
							<li>
								<a href="<?php show::siteUrl(); ?>/projets/realite-virtuelle">Réalité virtuelle</a>
							</li>
							<li class="last">
								<a href="<?php show::siteUrl(); ?>/projets/base-de-donnees">Base de données</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php show::siteUrl(); ?>/contact">Nous contacter</a>
					</li>
					<li class="don last">
						<a href="https://dons.fondationdefrance.org/netful-presentation-association/FONDATION_MOVEO/fse/index.html">Faire un don</a>
					</li>
				</ul>
				<!-- <ul>
				<?php show::mainNavigation(); ?>
			</ul> -->
			<?php eval($core->callHook('endSidebar')); ?>

			<div class="pull-right" style="position: relative; bottom: 40px; right: 20px;">
				<a href="http://www.fondation-moveo.fr"><img src="theme/<?php show::theme("[id]"); ?>/images/fr.png" alt="Version française" title="Version française"></a>
				<a href="http://www.fondation-moveo.com"><img src="theme/<?php show::theme("[id]"); ?>/images/en.png" alt="English version" title="English version"></a>
			</div>
		</nav>
	</div>

	<div id="body">
		<div id="content" class="<?php show::pluginId(); ?>">
			<div class="wrap">
