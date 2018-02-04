<?php
/*
Template Name: Archives
*/
get_header(); ?>
    <main id="top">
        <p class="archives-header first-effect effect">Archives</p>
        <div class="l-archives" role="main">
            <?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'bloglist', get_post_format() );
			endwhile;
		endif;
		wp_reset_postdata();
		?>
                <div class="archives-paging effect">
                    <?php
		if ($the_query->max_num_pages > 1) {
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => '/page/%#%/',
				'current' => max(1, $paged),
				'total' => $the_query->max_num_pages
			));
		}
		wp_reset_postdata();
		?>
                </div>
        </div>
    </main>

    <?php get_footer(); ?>
