<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="alternate" href="<?php the_permalink(); ?>" hreflang="x-default">
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
<?php /*?>	<style>
		#my-menu:not( .mm-menu) {
			display: none;
		}
	</style>
	<?php

	function mytheme_customize_css() {
		?>
	<style type="text/css">
		h1 {
			color: <?php echo get_theme_mod('text_color', '#000000');
			?>;
		}
	</style>
	<?php
	}
	add_action( 'wp_head', 'mytheme_customize_css' );
	?><?php */?>
</head>


<body <?php body_class(); ?>>
    <div id="my-page" style="border: 0px solid #000;">
        <header id="header" style="" class="desktop">
            <div class="wrapper">
                <div id="site-title">
                    <a href="<?php echo get_home_url(); ?>" class="logo-header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo-main"></a>
                    <div id="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_id' => 'main-nav', 'container' => false, 'menu_id' => 'myMenu', 'menu_class' => 'menu-mobile menu' ) ); ?>
                </div>
            </div>
        </header>

<?php /*?>        <header class="mobile" id="mobile">
			<div id="my-header">
			 <a class="mburger">
        <b></b>
        <b></b>
        <b></b>
    </a>
        </header>
        <nav id="my-menu" style="border:5px solid red;">
			
            
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_id' => 'main-nav', 'container' => false, 'menu_id' => 'myMenu', 'menu_class' => 'menu-mobile' ) ); ?>
        </nav>
		</header><?php */?>
		<header  class="mobile">
		<div id="my-header">
                <a class="mburger mburger--collapse" href="#my-menu">
                    <b></b>
                    <b></b>
                    <b></b>
                    <span>Menu</span>
                </a>
			 <a href="<?php echo get_home_url(); ?>" class="logo-header"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo-main"></a>
                <nav id="my-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_id' => 'main-nav', 'container' => false, 'menu_id' => 'myMenu', 'menu_class' => 'menu-mobile' ) ); ?>
                </nav>
            </div>
