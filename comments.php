<div class="comment_container">
	<hr style="height: 1px; width: 100%; background-color: #62585f;">
	<?php
	if ( ! have_comments() ) {
		?>
		<h2 class="comment_heading"> 0 Comments </h2>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">
		<?php
	} else {
		?>
		<h2 class="comment_heading"><?php echo get_comments_number(); ?> Comments </h2>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">

		<?php
		wp_list_comments(
			array(
				'avatar_size' => 120,
				'style'       => 'div',
			)
		);
	}
	?>
</div>

<div class="comment_form">
	<?php
	if ( comments_open() ) {
		comment_form(
			array(
				'fields'			   => array(
					'author'  => '<div class="comment_form__three_fields"> <label for="author" class="comment_form__three_fields-name">Name</label><input class="comment_form__three_fields-input" id="author" name="author" type="text" required="required"></input></div>',
					'email'	  => '<div class="comment_form__three_fields"> <label for="email" class="comment_form__three_fields-name">Email</label><input class="comment_form__three_fields-input" id="email" name="email" type="text" required="required"></input></div>',
					'url'	  => '<div class="comment_form__three_fields" id="comment_url_block"> <label for="url" class="comment_form__three_fields-name">Website</label><input class="comment_form__three_fields-input" id="url" name="url" type="text" required="required"></input></div>',
					'cookies' => '</div>'
				),
				'title_reply'          => 'Post your comment',
				'comment_notes_before' => '',
				'title_reply_before'   => '<div class="comment_reply_title">',
				'title_reply_after'    => '</div>',
				'comment_field'        => '<input type="textarea" class="comment_textarea"></input><div class="comment_form__lower_container">',
				'label_submit'		   => 'Submit',
			)
		);
	}
	?>
</div>
