<?php get_header(); ?>
<main>
  <article class="l-article first-effect effect" id="content" itemscope itemtype="http://schema.org/Article" itemscope="" itemtype="http://schema.org/Article">
    <span class="thumbnail" itemprop="image">
      <?php if(has_post_thumbnail()){ the_post_thumbnail(); }else{ echo '<img src="http://tedxyouthnamba.com/wp-content/uploads/2017/06/cropped-_Namba_TEDx_logo_place2_k_RGB_CS2-1-1-1024x383.png">';}?>
    </span>
          <h1 class="l-single-entyrytitle">
          <span itemprop="name">
            <?php the_title(); ?>
          </span>
      </h1>
    <div class="l-single-article">
      <time class="article-time" itemprop="datePublished">
        <?php the_time('Y.m.d(l)'); ?>
      </time>
      <span class="l-article__cotent effect" itemprop="articleBody">
        <?php the_content(); ?>
      </span>
    </div>
  </article>
  <ul class="single-paging effect">
    <li class="paging-align">
        <?php next_post_link('<span class="paging-head">After</span> %link', '%title', FALSE, ''); ?>
    </li>
    <li class="paging-align">
      <?php previous_post_link('<span class="paging-head">Before</span> %link', '%title', FALSE, ''); ?>
    </li>
  </ul>
</main>
<?php get_footer(); ?>
<script>
</script>