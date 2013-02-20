<?php
/**
 * The Template for displaying all single posts.
 *
 * @package simpless
 * @since simpless 1.0
 */

get_header(); ?>

    <section class="jumbotron jumbotron-inner">
    	<div class="container">
        	<div class="masthead">
                <h2>When you take technology and mix it with art, you always come up with something innovative.</h2>
            </div>
        </div>
    </section>

	<div class="container">
    	<div class="row">
        	<div class="span8 offset2">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">

						<?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'single' ); ?>
            
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template( '', true );
                            ?>
            
                        <?php endwhile; // end of the loop. ?>

                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->	
            </div>
        </div>
    </div>


<?php get_footer(); ?>