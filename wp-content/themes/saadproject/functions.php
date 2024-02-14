<?php

/**
 * Include Theme Customizer.
 *
 * @since v1.0
 */
$theme_customizer = __DIR__ . '/inc/customizer.php';
if (is_readable($theme_customizer)) {
	require_once $theme_customizer;
}

if (!function_exists('saadproject_setup_theme')) {
	/**
	 * General Theme Settings.
	 *
	 * @since v1.0
	 *
	 * @return void
	 */
	function saadproject_setup_theme()
	{
		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain('saadproject', __DIR__ . '/languages');

		/**
		 * Set the content width based on the theme's design and stylesheet.
		 *
		 * @since v1.0
		 */
		global $content_width;
		if (!isset($content_width)) {
			$content_width = 800;
		}

		// Theme Support.
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');
		// Add support for full and wide alignment.
		add_theme_support('align-wide');
		// Add support for Editor Styles.
		add_theme_support('editor-styles');
		// Enqueue Editor Styles.
		add_editor_style('style-editor.css');

		// Default attachment display settings.
		update_option('image_default_align', 'none');
		update_option('image_default_link_type', 'none');
		update_option('image_default_size', 'large');

		// Custom CSS styles of WorPress gallery.
		add_filter('use_default_gallery_style', '__return_false');
	}
	add_action('after_setup_theme', 'saadproject_setup_theme');

	// Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
	remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');
	remove_action('enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory');
}

if (!function_exists('wp_body_open')) {
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
	 *
	 * @since v2.2
	 *
	 * @return void
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
}

if (!function_exists('saadproject_add_user_fields')) {
	/**
	 * Add new User fields to Userprofile:
	 * get_user_meta( $user->ID, 'facebook_profile', true );
	 *
	 * @since v1.0
	 *
	 * @param array $fields User fields.
	 *
	 * @return array
	 */
	function saadproject_add_user_fields($fields)
	{
		// Add new fields.
		$fields['facebook_profile'] = 'Facebook URL';
		$fields['twitter_profile'] = 'Twitter URL';
		$fields['linkedin_profile'] = 'LinkedIn URL';
		$fields['xing_profile'] = 'Xing URL';
		$fields['github_profile'] = 'GitHub URL';

		return $fields;
	}
	add_filter('user_contactmethods', 'saadproject_add_user_fields');
}

/**
 * Test if a page is a blog page.
 * if ( is_blog() ) { ... }
 *
 * @since v1.0
 *
 * @return bool
 */
function is_blog()
{
	global $post;
	$posttype = get_post_type($post);

	return ((is_archive() || is_author() || is_category() || is_home() || is_single() || (is_tag() && ('post' === $posttype))) ? true : false);
}

/**
 * Disable comments for Media (Image-Post, Jetpack-Carousel, etc.)
 *
 * @since v1.0
 *
 * @param bool $open    Comments open/closed.
 * @param int  $post_id Post ID.
 *
 * @return bool
 */
function saadproject_filter_media_comment_status($open, $post_id = null)
{
	$media_post = get_post($post_id);

	if ('attachment' === $media_post->post_type) {
		return false;
	}

	return $open;
}
add_filter('comments_open', 'saadproject_filter_media_comment_status', 10, 2);

/**
 * Style Edit buttons as badges: https://getbootstrap.com/docs/5.0/components/badge
 *
 * @since v1.0
 *
 * @param string $link Post Edit Link.
 *
 * @return string
 */
function saadproject_custom_edit_post_link($link)
{
	return str_replace('class="post-edit-link"', 'class="post-edit-link badge bg-secondary"', $link);
}
add_filter('edit_post_link', 'saadproject_custom_edit_post_link');

/**
 * Style Edit buttons as badges: https://getbootstrap.com/docs/5.0/components/badge
 *
 * @since v1.0
 *
 * @param string $link Comment Edit Link.
 */
function saadproject_custom_edit_comment_link($link)
{
	return str_replace('class="comment-edit-link"', 'class="comment-edit-link badge bg-secondary"', $link);
}
add_filter('edit_comment_link', 'saadproject_custom_edit_comment_link');

