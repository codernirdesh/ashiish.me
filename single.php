<?php 
/**
 * The single file
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

get_header();
?>
<!-- content area starts -->
<section id="primary" class="content-area single-post-area">
	<!-- site main starts -->
	<main id="main" class="site-main">
		<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );
				if(comments_open()):
					comments_template();
				endif;
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