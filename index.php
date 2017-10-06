<?php get_header(); ?>
<main>
    <div class="l-hero">
        <div class="l-hero__description">
            <h1 class="eyecatch-top">
             <span class="top-logo">
                <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 150 47'><g><path class="path" d='M13.909 12.994h-11.909v-10.892h36.897v10.892h-11.904v31.602h-13.084v-31.602zM40.931 2.102h35.817v10.892h-22.725v5.295h22.725v10.121h-22.725v5.295h22.73v10.891h-35.822v-42.494zM78.953 2.102h21.484c14.16 0 19.168 10.475 19.168 21.185 0 13.039-6.904 21.309-21.725 21.309h-18.927v-42.494zm13.09 31.603h5.121c8.156 0 9.348-6.608 9.348-10.6 0-2.673-.836-10.111-10.301-10.111h-4.168v20.711zM138.416 28.22l-3.992-6.622-3.895 6.622h-9.594l9.107-13.39-8.77-12.809h9.596l3.555 6.332 3.654-6.332h9.594l-8.768 12.809 9.107 13.39h-9.594z'/></g>
                </svg>
             </span>
             Youth@Namba
            </h1>
         <h2 class="eyecatch-bottom first-effect effect-slow"><span class="eyecatch-theme">Theme「<strong class="teme-color">爆発</strong>」</span>2018.03.03(Sat)</h2>
        </div>
    </div>
    <div class="container">
        <h2 class="l-title-blog effect">BLOG</h2>
        <div class="l-articles" itemscope itemtype="http://schema.org/Article">
            <?php query_posts('posts_per_page=6'); while ( have_posts() ) : the_post() ?>
            <a class="l-articles__inner effect" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <article class="index-article" itemprop="image">
                    <?php if(has_post_thumbnail()){ the_post_thumbnail(); }else{ echo '<img src="http://tedxyouthnamba.com/wp-content/uploads/2017/06/cropped-_Namba_TEDx_logo_place2_k_RGB_CS2-1-1-1024x383.png">';}?>
                    <h3 class="index-article__title" itemprop="name"><time><?php the_time('Y.m.d(l)'); ?></time><br>
                        <?php the_title(); ?>
                    </h3>
                </article>
            </a>
            <?php endwhile; ?>
        </div>
        <a class="showmore effect" href="<?php echo home_url('/archives'); ?>">- Show more -</a>
        <h2 class="l-title-speaker effect">SPEAKER</h2>
        <div class="l-speaker effect">

<?php 
 $args = array(
    'post_parent' => 35,
    'post_type' => 'page'
    ); 
    $posts = get_posts($args);
            if (! $posts){ ?>
            <p class="speaker-empty">Coming soon!</p>
            <style>.l-speaker::after {top: -200%;height: 480%;}</style>
<?php } 
            foreach($posts as $post) {
                $post_id = $post->ID; 
                $page_id = get_page($post_id); ?>
            <a class="speaker-avatar" href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <h3 class="speaker-name"><?php the_title(); ?></h3>
            </a>
<?php } ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>