<?php 
/**
 * The content single file
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
	<div class="single-post-container">
		<div class="single-blog-post">
			<header class="single-entry-header single-title">
				<?php  the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>
			<div class="single-entry-meta my-3">
				<time class="single-entry-date" datetime="<?php the_date(); ?>">
					<span><?php echo get_the_time('d F, Y'); ?></span>
				</time>
			</div>
			<div class="content single-entry-content">
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
</article>