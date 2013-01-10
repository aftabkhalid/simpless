<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package simpless
 * @since simpless 1.0
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="container">
            <div class="row">
            	<div class="span4">
                	<div class="copyright">
                    	<a href="">Back to top</a>
                    </div>
                </div>
                <div class="span4 aligncenter">
					<?php posts_nav_link(' &nbsp;|&nbsp; ', '&larr; previous page', 'next page &rarr;'); ?>
                </div>
                <div class="span4">
                	<div class="social">
                    	<a href="#" class="s-twitter">Twitter</a>
                        <a href="#" class="s-linkedin">Linkedin</a>
                        <a href="#" class="s-behance">Behance</a>
                        <a href="#" class="s-github">GitHub</a>
                    </div>
                </div>
            </div>
        </div>        
	</footer><!-- #colophon .site-footer -->    
    
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>