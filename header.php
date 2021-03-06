<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package simpless
 * @since simpless 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
		$(document).ready(function() { 
			$(".site-title").mouseover( function(){
				$(".site-name").show({
					left: '88px',
				});
			}).mouseout(function(){
				$(".site-name").hide();
			});
		});
    </script>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
    	<?php do_action( 'before' ); ?>
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="span5" style="position:relative">
                        <hgroup>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-name">Aftab Khalid</h2>
                            <h6 class="site-description"><?php bloginfo( 'description' ); ?></h6>
                        </hgroup>
                    </div>
                    <div class="span7">
                        <nav role="navigation" class="site-navigation main-navigation">
                            <h1 class="assistive-text"><?php _e( 'Menu', 'simpless' ); ?></h1>
                            <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'simpless' ); ?>"><?php _e( 'Skip to content', 'simpless' ); ?></a></div>
                
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </nav><!-- .site-navigation .main-navigation -->
                    </div>
                </div>
            </div>   
        </header><!-- #masthead .site-header -->
