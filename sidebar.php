<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package simpless
 * @since simpless 1.0
 */
?>
		<div class="container">
        	<hr />
        	<div class="row">
            	<div id="secondary" class="widget-area" role="complementary">
	            	<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                    	
                        <div class="span4">        
                            <aside id="search" class="widget widget_search">
                                <?php get_search_form(); ?>
                            </aside>
                        </div>
                        
						<div class="span4">
                            <aside id="archives" class="widget">
                                <h1 class="widget-title"><?php _e( 'Archives', 'simpless' ); ?></h1>
                                <ul>
                                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                </ul>
                            </aside>
                        </div>

						<div class="span4">
                            <aside id="meta" class="widget">
                                <h1 class="widget-title"><?php _e( 'Meta', 'simpless' ); ?></h1>
                                <ul>
                                    <?php wp_register(); ?>
                                    <li><?php wp_loginout(); ?></li>
                                    <?php wp_meta(); ?>
                                </ul>
                            </aside>
                        </div>
        
                    <?php endif; // end sidebar widget area ?>
                </div>
            </div>
        </div>
