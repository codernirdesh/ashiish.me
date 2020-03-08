<?php 
/**
 * The page file
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

get_header(); ?>

<!-- content area starts -->
	<section id="primary" class="content-area">
		<!-- site main starts -->
		<main id="main" class="site-main">
			<p class="page-title"><?php the_title(); ?></p>
			<?php 
				if( have_posts() ) {
					while( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content', 'page' );
					}
				} else {
					get_template_part( 'template-parts/content/content', 'none' );
				}
			?>
		</main>
		<!-- site main ends -->
	</section>
	<!-- content area ends -->

<?php
get_footer();