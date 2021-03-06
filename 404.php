<?php
/**
 * The template for displaying 404 pages (Not Found).
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
            
                        <article id="post-0" class="post error404 not-found">
                            <header class="entry-header">
                                <h2 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simpless' ); ?></h2>
                            </header><!-- .entry-header -->
            
                            <div class="entry-content">
                                <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'simpless' ); ?></p>
            
                                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
            
                                <div class="widget">
                                    <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'simpless' ); ?></h2>
                                    <ul>
                                    <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                                    </ul>
                                </div><!-- .widget -->
            
                                <?php
                                /* translators: %1$s: smilie */
                                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'simpless' ), convert_smilies( ':)' ) ) . '</p>';
                                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                                ?>
            
                                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
            
                            </div><!-- .entry-content -->
                        </article><!-- #post-0 .post .error404 .not-found -->
            
                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->
			</div>
        </div>
    </div>

<?php get_footer(); ?>