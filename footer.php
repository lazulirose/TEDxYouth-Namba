<footer id="footer" class="l-footer">
    <a href="#top" class="gototop effect">▲ TOPへ</a>
    <div class="l-footer__inner effect">
        <div class="footer-about">
            <h4 class="about-head">TEDxYouth Namba</h4>
            <p class="about-content">“大阪にあるアイデアを発信する場をつくり、若者がインスピレーションを受けられる場をつくりたい！”という思いをもつ有志による、TEDxYouthコミュニティです。</p>
            <p class="about-content">2018年3月3日（土）TEDxYouth@Namba「爆発」を開催します。</p>
            <!--            <a class="about-link" href="">プライバシーポリシー</a>-->
        </div>
        <a class="twitter-timeline" href="https://twitter.com/TEDxYouthNamba" data-width="320" data-height="320" data-chrome="noheader nofooter noborders transparent noscrollbar" target="blank">Tweets by TEDxYouthNamba</a>
        <div class="fb-page" data-href="https://www.facebook.com/TEDxYouthNamba/?hc_ref=ARRkUhJIFHS701Ou3iNW_dSysbvVSPG75mWYX7acEXcNcMf01V24YM1GOLkDGRwi9lI&amp;pnref=story" data-tabs="timeline" data-height="320" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/TEDxYouthNamba/?hc_ref=ARRkUhJIFHS701Ou3iNW_dSysbvVSPG75mWYX7acEXcNcMf01V24YM1GOLkDGRwi9lI&amp;pnref=story" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TEDxYouthNamba/?hc_ref=ARRkUhJIFHS701Ou3iNW_dSysbvVSPG75mWYX7acEXcNcMf01V24YM1GOLkDGRwi9lI&amp;pnref=story">TEDxYouth Namba</a></blockquote>
        </div>
        <ul class="sp-only footer-sns-links effect">
            <li class="l-list-item sns-item">
                <a href="https://twitter.com/TEDxYouthNamba" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="l-list-item sns-item"><a href="https://www.facebook.com/TEDxYouthNamba/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="l-list-item sns-item"><a href="https://www.youtube.com/user/TEDxYouth" target="blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <small class="copyright">&#169; <a href="https://lilium-u.github.io/">Yuri TANAKA</a>, TEDxNamba is operated under license from TED</small>
