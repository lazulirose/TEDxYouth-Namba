<?php
/*
Template Name: SPEAKER
*/
?>
    <?php get_header(); ?>
    <?php $s = $_GET['s']; ?>
    <?php if (is_page() && $post->post_parent) { ?>
    <main id="top">
        <div class="first-effect effect">
            <p class="l-page-header">
                <?php
$parent_id = $post->post_parent;
if ($parent_id) {
echo get_the_title($parent_id);
} else {
  echo get_the_title();
}
?>
            </p>
            <div class="l-page">
                <div class="speaker-thumbnail">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                </div>
                <div class="speaker-content">
                    <h1 class="speaker-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                    <a href="<?php echo home_url('/speaker'); ?>" class="speaker-back">
                        &lt; Back </a>
                </div>

            </div>
        </div>
    </main>
    <?php } else { ?>
    <main id="top">
        <div class="first-effect effect">
            <p class="l-page-header">
                <?php
$parent_id = $post->post_parent;
if ($parent_id) {
echo get_the_title($parent_id);
} else {
  echo get_the_title();
}
?>
            </p>
            <div class="l-page">
                <div class="l-speaker none">
                    <?php 
 $args = array(
    'post_parent' => 7,
    'post_type' => 'page',
     'posts_per_page' => 10,
    ); 
    
$posts = get_posts($args);
foreach($posts as $post) {
    $post_id = $post->ID; 
    $page_id = get_page($post_id);
    echo '<a class="speaker-avatar effect" href="'; 
    echo the_permalink();
    echo '">';
    echo the_post_thumbnail();
    echo '<h3 class="speaker-name effect">';
    the_title();
    echo '</h3>';
    echo  '</a>';
};
?>
                </div>
            </div>
        </div>
    </main>
    <?php }?>
    <?php get_footer(); ?>
