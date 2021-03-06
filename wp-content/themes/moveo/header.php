<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div>
    <header>
		<div class="ban">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Image">
			</a><br />
		</div>
	</header>
    <div id="navigation">
        <nav>
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order') ); ?>
            <!--<div class="pull-right" style="position: relative; bottom: 40px; right: 20px;">
                <a href="http://www.fondation-moveo.fr">
                    <img title="Version française" alt="Version française" src="<?php echo get_template_directory_uri(); ?>/img/fr.png"></img>
                </a>
                <a href="http://www.fondation-moveo.com">
                    <img title="English version" alt="English version" src="<?php echo get_template_directory_uri(); ?>/img/en.png"></img>
                </a>
            </div>-->
        </nav>
    </div>
