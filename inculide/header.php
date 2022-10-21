<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <!-- SEO -->
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- OGP -->
        <meta property="og:title" content="COCORO">
        <meta property="og:site_name" content="COCORO">
        <meta property="og:type" content="website">
        <meta property="og:url" content="//cocoro-web.jp/">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp-cocoro.png?20220418">
        <meta name="twitter:card" content="<?php echo get_template_directory_uri(); ?>/img/ogp-cocoro.png">
        <meta name="format-detection" content="telephone=no">
        <!-- タッチアイコン -->
        <link rel="apple-touch-icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/icon.png?20220418">
        <link rel="shortcut icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/icon.png?20220418">
        <!-- ファビコン -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32.png?20220418"/>
        <!-- googlefonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
		<!--google アナリティクス-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-2243MK4TXC"></script>
		<script>
 		 window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
 		gtag('config', 'G-2243MK4TXC');
		</script>
    </head>
    
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header class="home-header_r">
            <div class="home-header container">
                <h1 class="home-header__left">
                    <div class="home-header__left--image">
                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png?20220418" alt="愛知県蒲郡市のフリーランスWEB制作屋"/></a>
                    </div>
                </h1>
                <nav class="home-header__right">
                    <ul class="home-header__list">
                        <li class="home-header__item">
                            <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="home-header__item--link"><span class="home-header__item--text">制作実績</span></a>
                        </li>
                        <li class="home-header__item">
                            <a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="home-header__item--link"><span class="home-header__item--text">料金一覧</span></a>
                        </li>
                        <li class="home-header__item">
                            <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="home-header__item--link"><span class="home-header__item--text">よくある質問</span></a>
                        </li>
                        <li class="home-header__item">
                            <a href="<?php echo esc_url( home_url( '/greeting' ) ); ?>" class="home-header__item--link"><span class="home-header__item--text">私について</span></a>
                        </li>
                        <ul class="home-header__cta">
                            <!-- <li class="home-header__person_r">
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-header__person">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="40" viewBox="0 0 35.038 35.038"><defs><style>.a{fill:#1a1a1a;}</style></defs><path class="a" d="M23.519,23.519a8.76,8.76,0,1,0-8.76-8.76A8.757,8.757,0,0,0,23.519,23.519Zm0,4.38C17.672,27.9,6,30.833,6,36.658v4.38H41.038v-4.38C41.038,30.833,29.366,27.9,23.519,27.9Z" transform="translate(-6 -6)"/></svg>
                                    <p class="home-header__person--text">
                                        無料相談
                                    </p>
                                </a>
                            </li> -->
                            <li class="home-header__mail_r">
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-header__mail">
                                    <svg class="a" xmlns="http://www.w3.org/2000/svg" width="35" height="40" viewBox="0 0 33.073 26.085"><g transform="translate(-1789.995 -1220.407)"><path class="a" d="M5.886,6H28.971a2.894,2.894,0,0,1,2.886,2.886V26.2a2.894,2.894,0,0,1-2.886,2.886H5.886A2.894,2.894,0,0,1,3,26.2V8.886A2.894,2.894,0,0,1,5.886,6Z" transform="translate(1789.104 1215.907)"/><path class="a" d="M31.856,9,17.428,20.563,3,9" transform="translate(1789.104 1216.304)"/></g></svg>
                                    <p class="home-header__mail--text">
                                        お問い合わせ
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <!-- /.home-header__cta -->
                    </ul>
                    <!-- /.home-header__list -->
                </nav>
                <!-- /.home-header__right -->
                <button class="burger-btn">
                    <span class="bar bar_top"></span>
                    <span class="bar bar_bottom"></span>
                </button>
            </div>
        </header>
        <!-- /.header -->