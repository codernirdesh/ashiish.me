<?php 
/**
 * Front page file
 *
 * Template Name: Front Page
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

get_header(); ?>

<!-- content area starts -->
<section id="primary" class="content-area home-page-area">
	<!-- site main starts -->
	<main id="main" class="site-main">
		<p class="page-title"><?php the_title(); ?></p>
		<div class="home-page-container">
			<div class="home-page-content">
				<?php 
				if( have_posts() ) {
					while( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content', 'home' );
					}
				} else {
					get_template_part( 'template-parts/content/content', 'none' );
				}
				?>
			</div>
		</div>
	</main>
	<!-- site main ends -->
</section>
<!-- content area ends -->

<?php get_footer(); ?>