</footer>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<div id="fb-root"></div>
<script async>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10&appId=556138191440732";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/feature.min.js"></script>
<script>
    //OPEN TRIGGER
    var container = $('#js-menu');
    var bg = $('.menu-bg ');
    var openTrigger = $('#js-menu-trigger');
    var openTriggerTop = openTrigger.find('#js-menu-top');
    var openTriggerMiddle = openTrigger.find('#js-menu-middle');
    var openTriggerBottom = openTrigger.find('#js-menu-bottom');

    //CLOSE TRIGGER
    var closeTrigger = $('#js-close-trigger');
    var closeTriggerLeft = closeTrigger.find('#js-close-left');
    var closeTriggerRight = closeTrigger.find('#js-close-right');

    //MENU
    var menuContainer = $('#js-menu_inner');
    var menu = $('#js-menu-links');
    var menuTop = $('#js-bg-top');
    var menuMiddle = $('#js-bg-middle');
    var menuBottom = $('#js-bg-bottom');

    //TL
    var tlOpen = new TimelineMax({
        paused: true
    });
    var tlClose = new TimelineMax({
        paused: true
    });

    //OPEN
    tlOpen.add("preOpen")
        .to(openTriggerTop, 0.4, {
            x: "+80px",
            y: "-80px",
            delay: 0.1,
            ease: Power4.easeIn,
            onComplete: function() {
                closeTrigger.css('z-index', '800');
                container.css('background-color', '#f6f6f6');
                container.css('z-index', '1');
                container.css('height', '100vh');
                container.css('width', '100%');
                bg.css('background-color', '#e22e29');
            }
        }, "preOpen")
        .to(openTriggerMiddle, 0.4, {
            x: "+=80px",
            y: "-=80px",
            ease: Power4.easeIn,
            onComplete: function() {
                openTrigger.css('visibility', 'hidden');
            }
        }, "preOpen")
        .to(openTriggerBottom, 0.4, {
            x: "+=80px",
            y: "-=80px",
            delay: 0.2,
            ease: Power4.easeIn
        }, "preOpen")
        .add("open", "-=0.4")
        .to(menuTop, 0.8, {
            y: "13%",
            ease: Power4.easeInOut
        }, "open")
        .to(menuMiddle, 0.8, {
            scaleY: 1,
            ease: Power4.easeInOut
        }, "open")
        .to(menuBottom, 0.8, {
            y: "-114%",
            ease: Power4.easeInOut
        }, "open")
        .fromTo(menu, 0.6, {
            y: 30,
            opacity: 0,
            visibility: 'hidden'
        }, {
            y: 0,
            opacity: 1,
            visibility: 'visible',
            ease: Power4.easeOut
        }, "-=0.2")
        .add("preClose", "-=0.8")
        .to(closeTriggerLeft, 0.8, {
            x: "-=100px",
            y: "+=100px",
            ease: Power4.easeOut
        }, "preClose")
        .to(closeTriggerRight, 0.8, {
            x: "+=100px",
            y: "+=100px",
            delay: 0.2,
            ease: Power4.easeOut
        }, "preClose");

    //CLOSE
    tlClose.add("close")
        .to(menuTop, 0.8, {
            backgroundColor: "#000",
            ease: Power4.easeInOut,
            onComplete: function() {
                closeTrigger.css('z-index', '800');
                container.css('z-index', '800');
                container.css('height', '80px');
                container.css('width', '80px');
                container.css('background', 'transparent');
                openTrigger.css('visibility', 'visible');
            }
        }, "close")

        .to(menuMiddle, 0.2, {
            backgroundColor: "#fff",
            ease: Power4.easeInOut
        }, "close")
        .to(menuBottom, 0.2, {
            backgroundColor: "#000",
            ease: Power4.easeInOut
        }, "close")
        .to(menu, 0.4, {
            y: 20,
            opacity: 0,
            ease: Power4.easeOut,
            onComplete: function() {
                menu.css('visibility', 'hidden');
            }
        }, "close")
        .to(menuTop, 0.8, {
            y: "-113%",
            ease: Power4.easeInOut
        }, "close", "+=0.2")
        .to(menuMiddle, 0.8, {
            scaleY: 0,
            ease: Power4.easeInOut
        }, "close", "+=0.2")
        .to(menuBottom, 0.8, {
            y: "23%",
            ease: Power4.easeInOut,
            onComplete: function() {
                menuTop.css('background-color', 'transparent');
                menuMiddle.css('background-color', 'transparent');
                menuBottom.css('background-color', 'transparent');
            }
        }, "close", "+=0.2")
        .to(closeTriggerLeft, 0.2, {
            x: "+=100px",
            y: "-=100px",
            ease: Power4.easeIn
        }, "close")
        .to(closeTriggerRight, 0.2, {
            x: "-=100px",
            y: "-=100px",
            delay: 0.1,
            ease: Power4.easeIn
        }, "close")
        .to(openTriggerTop, 1, {
            x: "-=80px",
            y: "+=80px",
            delay: 0.2,
            ease: Power4.easeOut
        }, "close")
        .to(openTriggerMiddle, 1, {
            x: "-=80px",
            y: "+=80px",
            ease: Power4.easeOut
        }, "close")
        .to(openTriggerBottom, 1, {
            x: "-=80px",
            y: "+=80px",
            delay: 0.1,
            ease: Power4.easeOut
        }, "close");

    //EVENTS
    openTrigger.on('click', function() {
        if (tlOpen.progress() < 1) {
            tlOpen.play();
        } else {
            tlOpen.restart();
        }
    });
    closeTrigger.on('click', function() {
        if (tlClose.progress() < 1) {
            tlClose.play();
        } else {
            tlClose.restart();
        }
    });
    // scroll effect
    $(function() {
        $(window).on('scroll', function() {
            var scroll_top = $(window).scrollTop();
            $('.effect').each(function() {
                var offset_top = $(this).offset().top,
                    top_margin = 600;
                if (scroll_top > offset_top - top_margin) {
                    $(this).addClass('fadein');
                } else {
                    $(this).removeClass('fadein');
                }
            });
        });
    });
    $(function() {
        $(document).ready(function() {
            $('.first-effect').addClass('fadein');
        })
    });
    if (feature.webGL) {
        $("html").addClass("webgl");
    }

</script>
</body>

</html>
