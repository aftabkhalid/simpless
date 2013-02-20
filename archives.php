<?php
/**
 * Template Name: Archives Template
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
                <h2>When you take technology and mix it with art, you always come up with something innovative.</h2>
            </div>
        </div>
    </section>

	<div class="container" role="archives">
    	<div class="row">
        	<div class="span12">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
        
						<?php
                            if ( is_page('15') ) {
                              $cat = array(3);
                            } elseif ( is_page('20') ) {
                              $cat = array(4);
                            } elseif ( is_page('32') ) {
                              $cat = array(5, 7);
                            } else {
                              $cat = '';
                            }
                             
                            $args = array(
                              'category__in'     => $cat,
                              'caller_get_posts' => 1
                            );
                             
                            if ( $paged > 1 ) {
                              $args['paged'] = $paged;
                            }						 
                        $my_query = new WP_Query($args); ?>
                        
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="post" id="post-<?php the_ID(); ?>">
                            <h2><?php the_title(); ?></h2>
                            <hr />
                              <div class="entry">
                                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                             
                                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                             
                              </div>
                            </div>
                        <?php endwhile; endif; ?>                        
                        
                        
                        <?php if ( $my_query->have_posts() ) : ?>
                          <?php while ( $my_query->have_posts() ) :  $my_query->the_post(); ?>
                          
                            <?php
                                //necessary to show the tags 
                                global $wp_query;
                                $wp_query->in_the_loop = true;
                            ?>
                            
                            <article class="archive-post">
                            	<header class="span4 entry-header">
                                	<h3 class="entry-title">
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta">
										<?php simpless_posted_on(); ?>
                                    </div>
                                </header>
                                <div class="span8">
                                    <div class="entry-content">
										<?php $shortex = substr(get_the_excerpt(), 0, 200);echo $shortex; echo "\r\n"; ?>
                                    </div><!-- .entry-content -->	
                                </div>
                            </article>
                         
                        <?php endwhile; ?>
                                                
                          
						<?php else : ?>
                         
                          <h2 class="center">Not Found</h2>
                          <p class="center">Sorry, but you are looking for something that isn't here.</p>
                          <?php get_search_form(); ?>
                         
                        <?php endif; ?>

                    </div><!-- #content .site-content -->
                </div><!-- #primary .content-area -->	
            </div>
        </div>
    </div>
    
    <div class="container">
		<div class="row">
        	<div class="span3">
            	<h2>Search</h2>
            </div>
        	<div class="span9 search">
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" value="" placeholder="Search" name="s" id="s" class="input-block-level" />
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php get_footer(); ?>