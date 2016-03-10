<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Minimalize
 * @since Minimalize 1.0
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title() ?></h1>
						<span class="posted-on">Posted on <?php the_date( get_option( 'date_format' ) ); ?></span>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
				
				<?php comments_template( '', true ); ?>
				<div class="pagination">
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!-- end .pagination-->

			<?php endwhile; ?>
			
		</div><!-- end #content .site-content -->
	</div><!-- end #primary .content-area -->
	
<?php get_sidebar(); ?>	
<?php get_footer(); ?>