<?php
// サムネイル表示の有効化
add_theme_support('post-thumbnails');
add_action( 'pre_get_posts', 'five_posts_on_homepage' );

function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}

function five_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '6' );
    }
}