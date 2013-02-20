<?php
/**
 * The template for displaying Search Results pages.
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
                    <section id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
            
                        <?php if ( have_posts() ) : ?>
            
                            <header class="page-header">
                                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'simpless' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                            </header><!-- .page-header -->
            
                            <?php simpless_content_nav( 'nav-above' ); ?>
            
                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
            
                                <?php get_template_part( 'content', 'search' ); ?>
            
                            <?php endwhile; ?>
            
                            <?php simpless_content_nav( 'nav-below' ); ?>
            
                        <?php else : ?>
            
                            <?php get_template_part( 'no-results', 'search' ); ?>
            
                        <?php endif; ?>
            
                        </div><!-- #content .site-content -->
                    </section><!-- #primary .content-area -->
                </div>
            </div>
        </div>

<?php get_footer(); ?>