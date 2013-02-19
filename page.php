<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package simpless
 * @since simpless 1.0
 */

get_header(); ?>

    <section class="jumbotron jumbotron-inner">
    	<div class="container">
        	<div class="masthead">
                <h2>begins with honesty, asks tough questions, comes from collaboration and from trusting your intuition.</h2>
            </div>
        </div>
    </section>

	<div class="container">
    	<div class="row">
        	<div class="span8 offset2">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
        
                        <?php while ( have_posts() ) : the_post(); ?>
        
                            <?php get_template_part( 'content', 'page' ); ?>
        
                            <?php comments_template( '', true ); ?>
        
                        <?php endwhile; // end of the loop. ?>
        
                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->	
            </div>
        </div>
    </div>

<?php get_footer(); ?>