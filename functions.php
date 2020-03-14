<?php
/**
 * functions and definitions
 *
 * @package ashiishme
 *
 * @since 1.0.0
 */

if ( ! function_exists( 'ashiishme_setup' ) ) :

	function ashiishme_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'ashiishme' ),
				'footer' => __( 'Footer Menu', 'ashiishme' ),
				'social' => __( 'Social Links Menu', 'ashiishme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'ashiishme' ),
					'shortName' => __( 'S', 'ashiishme' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'ashiishme' ),
					'shortName' => __( 'M', 'ashiishme' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'ashiishme' ),
					'shortName' => __( 'L', 'ashiishme' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'ashiishme' ),
					'shortName' => __( 'XL', 'ashiishme' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

	}
endif;
add_action( 'after_setup_theme', 'ashiishme_setup' );

// Security
function ashiish_wp_rm_v() {
	return '';
}

add_filter('the_generator', 'ashiish_wp_rm_v');

/**
 * Enqueue scripts and styles.
 */
function ashiishme_scripts() {

	wp_enqueue_style( 'ashiishme-fontawesome-style', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2' );

	wp_enqueue_style( 'ashiishme-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1' );

	wp_enqueue_style( 'ashiishme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script ( 'ashiishme-script', get_template_directory_uri() . '/assets/js/ashiishme.js', array(), '1.0.0', true );

	wp_enqueue_style( 'ashiishme-google-fonts-oswald', '//fonts.googleapis.com/css?family=Oswald:400,700&display=swap', false );

	wp_enqueue_style( 'ashiishme-google-fonts-roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed&display=swap', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ashiishme_scripts' );

// comments

function makzine_comment_lists($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	switch( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' : ?>

		<li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
			<div class="back-link"><?php comment_author_link(); ?></div>
			<?php break;
			default : ?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<article <?php comment_class(); ?> class="comment">
					<div class="comment-body">
						<div class="comment-metadata">
							<div class="comment-author vcard">
								<?php echo get_avatar( $comment, 64 ); ?>
							</div>
							<div class="author-name"><?php comment_author(); ?></div>
							<div class="comment-meta">
								<time <?php comment_time( 'c' ); ?> class="comment-time">
									<span class="date">
										<?php comment_date(); ?>
									</span>
									<span class="time">
										<?php comment_time(); ?>
									</span>
								</time>
							</div>
						</div>
						<div class="comment-text">
							<?php comment_text(); ?>
						</div>
					</div>
					<footer class="comment-footer">
						<div class="reply"><?php 
						comment_reply_link( array_merge( $args, array( 
							'reply_text' => 'Reply', 
							'depth' => $depth,
							'max_depth' => $args['max_depth']
						) ) ); ?>
					</div>
				</footer>
			</article>
			<?php
			break;
		endswitch;
}

// Add social menu box to menu pages
function ashiishme_social_menu_box($object) {
	add_meta_box(
		'ashiishme-social-menu-box', 
		__('Social Menu'), 
		'ashiishme_social_menu_box_cb', 
		'nav-menus',
		'side',
		'default'
	);
	return $object;
}

add_filter('nav_menu_meta_box_object', 'ashiishme_social_menu_box', 10, 1);

// Social menu callback
function ashiishme_social_menu_box_cb() {
	// empty
}