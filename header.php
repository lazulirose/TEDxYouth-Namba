<!--

　 　∧＿∧ ﾋｮｺｯ♪
　／(๑•ω•๑) ／＼　　
／|￣∪ ∪ ￣|＼／
　|＿＿ ＿＿ |／　

　＼どうもどうも／
　　 ∧＿∧∩ミ
　／(๑•ω•๑)っ ＼　　
／|￣∪￣ ￣ |＼／
　|＿＿ ＿＿ |／


┏┿━━・・・
╂┘   TEDxYouth@Nambaの開催は、2018.03.03なので　　 　 
┃    まだ準備中のページがたくさんあります。
・   ところで。その日は私の誕生日です。                    ・
・    おおっと・・・                                    ・
・   こんなところにAmazon欲しいものリストがありますよ!?      ・
・   　   ＼ http://amzn.asia/byn40hG ／               ・
    “なんかよくわからないけど仕方ないのでプレゼントしてあげる” ┃
　　　　　　そんな素敵なひとをこっそり探しています。　　　　   ┌╂
                                              ・・・━━┿┛

　＼待ってまーす／
　　 ∧＿∧∩ミ
　／(๑•ω•๑)っ ＼　　
／|￣∪￣ ￣ |＼／
　|＿＿ ＿＿ |／

   
   ＼ﾊﾟﾀﾝｯ ／ 
　 　＿＿_＿＿ 
　 ／ 　／　 ／|oO(本当に買ってくださった優しい方、結婚しましょう…w) 
　|￣￣￣￣ |　|
　|＿＿ ＿＿|／

（コピー用URL用意しました↓）
-->
<!--http://amzn.asia/byn40hG-->

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <title>
        TEDxYouth@Namba
        <?php the_title(''); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#e22e29">
    <!-- SEO -->
    <?php if ( $post->my_description ): ?>
    <meta name="description" content="<?php echo esc_attr( $post->my_description ); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php endif; ?>
    <?php if ( $post->my_keywords ): ?>
    <meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
    <?php else: ?>
    <meta name="keywords" content="TED,Namba,Youth" />
    <?php endif; ?>
    <!-- /SEO -->
    <!-- OGP -->
    <?php if (have_posts()): while(have_posts()):the_post(); endwhile; endif;?>
    <meta property="fb:app_id" content="your_fb_app_id" />
    <meta property="fb:admins" content="your_fb_admin_id" />
    <?php if (is_single()) { ?>
    <meta property="og:url" content="<?php the_permalink() ?>" />
    <meta property="og:title" content="<?php the_title(''); ?>" />
    <meta property="og:description" content="<?php echo esc_attr( $post->my_description ); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
    <?php } else { ?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="logo.jpg" />
    <?php } ?>
    <meta name="twitter:card" value="summary" />
    <meta name="twitter:site" value="@TEDxYouthNamba" />
    <meta name="twitter:creator" value="@TEDxYouthNamba" />
    <meta name="twitter:title" value="*" />
    <meta name="twitter:description" value="<?php echo esc_attr( $post->my_description ); ?>" />
    <meta name="twitter:image" value="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
    <!-- /OGP -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>

<body>
    <header class="l-header">
        <?php if (is_page() || is_single()) { ?>
        <div class="l-header__inner bg">
            <p class="l-header__logo logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tedx.svg" alt="tedxlogo"></a>
            </p>
            <?php } else { ?>
            <div class="l-header__inner bg">
                <h1 class="l-header__logo logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tedx.svg" alt="tedxlogo"></a>
                </h1>
                <?php } ?>
                <nav class="l-header__gnav nav">
                    <ul class="gnav-inner">
                        <li class="gnav-item"><a href="<?php echo home_url('/archives'); ?>">Blog</a></li>
                        <li class="gnav-item tooltip"><a href="<?php echo home_url('/speaker'); ?>">Speaker</a>
                        </li>
                        <li class="gnav-item">
                            <a href="<?php echo home_url('/partner'); ?>">Partner</a>
                        </li>
                        <li class="gnav-item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                    <ul class="gnav-sns">
                        <li class="gnav-item sns-item"><a class="sns-icon" href="https://twitter.com/TEDxYouthNamba" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="gnav-item sns-item"><a class="sns-icon" href="https://www.facebook.com/TEDxYouthNamba/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="gnav-item header-application"><a href="https://docs.google.com/forms/d/e/1FAIpQLScbbUayQzsW-U44iXdLbnhe4ECtZhp_iJSEfB4fvQ8uux_iQQ/viewform" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/btn_header.svg" alt="申し込みボタン"></a></li>
                    </ul>
                </nav>
            </div>
            <?php if (is_page() || is_single()) { ?>
            <div class="l-sp-header bg only-sp">
                <p class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tedx-sp.svg" alt="tedxlogo"></a>
                </p>
                <?php } else { ?>
                <div class="l-sp-header only-sp">
                    <h1 class="logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tedx-sp.svg" alt="tedxlogo"></a>
                    </h1>
                    <!--
<a href="https://www.youtube.com/user/TEDxYouth" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/btn_header.svg" alt="申し込みボタン"></a>
-->
                    <?php } ?>
                    <!--menu only-sp-->
                    <nav class="l-sp-header__inner" id="js-menu">
                        <span class="menu-trigger" id="js-menu-trigger">
                        <i class="menu-bar top" id="js-menu-top"></i>
                        <i class="menu-bar middle" id="js-menu-middle"></i>
                        <i class="menu-bar bottom" id="js-menu-bottom"></i>  
                        </span>
                        <span class="close-trigger" id="js-close-trigger">
                        <i class="close-bar left" id="js-close-left"></i>
                        <i class="close-bar right" id="js-close-right"></i>
                    </span>
                        <div class="l-menu">
                            <i class="menu-bg top" id="js-bg-top"></i>
                            <i class="menu-bg middle" id="js-bg-middle"></i>
                            <i class="menu-bg bottom" id="js-bg-bottom"></i>
                            <div class="l-menu__inner" id="js-menu_inner">
                                <ul class="menu-links" id="js-menu-links">
                                    <li class="spnav-item"><a href="<?php echo home_url('/archives'); ?>">Blog</a></li>
                                    <li class="spnav-item tooltip"><a href="<?php echo home_url('/speaker'); ?>">Speaker</a>
                                    </li>
                                    <li class="spnav-item"><a href="<?php echo home_url('/partner'); ?>">Partner</a></li>
                                    <!--			<li class="nav-item"><a href="<?php echo home_url('/member'); ?>">Member</a></li>-->
                                    <li class="spnav-item">
                                        <a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                                    <li class="spnav-item sns">
                                        <a class="sns-icon" href="https://twitter.com/TEDxYouthNamba" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a class="sns-icon" href="https://www.facebook.com/TEDxYouthNamba/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a class="sns-icon" href="https://www.youtube.com/user/TEDxYouth" target="blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
    </header>
