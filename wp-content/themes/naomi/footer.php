	</div><!-- .site-content -->

<footer id="colophon" class="footer_inc grau_bg">
<!--footer_content-->


            <div class="container">
                            <div class="menu-footer">
                                <div class="item-footer">
                                    <ul class="left-item">
                                        <li>
                                            <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'footer-menu1',
                                                    'menu_class' => 'sub-menu',
                                                    'menu_id' => '',
                                                    'container'       => ''
                                                ));
                                            ?> 
                                        </li>
                                        <li>
                                            <?php
                                                    wp_nav_menu(array(
                                                        'theme_location' => 'footer-menu2',
                                                        'menu_class' => 'sub-menu',
                                                        'menu_id' => '',
                                                        'container'       => ''
                                                    ));
                                                ?> 
                                        </li>
                                    </ul>
                                </div>
                                <div class="tel-footer">
                                    <ul class="sub-menu">
                                        <li>石川ナオミ事務所</li>
                                        <li>〒156-0056 東京都世田谷区八幡山3-23-26-102</li>
                                        <li><a href="">TEL&FAX : 03-5942-1285</a></li>
                                        <li><a href="">E-MAIL : info@naomi-ishikawa.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="copy-right">
                                © 2020 NAOMI ISHIKAWA. All Rights Reserved.　webdesign by <a href="">tokyodesignroom.com</a>
                            </p>
                </div>

<!--copyright-->

</footer><!-- .site-footer -->

</div><!-- .site -->
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
	$("img.lazy-load").lazyload({
		effect : "fadeIn"
	});

    var options = {
        type: "delay",
        time: 1000,
        scripts: [
        "https://connect.facebook.net/en_EN/all.js#xfbml=1",
        "https://apis.google.com/js/plusone.js",
		"https://platform.twitter.com/widgets.js",
		"https://static.mixi.jp/js/share.js",
		"https://b.st-hatena.com/js/bookmark_button.js"
            ],
        success: function () {
            FB.init({ appId: '899176063532614', status: true, cookie: true, xfbml: true });
        }
    };
    $.lazyscript(options);
 
});
</script>

</body>
</html>

