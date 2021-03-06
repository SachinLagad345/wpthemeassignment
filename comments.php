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

<div class="comment_container">
	<hr style="height: 1px; width: 100%; background-color: #62585f;">
	<?php
	if ( ! have_comments() ) {
		?>
		<h2 class="comment_heading"> Comments </h2>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">
		<?php
	} else {
		?>
		<h2 class="comment_heading"> Comments </h2>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">

		<?php
		wp_list_comments(
			array(
				'avatar_size' => 0,
				'callback'    => 'better_comments',
			)
		);
	}
	?>
</div>

<div class="comment_form">
	<?php
	global $current_user;
	wp_get_current_user();
	$is_author = get_the_author();
	if ( $is_author === $current_user->user_login ) {
		$fields        = array();
		$comment_field = '<input type="textarea" id="comment" name="comment" class="comment_textarea" required="required"></input>';
		// echo ' inside comment author if change'.
		// echo $comment_field.
	} else {
		$fields        = array(
			'author'  => '<div class="comment_form__three_fields"> <label for="author" class="comment_form__three_fields-name">Name</label><input class="comment_form__three_fields-input" id="author" name="author" type="text" required="required"></input></div>',
			'email'   => '<div class="comment_form__three_fields"> <label for="email" class="comment_form__three_fields-name">Email</label><input class="comment_form__three_fields-input" id="email" name="email" type="text" required="required"></input></div>',
			'url'     => '<div class="comment_form__three_fields" id="comment_url_block"> <label for="url" class="comment_form__three_fields-name">Website</label><input class="comment_form__three_fields-input" id="url" name="url" type="text" required="required"></input></div>',
			'cookies' => '</div>',
		);
		$comment_field = '<input type="textarea" id="comment" name="comment" class="comment_textarea" required="required"></input><div class="comment_form__lower_container">';
	}
	if ( comments_open() ) {
		comment_form(
			array(
				'fields'               => $fields,
				'title_reply'          => 'Post your comment',
				'comment_notes_before' => '',
				'title_reply_before'   => '<div class="comment_reply_title">',
				'title_reply_after'    => '</div>',
				'comment_field'        => $comment_field,
				'label_submit'         => 'Submit',
			)
		);
	}
	?>
</div>
