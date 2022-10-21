<?php get_header(); ?>
<main> 
    <section class="home-kv">
        <div class="home-kv__box container">
            <div class="home-kv__illust"></div>
            <!-- /.home-kv__illust -->
            <div class="home-kv__textarea">
                <div class="home-kv__text">
                    <P class="home-kv__text--lead">
                        <span class="kv__text--lead_circle"></span>
                        ホームページ、
                    </P>
                    <P class="home-kv__text--lead">
                        それは未来を切り開く
                    </P>
                    <P class="home-kv__text--lead">
                        私自身。
                    </P>
                </div>
                <!-- /.home-kv__text -->
            </div>
            <!-- /.home-kv__textarea -->
            <div class="home-kv__scroll">
                <span class="home-kv__scroll--announce"></span>
            </div>
            <div class="home-kv__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-kv_01.png?20220418" alt="#">
            </div>
        </div>
        <!-- /.home-kv__contents -->
    </section>
    <!-- /.home-kv -->

    <!-- greeting -->
    <section class="greeting inner">
        <h2 class="greeting__title">
            <span class="greeting__title--main">
                greeting
            </span>
            <span class="greeting__title--sub">
                ご挨拶
            </span>
        </h2>
        <div class="greeting__contents">
            <div class="greeting__box">
                <p class="greeting__box--text">
                    インターネットが普及し、サービスを受ける・物を買う・就職するなど、一つ一つのイベント毎に一度は検索する昨今、<br class="greeting__box--text_br">ホームページの文章・デザイン・表現は自身の代わりとなる「人」であり、感情を持っていると考えております。
                </p>
                <p class="greeting__box--text greeting__box--text_other">
                    <ul class="greeting__list">
                        <li class="greeting__item">激しい動きで、躍動感</li>
                        <li class="greeting__item">静かな動きで、静寂</li>
                        <li class="greeting__item">カラフルな色で、楽しい</li>
                    </ul>
                </p>
                <p class="greeting__box--text">
                    そんな、インターネットの中で感情を持つ、自分自身の代わりとなる「ホームページ」作りに協力できたらと思います。
                </p>
                <p class="greeting__box--text">
                    お客様がお持ちの大切な価値観を、ホームページを通じて分かりやすく伝えることを第一に考え、<br class="greeting__box--text_br">お客様の目的に沿ったホームページを制作して参ります。
                </p>
            </div>
            <!-- /.greeting__box -->
            <div class="greeting__name-box">
                <div class="greeting__name">
                    <p class="greeting__name--store">
                        cocoro代表
                    </p>
                    <p class="greeting__name--me">
                        菊地&nbsp一希
                    </p>
                </div>
            </div>
            <!-- /greeting__name -->
        </div>
        <!-- /greeting__contents -->
        <div class="greeting__btn">
            <a href="<?php echo esc_url( home_url( '/greeting' ) ); ?>" class="greeting__btn--link">
                私について詳しく
            </a>
        </div>
    </section>
    <!-- /.greeting -->

    <section class="home-service inner">
        <h2 class="home-service__title">
            <span class="home-service__title--main">
                service
            </span>
            <span class="home-service__title--sub">
                3つのサービスをご提供
            </span>
        </h2>
        <ul class="home-service__list">
            <!-- home-service__item01 -->
            <li class="home-service__item home-service__item_01">
                <div class="home-service__circle">
                    <p class="home-service__circle--name">
                        コーディング代行 
                    </p>
                </div>
            </li>
            <!-- /.home-service__item01-->

            <!-- home-service__item02 -->
            <li class="home-service__item home-service__item_02">
                <div class="home-service__circle">
                    <p class="home-service__circle--name">
                        新規ホームページ制作
                    </p>
                </div>
            </li>
            <!-- /.home-service__ite02 -->

            <!-- home-service__item03 -->
            <li class="home-service__item home-service__item_03">
                <div class="home-service__circle">
                    <p class="home-service__circle--name home-service__circle--name_three">
                        既存サイトの仕様変更<br>
                        機能の追加 
                    </p>
                </div>
            </li>
            <!-- /.home-service__item03 -->

            <!-- /.home-service__item -->
        </ul>
        <!-- /.home-service__list -->
        <div class="home-service__action">
            <p class="home-service__action--lead">
                「こんなこと頼んでもいいのかな？」<br class="home-service__br">と思ったら無料相談へ
            </p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-service__action--btn">
                相談する
            </a>
        </div>
        <!-- /.home-service__action -->
    </section>
    <!-- /.home-service wrapper -->

    <section class="home-works inner">
        <h2 class="home-works__title">
            <span class="home-works__title--main">
                case&nbspstudy
            </span>
            <span class="home-works__title--sub">
                WEBサイト事例
            </span>
        </h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- swiper-slide -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>" class="home-works__link">
                        <?php the_title() ?>&nbsp;様
                    </a> 
                    <a href="<?php the_permalink(); ?>">
                        <div class="home-works__image">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-cocoro-def.png?20220418" alt="WEB制作フリーランス、ココロのデフォルト画像" />
                                </a>
                            <?php endif;?>
                        </div>
                    </a>
                    <div class="home-works__other">
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="home-works__other--time"><?php the_time('Y-m-d'); ?></time>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper-container -->
        <div class="home-works__btn">
            <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="home-works__btn--link">
                制作実績一覧へ
            </a>
        </div>
    </section>
    <!-- /.home-works wrapper -->

    <!-- home-flow -->
    <section class="home-flow">
        <div class=" inner">
            <h2 class="home-flow__title">
                <span class="home-flow__title--main">
                    flow
                </span>
                <span class="home-flow__title--sub">
                    お問い合わせから納品までの流れ
                </span>
            </h2>
            <div class="home-flow__container">
                <div class="home-flow__box">
                    <p class="home-flow__box--lead">
                        1.お問い合わせ
                    </p>
                    <p class="home-flow__box--text">
                        まずはお気軽にお問合せください。
                    </p>
                </div>
                <span class="home-flow__triangle"></span>
                <div class="home-flow__box">
                    <p class="home-flow__box--lead">
                        2.打ち合わせ・データ入稿
                    </p>
                    <p class="home-flow__box--text">
                        打ち合わせ等を行ない、デザインやデータなどをご入稿していただきます。
                    </p>
                </div>
                <span class="home-flow__triangle"></span>
                <div class="home-flow__box">
                    <p class="home-flow__box--lead">
                        3.コーディング
                    </p>
                    <p class="home-flow__box--text">
                        進捗報告をこまめに行いながらホームページ制作を行います。
                    </p>
                </div>
                <span class="home-flow__triangle"></span>
                <div class="home-flow__box">
                    <p class="home-flow__box--lead">
                        4.テスト確認
                    </p>
                    <p class="home-flow__box--text">
                        テスト環境にて、不具合等がないか確認いたします
                    </p>
                </div>
                <span class="home-flow__triangle"></span>
                <div class="home-flow__box">
                    <p class="home-flow__box--lead">
                        5.本番納品
                    </p>
                    <p class="home-flow__box--text">
                        ZIPファイル・本番サーバーへアップロードいたします。
                    </p>
                </div>
            </div>
            <!-- /.home-flow__container -->
        </div>
        <!-- inner -->
    </section>
    <!-- /.home-flow -->

    <!-- home-news -->
    <section class="home-news inner">
        <div class="home-news__container">
            <h2 class="home-news__title">
                <span class="home-news__title--main">
                    news
                </span>
                <span class="home-news__title--sub">
                    お知らせ
                </span>
            </h2>
            <div class="home-news__table">
                <?php $args = array(
                    'numberposts' => 2,
                    'post_type' => 'news'
                );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <ul class="home-news__item">
                    <li class="home-news__list">
                        <a href="<?php the_permalink(); ?>" class="home-news__article">
                            <time class="home-news__time" datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time(get_option('date_format')); ?>
                            </time>
                            <p class="home-news__lead">
                                <?php the_title(); ?>
                            </p>
                            <picture class="home-news__arrow">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_01.png?20220418" alt="#!">
                            </picture>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <li>記事が見つかりませんでした。</li>
                        <?php endif;
                        wp_reset_postdata();
                        ?>
                </ul>
            </div>
            <!-- /.home-news__table -->
            <div class="home-news__btn">
                <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="home-news__btn--link">
                    お知らせ一覧へ
                </a>
            </div>
        </div>
        <!-- /.home-news__container -->
    </section>
    <!-- /.home-news -->

    <section class="home-contact">
        <div class=" inner">
            <h2 class="home-contact__title">
                <span class="home-contact__title--main">
                    contact&nbspus
                </span>
                <span class="home-contact__title--sub">
                    お問い合わせ
                </span>
            </h2>
            <div class="home-contact__contents">
                <div class="home-contact__text-box">
                    <p class="home-contact__text-box--text">
                        COCOROでは、コミュニケーションを大切にしております。
                    </p>
                    <p class="home-contact__text-box--text">
                        お客様の"大切な想い"を第一に考え、WEB制作のご提案をさせていただけたらと思います。                            
                    </p>
                    <p class="home-contact__text-box--text">
                        コーディングや、既にお手元にあるサイトのWordpress化はもちろん、「この部分だけデザインを変えたい」「要件・日程が決まっていない」など、ふんわりとした内容でも、大歓迎です。
                    </p>
                    <p class="home-contact__text-box--text">
                        無料相談も承っておりますので、まずはお気軽にご相談ください。
                    </p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-contact__btn">
                        お問い合わせはこちら
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>