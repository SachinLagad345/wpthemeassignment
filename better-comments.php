<?php
/**
 * Theme Name: WPThemeAssignment
 * Theme URI: https://wordpress.org/themes/wpthemeassignment/
 * Author: Sachin Lagad
 * Author URI: https://sachinlagad.com/
 * Description: This is testing purpose theme development
 * Requires at least: 5.3
 * Tested up to: 5.9
 * Requires PHP: 5.6
 * Version: 1.0
 *
 * @package theme
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpthemeassignment
 * Tags: one-column, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, block-patterns, rtl-language-support, sticky-post, threaded-comments, translation-ready

 * WPThemeAssignment WordPress Theme, (C) 2020 WordPress.org
 * WPThemeAssignment is distributed under the terms of the GNU GPL.
 */

?>

<?php
/**
 * My custom comments output html.
 *
 * @param string $comment contains comment text.
 * @param array  $args contains arguments.
 * @param int    $depth contains current depth of html.
 */
function better_comments( $comment, $args, $depth ) {
	// Get correct tag used for the comments.
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>

	<<?php echo esc_url( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">

		<?php
		// Switch between different comment types.
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				?>
				<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'textdomain' ); ?></span> <?php comment_author_link(); ?></div>
				<?php
				break;
			default:
				if ( 'div' !== $args['style'] ) {
					?>
					<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<?php } ?>
					<div class="comment-author vcard">
						<?php
						// Display avatar unless size is set to 0.
						if ( 0 !== $args['avatar_size'] ) {
							$avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 70; // set default avatar size.
							echo get_avatar( $comment, $avatar_size );
						}
						echo '<i class="fa fa-comment comment__icon"></i>';

						echo '<div class="comment-right">';
						echo '<div class="comment_author-wrapper">';
						// Display author name.
						/* translators: %s: search term */
						printf( esc_html__( '<cite class="fn">%s</cite> <span class="says">said on</span>', 'wpthemeassignment' ), get_comment_author_link() );
						?>

						<a href="<?php echo esc_html( htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ); ?>">
							<?php
							printf(
								/* translators: 1: date, 2: time */
								esc_html__( '%1$s at %2$s', 'wpthemeassignment' ),
								esc_url( get_comment_date() ),
								esc_url( get_comment_time() )
							);
							?>
						</a>
					</div>
					<div class="comment-text"><?php comment_text(); ?></div><!-- .comment-text -->
					<?php
					// Display comment moderation text.
					if ( '0' === $comment->comment_approved ) {
						?>
						<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'textdomain' ); ?></em><br />
						<?php
					}
					echo '</div></div>';
					?>
					<div class="reply">
						<?php
						// Display comment reply link.
						comment_reply_link(
							array_merge(
								$args,
								array(
									'add_below' => $add_below,
									'depth'     => $depth,
									'max_depth' => $args['max_depth'],
								)
							)
						);
						?>
					</div>
					<?php
					if ( 'div' !== $args['style'] ) {
						?>
					</div>
						<?php
					}
				break;
			endswitch; // End comment_type check.
}
