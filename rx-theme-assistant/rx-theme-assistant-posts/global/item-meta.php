<?php
/**
 * Loop item meta
 */

if ( 'yes' !== $this->get_attr( 'show_meta' ) ) {
	return;
}

echo '<div class="post-meta">';

	rx_theme_assistant_post_tools()->get_post_author( array(
		'visible' => $this->get_attr( 'show_author' ),
		'class'   => 'posted-by__author',
		'prefix'  => esc_html__( 'By ', 'voelas' ),
		'html'    => '<span class="posted-by post-meta__item">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
		'echo'    => true,
	) );

	rx_theme_assistant_post_tools()->get_post_date( array(
		'visible' => $this->get_attr( 'show_date' ),
		'class'   => 'post__date-link',
		'icon'    => '',
		'html'    => '<span class="post__date post-meta__item">%1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s" title="%5$s">%6$s%7$s</time></a></span>',
		'echo'    => true,
	) );

	rx_theme_assistant_post_tools()->get_post_comment_count( array(
		'visible' => $this->get_attr( 'show_comments' ),
		'class'   => 'post__comments-link',
		'icon'    => '',
		'prefix'  => esc_html__( 'Comments: ', 'voelas' ),
		'html'    => '<span class="post__comments post-meta__item">%1$s<a href="%2$s" %3$s %4$s>%5$s%6$s</a></span>',
		'echo'    => true,
	) );

echo '</div>';
