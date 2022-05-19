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
		<h2 class="comment_heading"><?php echo get_comments_number()?> Comments </h2>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">

		<?php
		wp_list_comments(
			array(
				'avatar_size'   =>   120,
				'style' => 'div',
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
                'title_reply'   => 'Post your comment',
                'comment_notes_before' => '',
                'title_reply_before' => '<div class="comment_reply_title">',
                'title_reply_after' => '</div><div class="comment_lower_container">',
                'comment_field' => '<input type="textarea" class="comment_textarea"></input>',
            )
        );
	}
	?>
</div>