/**
 * Responsive oEmbed filter: https://getbootstrap.com/docs/5.0/helpers/ratio
 *
 * @since v1.0
 *
 * @param string $html Inner HTML.
 *
 * @return string
 */
function saadproject_oembed_filter($html)
{
	return '<div class="ratio ratio-16x9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'saadproject_oembed_filter', 10);

if (!function_exists('saadproject_content_nav')) {
	/**
	 * Display a navigation to next/previous pages when applicable.
	 *
	 * @since v1.0
	 *
	 * @param string $nav_id Navigation ID.
	 */
	function saadproject_content_nav($nav_id)
	{
		global $wp_query;

		if ($wp_query->max_num_pages > 1) {
			?>
			<div id="<?php echo esc_attr($nav_id); ?>" class="d-flex mb-4 justify-content-between">
				<div>
					<?php next_posts_link('<span aria-hidden="true">&larr;</span> ' . esc_html__('Older posts', 'saadproject')); ?>
				</div>
				<div>
					<?php previous_posts_link(esc_html__('Newer posts', 'saadproject') . ' <span aria-hidden="true">&rarr;</span>'); ?>
				</div>
			</div><!-- /.d-flex -->
			<?php
		} else {
			echo '<div class="clearfix"></div>';
		}
	}

	/**
	 * Add Class.
	 *
	 * @since v1.0
	 *
	 * @return string
	 */
	function posts_link_attributes()
	{
		return 'class="btn btn-secondary btn-lg"';
	}
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');
}

/**
 * Init Widget areas in Sidebar.
 *
 * @since v1.0
 *
 * @return void
 */
function saadproject_widgets_init()
{
	// Area 1.
	register_sidebar(
		array(
			'name' => 'Primary Widget Area (Sidebar)',
			'id' => 'primary_widget_area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	// Area 2.
	register_sidebar(
		array(
			'name' => 'Secondary Widget Area (Header Navigation)',
			'id' => 'secondary_widget_area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	// Area 3.
	register_sidebar(
		array(
			'name' => 'Third Widget Area (Footer)',
			'id' => 'third_widget_area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}
add_action('widgets_init', 'saadproject_widgets_init');

if (!function_exists('saadproject_article_posted_on')) {
	/**
	 * "Theme posted on" pattern.
	 *
	 * @since v1.0
	 */
	function saadproject_article_posted_on()
	{
		printf(
			wp_kses_post(__('<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author-meta vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'saadproject')),
			esc_url(get_the_permalink()),
			esc_attr(get_the_date() . ' - ' . get_the_time()),
			esc_attr(get_the_date('c')),
			esc_html(get_the_date() . ' - ' . get_the_time()),
			esc_url(get_author_posts_url((int) get_the_author_meta('ID'))),
			sprintf(esc_attr__('View all posts by %s', 'saadproject'), get_the_author()),
			get_the_author()
		);
	}
}

/**
 * Template for Password protected post form.
 *
 * @since v1.0
 *
 * @return string
 */
function saadproject_password_form()
{
	global $post;
	$label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);

	$output = '<div class="row">';
	$output .= '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">';
	$output .= '<h4 class="col-md-12 alert alert-warning">' . esc_html__('This content is password protected. To view it please enter your password below.', 'saadproject') . '</h4>';
	$output .= '<div class="col-md-6">';
	$output .= '<div class="input-group">';
	$output .= '<input type="password" name="post_password" id="' . esc_attr($label) . '" placeholder="' . esc_attr__('Password', 'saadproject') . '" class="form-control" />';
	$output .= '<div class="input-group-append"><input type="submit" name="submit" class="btn btn-primary" value="' . esc_attr__('Submit', 'saadproject') . '" /></div>';
	$output .= '</div><!-- /.input-group -->';
	$output .= '</div><!-- /.col -->';
	$output .= '</form>';
	$output .= '</div><!-- /.row -->';

	return $output;
}
add_filter('the_password_form', 'saadproject_password_form');


if (!function_exists('saadproject_comment')) {
	/**
	 * Style Reply link.
	 *
	 * @since v1.0
	 *
	 * @param string $class Link class.
	 *
	 * @return string
	 */
	function saadproject_replace_reply_link_class($class)
	{
		return str_replace("class='comment-reply-link", "class='comment-reply-link btn btn-outline-secondary", $class);
	}
	add_filter('comment_reply_link', 'saadproject_replace_reply_link_class');

	/**
	 * Template for comments and pingbacks:
	 * add function to comments.php ... wp_list_comments( array( 'callback' => 'saadproject_comment' ) );
	 *
	 * @since v1.0
	 *
	 * @param object $comment Comment object.
	 * @param array  $args    Comment args.
	 * @param int    $depth   Comment depth.
	 */
	function saadproject_comment($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		switch ($comment->comment_type):
			case 'pingback':
			case 'trackback':
				?>
				<li class="post pingback">
					<p>
						<?php
						esc_html_e('Pingback:', 'saadproject');
						comment_author_link();
						edit_comment_link(esc_html__('Edit', 'saadproject'), '<span class="edit-link">', '</span>');
						?>
					</p>
					<?php
					break;
			default:
				?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<article id="comment-<?php comment_ID(); ?>" class="comment">
						<footer class="comment-meta">
							<div class="comment-author vcard">
								<?php
								$avatar_size = ('0' !== $comment->comment_parent ? 68 : 136);
								echo get_avatar($comment, $avatar_size);

								/* Translators: 1: Comment author, 2: Date and time */
								printf(
									wp_kses_post(__('%1$s, %2$s', 'saadproject')),
									sprintf('<span class="fn">%s</span>', get_comment_author_link()),
									sprintf(
										'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
										esc_url(get_comment_link($comment->comment_ID)),
										get_comment_time('c'),
										/* Translators: 1: Date, 2: Time */
										sprintf(esc_html__('%1$s ago', 'saadproject'), human_time_diff((int) get_comment_time('U'), current_time('timestamp')))
									)
								);

								edit_comment_link(esc_html__('Edit', 'saadproject'), '<span class="edit-link">', '</span>');
								?>
							</div><!-- .comment-author .vcard -->

							<?php if ('0' === $comment->comment_approved) { ?>
								<em class="comment-awaiting-moderation">
									<?php esc_html_e('Your comment is awaiting moderation.', 'saadproject'); ?>
								</em>
								<br />
							<?php } ?>
						</footer>

						<div class="comment-content">
							<?php comment_text(); ?>
						</div>

						<div class="reply">
							<?php
							comment_reply_link(
								array_merge(
									$args,
									array(
										'reply_text' => esc_html__('Reply', 'saadproject') . ' <span>&darr;</span>',
										'depth' => $depth,
										'max_depth' => $args['max_depth'],
									)
								)
							);
							?>
						</div><!-- /.reply -->
					</article><!-- /#comment-## -->
					<?php
					break;
		endswitch;
	}

	/**
	 * Custom Comment form.
	 *
	 * @since v1.0
	 * @since v1.1: Added 'submit_button' and 'submit_field'
	 * @since v2.0.2: Added '$consent' and 'cookies'
	 *
	 * @param array $args    Form args.
	 * @param int   $post_id Post ID.
	 *
	 * @return array
	 */
	function saadproject_custom_commentform($args = array(), $post_id = null)
	{
		if (null === $post_id) {
			$post_id = get_the_ID();
		}

		$commenter = wp_get_current_commenter();
		$user = wp_get_current_user();
		$user_identity = $user->exists() ? $user->display_name : '';

		$args = wp_parse_args($args);

		$req = get_option('require_name_email');
		$aria_req = ($req ? " aria-required='true' required" : '');
		$consent = (empty($commenter['comment_author_email']) ? '' : ' checked="checked"');
		$fields = array(
			'author' => '<div class="form-floating mb-3">
							<input type="text" id="author" name="author" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" placeholder="' . esc_html__('Name', 'saadproject') . ($req ? '*' : '') . '"' . $aria_req . ' />
							<label for="author">' . esc_html__('Name', 'saadproject') . ($req ? '*' : '') . '</label>
						</div>',
			'email' => '<div class="form-floating mb-3">
							<input type="email" id="email" name="email" class="form-control" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="' . esc_html__('Email', 'saadproject') . ($req ? '*' : '') . '"' . $aria_req . ' />
							<label for="email">' . esc_html__('Email', 'saadproject') . ($req ? '*' : '') . '</label>
						</div>',
			'url' => '',
			'cookies' => '<p class="form-check mb-3 comment-form-cookies-consent">
							<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" class="form-check-input" type="checkbox" value="yes"' . $consent . ' />
							<label class="form-check-label" for="wp-comment-cookies-consent">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'saadproject') . '</label>
						</p>',
		);

		$defaults = array(
			'fields' => apply_filters('comment_form_default_fields', $fields),
			'comment_field' => '<div class="form-floating mb-3">
											<textarea id="comment" name="comment" class="form-control" aria-required="true" required placeholder="' . esc_attr__('Comment', 'saadproject') . ($req ? '*' : '') . '"></textarea>
											<label for="comment">' . esc_html__('Comment', 'saadproject') . '</label>
										</div>',
			/** This filter is documented in wp-includes/link-template.php */
			'must_log_in' => '<p class="must-log-in">' . sprintf(wp_kses_post(__('You must be <a href="%s">logged in</a> to post a comment.', 'saadproject')), wp_login_url(esc_url(get_the_permalink(get_the_ID())))) . '</p>',
			/** This filter is documented in wp-includes/link-template.php */
			'logged_in_as' => '<p class="logged-in-as">' . sprintf(wp_kses_post(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'saadproject')), get_edit_user_link(), $user->display_name, wp_logout_url(apply_filters('the_permalink', esc_url(get_the_permalink(get_the_ID()))))) . '</p>',
			'comment_notes_before' => '<p class="small comment-notes">' . esc_html__('Your Email address will not be published.', 'saadproject') . '</p>',
			'comment_notes_after' => '',
			'id_form' => 'commentform',
			'id_submit' => 'submit',
			'class_submit' => 'btn btn-primary',
			'name_submit' => 'submit',
			'title_reply' => '',
			'title_reply_to' => esc_html__('Leave a Reply to %s', 'saadproject'),
			'cancel_reply_link' => esc_html__('Cancel reply', 'saadproject'),
			'label_submit' => esc_html__('Post Comment', 'saadproject'),
			'submit_button' => '<input type="submit" id="%2$s" name="%1$s" class="%3$s" value="%4$s" />',
			'submit_field' => '<div class="form-submit">%1$s %2$s</div>',
			'format' => 'html5',
		);

		return $defaults;
	}
	add_filter('comment_form_defaults', 'saadproject_custom_commentform');
}

if (function_exists('register_nav_menus')) {
	/**
	 * Nav menus.
	 *
	 * @since v1.0
	 *
	 * @return void
	 */
	register_nav_menus(
		array(
			'main-menu' => 'Main Navigation Menu',
			'footer-menu' => 'Footer Menu',
			'center-menu' => 'Center Menu',
		)
	);
}

// Custom Nav Walker: wp_bootstrap_navwalker().
$custom_walker = __DIR__ . '/inc/wp-bootstrap-navwalker.php';
if (is_readable($custom_walker)) {
	require_once $custom_walker;
}

$custom_walker_footer = __DIR__ . '/inc/wp-bootstrap-navwalker-footer.php';
if (is_readable($custom_walker_footer)) {
	require_once $custom_walker_footer;
}

/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 *
 * @return void
 */
function saadproject_scripts_loader()
{
	$theme_version = wp_get_theme()->get('Version');

	// 1. Styles.
	wp_enqueue_style('style', get_theme_file_uri('style.css'), array(), $theme_version, 'all');
	wp_enqueue_style('MyStyle', get_theme_file_uri('MyStyle.css'), array(), $theme_version, 'all');
	wp_enqueue_style('StyleHeader', get_theme_file_uri('/custom/css/StyleHeader.css'), array(), $theme_version, 'all');
	wp_enqueue_style('StyleHome', get_theme_file_uri('/custom/css/StyleHome.css'), array(), $theme_version, 'all');

	wp_enqueue_style('main', get_theme_file_uri('build/main.css'), array(), $theme_version, 'all'); // main.scss: Compiled Framework source + custom styles.

	if (is_rtl()) {
		wp_enqueue_style('rtl', get_theme_file_uri('build/rtl.css'), array(), $theme_version, 'all');
	}

	// 2. Scripts.
	wp_enqueue_script('mainjs', get_theme_file_uri('build/main.js'), array(), $theme_version, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('Swiper123', get_theme_file_uri('/custom/js/Swiper123.js'), array(), $theme_version, true);
	// wp_enqueue_script( 'MA_jvm.js', get_theme_file_uri( '/custom/js/MA_jvm.js' ), array('jquery'), $theme_version, true );
	// wp_enqueue_script( 'jquery-min', get_theme_file_uri( '/custom/js/jquery.min.js' ), array(), $theme_version, true );
	// wp_enqueue_script( 'jquery-jvectormap', get_theme_file_uri( '/custom/js/jquery-jvectormap-2.0.5.min.js' ), array(), $theme_version, true );


}

add_action('wp_enqueue_scripts', 'saadproject_scripts_loader');




add_action('wp_ajax_ajax_search', 'ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');

function ajax_search()
{

	$searchValue = $_POST['search_value'];
	$categorie = $_POST['category'];

	$args = array(
		'post_type' => 'my_products',
		's' => $searchValue,
		'tax_query' => array(
			array(
				'taxonomy' => 'categorie',
				'field' => 'slug',
				'terms' => $categorie,
			),
		),
	);
	if (!empty($searchValue)) {
		$args['s'] = $searchValue;
	}
	$query = new WP_Query($args);
	if ($query->have_posts()) {
		while ($query->have_posts()):
			$query->the_post();
			$post_id = get_the_ID();
			$image_product = get_field('image_product');
			$name_product = get_field('name_product');
			$description_product = get_field('description_product');
			// Your HTML structure here
			?>
				<div class="col-xl-3  col-sm-6 col-11 h-100 new_products_cards">
					<div class="position-relative content_text_card_products" style="max-width: 22rem;">
						<img class="img_product_cards" src="<?php echo esc_url($image_product); ?>"
							alt="<?php echo esc_attr($name_product); ?>">
						<div class="content_text_card_products text-center">
							<h5 class=" title_products_cards">
								<?php echo $name_product ?>
							</h5>
							<p class=" paragraph_products_cards">
								<?php echo $description_product ?>
							</p>
							<div>
								<a class="En_savoir_plus"
									href="/details?post_id=<?php echo $post_id; ?>&category=<?php echo $categorie; ?>">En savoir
									plus
									<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
										<path
											d="M14.2466 4.35331C14.4418 4.15805 14.4418 3.84146 14.2466 3.6462L11.0646 0.464221C10.8693 0.268959 10.5527 0.268959 10.3575 0.464221C10.1622 0.659484 10.1622 0.976066 10.3575 1.17133L13.1859 3.99975L10.3575 6.82818C10.1622 7.02344 10.1622 7.34003 10.3575 7.53529C10.5527 7.73055 10.8693 7.73055 11.0646 7.53529L14.2466 4.35331ZM0.893005 4.49976L13.893 4.49975L13.893 3.49975L0.893005 3.49976L0.893005 4.49976Z"
											fill="black" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php

		endwhile;
	} else {
		?>
			<script>
				var myToast = Toastify({
					text: `Not Found Products`,
					duration: 3000,
					position: "center", // Change this to "top" for top position
					style: {
						background: "#e74c3c",
					},
					offset: {
						y: 10, // Center horizontally
						x: window.innerHeight - 100 // Adjust as needed for vertical position
					}
				});
				myToast.showToast();
			</script>
			<?php
	}
	wp_die();
}

add_action('wp_ajax_get_child_categories', 'get_child_categories');
add_action('wp_ajax_nopriv_get_child_categories', 'get_child_categories');

function get_child_categories()
{
	$parentCategoryId = $_POST['parent_category_id'];
	$args = array(
		'post_type' => 'my_products',
		'taxonomy' => 'categorie',
		'hide_empty' => 0,
		'parent' => $parentCategoryId
	);
	$child_categories = get_categories($args);
	foreach ($child_categories as $child_category) {
		// echo '<option value="' . $child_category->name . '">' . $child_category->name . '</option>';
		?>
			<div class="accordion-item  <?php if ($index >= 4)
				echo 'extra-faq'; ?>">
				<div id="Type_produit" class="accordion-collapse collapse" aria-labelledby="flush-heading"
					data-bs-parent="#accordionFlushExample">
					<div class="accordion-body Type_produit" value="<?php echo $child_category->name; ?>">
						<?php echo $child_category->name ?>
					</div>
					<div class='line_in_parent_categorie'></div>

				</div>
			</div>
			<?php
			$index++;
	}
	wp_die();
}



add_action('wp_ajax_fetch_products', 'fetch_products');
add_action('wp_ajax_nopriv_fetch_products', 'fetch_products');


function fetch_products()
{

	$categorie = $_POST['category'];
	$parentCategoryName = $_POST['parentCategoryName'];
	$categoryLowercase = $_POST['categoryLowercase'];
	$paged = isset($_POST['page']) ? intval($_POST['page']) : 1; // Get the current page number from POST data

	var_dump($categorie);
	$args = array(
		'post_type' => 'my_products',
		'posts_per_page' => 4,
		'paged' => $paged, // Current page number
		'tax_query' => array(
			array(
				'taxonomy' => 'categorie',
				'field' => 'slug',
				'terms' => $categorie,
			),
		),
	);

	$products_query = new WP_Query($args);
	if ($products_query->have_posts()):
		while ($products_query->have_posts()):
			$products_query->the_post();
			$post_id = get_the_ID();
			$image_product = get_field('image_product');
			$name_product = get_field('name_product');
			$description_product = get_field('description_product');
			// Your HTML structure here
			?>
				<div class="col-xl-3  col-sm-6 col-11 h-100 new_products_cards ">
					<div class="position-relative content_text_card_products" style="max-width: 22rem;">
						<img class="img_product_cards" src="<?php echo esc_url($image_product); ?>"
							alt="<?php echo esc_attr($name_product); ?>">
						<div class="content_text_card_products text-center">
							<h5 class=" title_products_cards">
								<?php echo $name_product ?>
							</h5>
							<p class=" paragraph_products_cards">
								<?php echo $description_product ?>
							</p>
							<div>
								<a class="En_savoir_plus"
									href="/details?post_id=<?php echo $post_id; ?>&category=<?php echo $categorie; ?>">En savoir
									plus
									<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
										<path
											d="M14.2466 4.35331C14.4418 4.15805 14.4418 3.84146 14.2466 3.6462L11.0646 0.464221C10.8693 0.268959 10.5527 0.268959 10.3575 0.464221C10.1622 0.659484 10.1622 0.976066 10.3575 1.17133L13.1859 3.99975L10.3575 6.82818C10.1622 7.02344 10.1622 7.34003 10.3575 7.53529C10.5527 7.73055 10.8693 7.73055 11.0646 7.53529L14.2466 4.35331ZM0.893005 4.49976L13.893 4.49975L13.893 3.49975L0.893005 3.49976L0.893005 4.49976Z"
											fill="black" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php
		endwhile;

		?>
			<div class="pagination">
				<?php
				echo paginate_links(
					array(
						'base' => '%_%', // The base URL to use for pagination links
						'format' => '/produits/' . $parentCategoryName . '/' . $categoryLowercase . '/page/%#%', // The format for the pagination links
						'total' => $products_query->max_num_pages,
						'current' => max(1, $paged),
						'prev_text' => '<span class="text_prev mx-2"> Précédente </span> <span class="arrow"> < </span> ', // Change this line
						'next_text' => '<span class="arrow"> > </span> <span class="text_next"> Suivante </span>', // Change this line
		
					)
				);

				?>
			</div>
		<?php else: ?>
			<script>
				var myToast = Toastify({
					text: `Not Found Products`,
					duration: 2500,
					position: "center", // Change this to "top" for top position
					style: {
						background: "#e74c3c",
					},
					offset: {
						y: 10, // Center horizontally
						x: window.innerHeight - 100 // Adjust as needed for vertical position
					}
				});
				myToast.showToast();
			</script>

			<?php
			echo 'Not Found Products';
	endif;

	wp_die();
}




add_action('wp_ajax_get_actualite', 'get_actualite');
add_action('wp_ajax_nopriv_get_actualite', 'get_actualite');


function get_actualite()
{

	$Filtra_Categorie = $_POST['Filtra_Categorie'];
	$paged = isset($_POST['page']) ? intval($_POST['page']) : 1; // Get the current page number from POST data

	// var_dump($Filtra_Categorie);

	$args = array(
		'post_type' => 'actualite', // Retrieve regular posts
		'posts_per_page' => 6, // Number of posts per page
		'paged' => $paged, // Current page number
	);

	if ($Filtra_Categorie != 'all') {
		$args = array(
			'post_type' => 'actualite',
			'posts_per_page' => 4,
			'paged' => $paged, // Current page number
			'tax_query' => array(
				array(
					'taxonomy' => 'categories_actualite',
					'field' => 'slug',
					'terms' => $Filtra_Categorie,
				),
			),
		);
	}


	$products_query = new WP_Query($args);
	if ($products_query->have_posts()):
		while ($products_query->have_posts()):
			$products_query->the_post();
			$post_id = get_the_ID();
			$terms = get_the_terms($post_id, 'categories_actualite');
			$term_name = !empty($terms) && !is_wp_error($terms) ? esc_html($terms[0]->name) : '';
			$image_actualite = get_field('image_actualite');
			$title_actualite = get_field('title_actualite');
			$description_actualite = get_field('description_actualite');
			$date_actualite = get_field('date_actualite');
			// Your HTML structure here
			?>
				<div class="col-xl-4 col-md-6 col-sm-12 my-2">
					<div class="Nosactualites_Cards card position-relative w-100 h-100 " style="max-width: 24rem;">
						<img class="card-img-top img_card_actualite" src='<?php echo $image_actualite['url'] ?>'
							alt='<?php echo $image_actualite['title'] ?>'>
						<button class='btn_Nos_actualites1 mt-2'>NOUVELLES</button>
						<button class='btn_Nos_actualites2 mt-2'>
							<?php echo $term_name; ?>
						</button>
						<div class=" card-body card-Actualites" style=''>
							<h5 class="card-title">
								<?php echo $title_actualite ?>
							</h5>
							<p class="card-text">
								<?php echo $description_actualite ?>
							</p>
							<div class="row justify-content-between">
								<div class="col-xl-6 col-sm-6 col-6" style='cursor:pointer'>
									<a href="" class='lire_plue'>Lire plus
										<div class='arrow_Actualite d-inline px-2'>
											<svg class="" xmlns="http://www.w3.org/2000/svg" height="20" width="17.5"
												viewBox="0 0 448 512">
												<path fill="#ffffff"
													d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
											</svg>
										</div>
									</a>
								</div>
								<div class="col-xl-5 col-sm-6 col-6">
									<p>
										<?php echo $date_actualite ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
		endwhile;

		?>
			<div class="pagination my-4">
				<?php
				echo paginate_links(
					array(
						'base' => '%_%', // The base URL to use for pagination links
						'format' => '/actualites/page/%#%', // The format for the pagination links
						'total' => $products_query->max_num_pages,
						'current' => max(1, $paged),
						'prev_text' => '<span class="text_prev mx-2"> Précédente </span> <span class="arrow"> < </span> ', // Change this line
						'next_text' => '<span class="arrow"> > </span> <span class="text_next"> Suivante </span>', // Change this line
		
					)
				);

				?>
			</div>
		<?php else: ?>
			<?php
			echo 'Not Found Actualite';
	endif;

	wp_die();
}



