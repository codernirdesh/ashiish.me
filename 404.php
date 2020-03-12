<?php 
/**
 * The 404 file
 *
 * @package ashiishme
 *
 * @since 1.0.1
 */

get_header(); ?>

<!-- content area starts -->
	<section id="primary" class="content-area single-post-area">
		<!-- site main starts -->
		<main id="main" class="site-main ashiishme-404">
			<h1 class="entry-title"><?php _e('Page Not Found', 'ashiishme') ?></h1>
			<div class="intro-text"><p><?php _e('The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'ashiishme') ?></p></div>
		</main>
		<!-- site main ends -->
	</section>
	<!-- content area ends -->

<?php
get_footer();