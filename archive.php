<?php 
/**
 * Archive
 *
 * @package ashiishme
 *
 * @since 1.0.1
 */

get_header();
?>
	<!-- content area starts -->
	<section id="primary" class="content-area">
		<!-- site main starts -->
		<main id="main" class="site-main">
			<!-- page title starts -->
			<p class="page-title"><?php single_post_title(); ?></p>
			<!-- page title ends -->
			<?php 
				if( have_posts() ) {
					while( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content' );
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