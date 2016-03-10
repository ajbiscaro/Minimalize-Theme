<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Minimalize
 * @since Minimalize 1.0
 */
?>

		</div><!-- end #main -->
		
		<footer id="colophon" class="site-footer" role="contentinfo">
		
			<div class="site-info">
				<p>
					<?php _e("Copyright", 'minimalize'); ?> &copy; <?php echo date(__("Y", 'minimalize')); ?>
					<span class="sep"> | </span>
					<?php _e("All Rights Reserved", 'swelllite'); ?>
					<span class="sep"> | </span>
					Minimalize
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'minimalize' ) ); ?>" target="_blank">Wordpress</a>
					<?php _e("Theme Designed & Developed by", 'minimalize'); ?>
					<a href="<?php echo esc_url( __( 'http://ajbiscaro.github.io', 'minimalize' ) ); ?>" target="_blank">Ardel John S. Biscaro</a>
				</p>
			</div><!-- end .site-info -->
			
		</footer><!-- end #colophon .site-footer -->
	
	<a href="#" class="scrollToTop"></a>
	</div><!-- .site-inner -->		
</div><!-- end #page -->
	
<?php wp_footer(); ?>

</body>
</html>