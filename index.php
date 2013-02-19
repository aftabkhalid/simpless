<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package simpless
 * @since simpless 1.0
 */

get_header(); ?>
	
    <section class="jumbotron">
    	<div class="container">
        	<div class="masthead">
            	<h1>Good design</h1>
                <h2>begins with honesty, asks tough questions, comes from collaboration and from trusting your intuition.</h2>
            </div>
            <div class="who-im">
            	<h3><a href="http://www.aftabkhalid.com/about/">Who i am?</a></h3>
            </div>
        </div>
    </section>
    
    <section class="technologies">
    	<div class="container">
        	<h4>Technologies i'm using!</h4>
            <div class="technologies-logos">
       	    	<img src="<?php bloginfo('template_directory'); ?>/images/logo-html5.png" alt="HTML5" title="HTML5" />
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-css3.png" alt="CSS3" title="CSS3" />
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-jquery.png" alt="jQuery" title="jQuery" />
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-jquery-mobile.png" alt="jQuery Mobile" title="jQuery Mobile" />
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-bootstrap.png" alt="Bootstrap" title="Bootstrap" />
            </div>
        </div>
    </section>
    
    <div class="container">
    	<div class="row">
        	<div class="span8 offset2">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
        
                    <?php if ( have_posts() ) : ?>
        
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
        
                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );
                            ?>
        
                        <?php endwhile; ?>
        
                    <?php else : ?>
        
                        <?php get_template_part( 'no-results', 'index' ); ?>
        
                    <?php endif; ?>
        
                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->	
            </div>
        </div>
    </div>
		
<?php get_footer(); ?>