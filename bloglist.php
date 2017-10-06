<article class="l-list-article effect" itemscope itemtype="http://schema.org/Article" itemscope="" itemtype="http://schema.org/Article">
  <a class="l-list-article__inner" href="<?php the_permalink(); ?>">
    <span class="thumbnail" itemprop="image">
     <?php if(has_post_thumbnail()){ the_post_thumbnail(); }else{ echo '<img src="http://tedxyouthnamba.com/wp-content/uploads/2017/06/cropped-_Namba_TEDx_logo_place2_k_RGB_CS2-1-1-1024x383.png">';}?>
    </span>
    <h1 class="entry-title">
      <span itemprop="name">
        <?php the_title(); ?>
      </span>
    </h1>
    <time class="entry-time" itemprop="datePublished">
      <?php the_time('Y.m.d(l)'); ?>
    </time>
    <p class="article-body" itemprop="articleBody">
      <?php the_excerpt(); ?>
    </p>
    <p class="read-more">- Read More -</p>
  </a>
</article>