<?php 
/**
 * Header Brand
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */
?>
<div class="site-branding">
	<?php if( has_custom_logo() ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
		<?php else: ?>
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if( ! empty( $blog_info ) ) : ?>
				<?php if( is_front_page() || is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></h1>
				<?php else: ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></p>
				<?php endif; ?>
			<?php endif; ?>
			<?php 
			$description = get_bloginfo( 'description', 'display' );
			if( $description || is_customize_preview() ) :
				?>
				<p class="site-description"> <?php echo $description; ?> </p>
			<?php endif; ?>
		<?php endif; ?>
		<?php if( has_nav_menu( 'primary' ) ) : ?>
			<!-- site navigation starts -->
			<nav id="site-navigation" class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'ashiishme' ); ?>">
				<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'	=> 'main-menu',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
					)
				);
				?>
			</nav>
			<!-- site navigation ends -->
		<?php endif; ?>
		
		<!-- social menu starts -->
		<?php if(has_nav_menu( 'social' ) ) : ?>
		<div class="site-social-menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_class' 	 => 'ashiishme-social-list',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
			?>
		</div>
		<?php endif; ?>
		<!-- social menu ends -->
	</div>