<?php 
/**
 * The content file
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?>>
	<div class="post-container">
		<div class="blog-post">
			<div class="post-wrap row">
				<div class="entry-meta col-md-2">
					<time class="entry-date" datetime="<?php the_date(); ?>">
						<p class="entry-day"><?php echo get_the_time('d'); ?></p>
						<p class="entry-month"><?php echo get_the_time('F, Y'); ?></p>
					</time>
				</div>
				<header class="entry-header archive-title col-md-10 my-auto">
					<?php  
					if( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else : 
						the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					endif;
					?>
				</header>
			</div>
		</div>
	</div>
	<!-- <div class="content entry-content">
		<?php //the_content(); ?>
	</div> -->
</article>