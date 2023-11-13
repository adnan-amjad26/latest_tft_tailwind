<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package The_Funded_Trader
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function the_funded_trader_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'the_funded_trader_pingback_header' );

/**
 * Changes comment form default fields.
 *
 * @param array $defaults The default comment form arguments.
 *
 * @return array Returns the modified fields.
 */
function the_funded_trader_comment_form_defaults( $defaults ) {
	$comment_field = $defaults['comment_field'];

	// Adjust height of comment form.
	$defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $comment_field );

	return $defaults;
}
add_filter( 'comment_form_defaults', 'the_funded_trader_comment_form_defaults' );

/**
 * Filters the default archive titles.
 */
function the_funded_trader_get_the_archive_title() {
	switch (is_archive()) {
		case is_category() :
			$title = __( 'Category Archives: ', 'the-funded-trader' ) . '<span>' . single_term_title( '', false ) . '</span>';
			return $title;
			break;
		case is_tag() :
			$title = __( 'Tag Archives: ', 'the-funded-trader' ) . '<span>' . single_term_title( '', false ) . '</span>';
			return $title;
			break;
		case is_author() :
			$title = __( 'Author Archives: ', 'the-funded-trader' ) . '<span>' . get_the_author_meta( 'display_name' ) . '</span>';
			return $title;
			break;
		case is_year() : 
			$title = __( 'Yearly Archives: ', 'the-funded-trader' ) . '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'the-funded-trader' ) ) . '</span>';
			return $title;
			break;
		case is_month() :
			$title = __( 'Monthly Archives: ', 'the-funded-trader' ) . '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'the-funded-trader' ) ) . '</span>';
			return $title;
			break;
		case is_day() :
			$title = __( 'Daily Archives: ', 'the-funded-trader' ) . '<span>' . get_the_date() . '</span>';
			return $title;
			break;
		case is_post_type_archive() :
			$cpt   = get_post_type_object( get_queried_object()->name );
			$title = sprintf(
				/* translators: %s: Post type singular name */
				esc_html__( '%s Archives', 'the-funded-trader' ),
				$cpt->labels->singular_name
			);
			return $title;
			break;
		case is_tax() :
			$tax   = get_taxonomy( get_queried_object()->taxonomy );
			$title = sprintf(
				/* translators: %s: Taxonomy singular name */
				esc_html__( '%s Archives', 'the-funded-trader' ),
				$tax->labels->singular_name
			);
			return $title;
			break;
		default:
			$title = __( 'Archives:', 'the-funded-trader' );
			return $title;
			break;
	}
}
add_filter( 'get_the_archive_title', 'the_funded_trader_get_the_archive_title' );

/**
 * Determines whether the post thumbnail can be displayed.
 */
function the_funded_trader_can_show_post_thumbnail() {
	return apply_filters( 'the_funded_trader_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}

/**
 * Returns the size for avatars used in the theme.
 */
function the_funded_trader_get_avatar_size() {
	return 60;
}

/**
 * Create the continue reading link
 *
 * @param string $more_string The string shown within the more link.
 */
function the_funded_trader_continue_reading_link( $more_string ) {

	if ( ! is_admin() ) {
		$continue_reading = sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s', 'the-funded-trader' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="sr-only">"', '"</span>', false )
		);

		$more_string = '<a href="' . esc_url( get_permalink() ) . '">' . $continue_reading . '</a>';
	}

	return $more_string;
}

// Filter the excerpt more link.
add_filter( 'excerpt_more', 'the_funded_trader_continue_reading_link' );

// Filter the content more link.
add_filter( 'the_content_more_link', 'the_funded_trader_continue_reading_link' );

/**
 * Outputs a comment in the HTML5 format.
 *
 * This function overrides the default WordPress comment output in HTML5
 * format, adding the required class for Tailwind Typography. Based on the
 * `html5_comment()` function from WordPress core.
 *
 * @param WP_Comment $comment Comment to display.
 * @param array      $args    An array of arguments.
 * @param int        $depth   Depth of the current comment.
 */
function the_funded_trader_html5_comment( $comment, $args, $depth ) {
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

	$commenter          = wp_get_current_commenter();
	$show_pending_links = ! empty( $commenter['comment_author'] );

	if ( $commenter['comment_author_email'] ) {
		$moderation_note = __( 'Your comment is awaiting moderation.', 'the-funded-trader' );
	} else {
		$moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'the-funded-trader' );
	}
	?>
	<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $comment->has_children ? 'parent' : '', $comment ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
					if ( 0 !== $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
					<?php
					$comment_author = get_comment_author_link( $comment );

					if ( '0' === $comment->comment_approved && ! $show_pending_links ) {
						$comment_author = get_comment_author( $comment );
					}

					printf(
						/* translators: %s: Comment author link. */
						wp_kses_post( __( '%s <span class="says">says:</span>', 'the-funded-trader' ) ),
						sprintf( '<b class="fn">%s</b>', wp_kses_post( $comment_author ) )
					);
					?>
				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<?php
					printf(
						'<a href="%s"><time datetime="%s">%s</time></a>',
						esc_url( get_comment_link( $comment, $args ) ),
						esc_attr( get_comment_time( 'c' ) ),
						esc_html(
							sprintf(
							/* translators: 1: Comment date, 2: Comment time. */
								__( '%1$s at %2$s', 'the-funded-trader' ),
								get_comment_date( '', $comment ),
								get_comment_time()
							)
						)
					);

					edit_comment_link( __( 'Edit', 'the-funded-trader' ), ' <span class="edit-link">', '</span>' );
					?>
				</div><!-- .comment-metadata -->

				<?php if ( '0' === $comment->comment_approved ) : ?>
				<em class="comment-awaiting-moderation"><?php echo esc_html( $moderation_note ); ?></em>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div <?php the_funded_trader_content_class( 'comment-content' ); ?>>
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

			<?php
			if ( '1' === $comment->comment_approved || $show_pending_links ) {
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						)
					)
				);
			}
			?>
		</article><!-- .comment-body -->
	<?php
}
