<?php get_header(); ?>
<main>
	<div class="first-effect effect">
        <h1 class="l-page-header"><?php
$parent_id = $post->post_parent;
if ($parent_id) {
echo get_the_title($parent_id);
} else {
  echo get_the_title();
}
?></h1>
<div class="l-page">
        <div class="entry">
			<?php the_content(); ?>
        </div>
        </div>
	</div>
</main>
<?php get_footer(); ?>