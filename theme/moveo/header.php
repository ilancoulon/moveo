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
					<a href="<?php show::siteUrl(); ?>" class="logo">
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
								<?php show::mainNavigation(); ?>
							</ul>
							<?php eval($core->callHook('endSidebar')); ?>

					<div class="pull-right" style="position: relative; bottom: 40px; right: 20px;">
					<a href="http://www.fondation-moveo.fr"><img src="theme/<?php show::theme("[id]"); ?>/images/fr.png" alt="Version française" title="Version française"></a>
					<a href="http://www.fondation-moveo.com"><img src="theme/<?php show::theme("[id]"); ?>/images/en.png" alt="English version" title="English version"></a>
					</div>
					</nav>
			</div>

	<div id="body">
		<div id="content" class="<?php show::pluginId(); ?>">
			<?php show::mainTitle(); ?>
