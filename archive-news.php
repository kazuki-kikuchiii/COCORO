<?php get_header( 'noLoading' ); ?>
    <main>
        <section class="news-kv js-sticky">
            <div class="news-kv__bg">
                <div class="news-kv__bg_s wrapper">
                    <h1 class="news-kv__title">
                        <span class="news-kv__title--main">
                            news
                        </span>
                        <span class="news-kv__title--sub">
                            COCOROからのお知らせ
                        </span>
                    </h1>
                </div>
            </div>
        </section>
        <!-- /.news-kv -->

        <!-- breadcrumb -->
        <div class="breadcrumb">
            <div class="wrapper">
                <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbspお知らせ
            </div>
        </div>
        <!-- /.breadcrumb -->

        <section class="news inner">
            <h2 class="news__title">
                <span class="news__title--main">
                    news
                </span>
                <span class="news__title--sub">
                    お知らせ一覧
                </span>
            </h2>
            <div class="news__container">
                <div class="news__table">
                    <ul class="news__item">
                        <?php $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'news'
                        );
                            $posts = get_posts( $args );
                            if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );
                        ?>
                        <li class="news__list">
                            <a href="<?php the_permalink(); ?>" class="news__article">
                                <time class="news__time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time(get_option('date_format')); ?>
                                </time>
                                <p class="news__lead">
                                    <?php the_title(); ?>
                                </p>
                                <picture class="news__arrow">
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
                <!-- /.news__table -->
            </div>
            <!-- /.news__container -->
            <!-- pager -->
            <div class="pager inner">
                <ul class="pager__list">
                    <li class="pager__list--item"><a class="pager__list--item-link" href="#!">1</a></li>

                    <!-- <li class="pager__list--item"><a class="pager__list--item-link" href="#!">2</a></li>
                    <li class="pager__list--item"><a class="pager__list--item-link" href="#!">3</a></li>
                    <li class="pager__list--item-space">…</li>
                    <li class="pager__list--item"><a class="pager__list--item-link" href="#!">5</a></li> -->

                </ul>
            </div>
            <!-- /pager -->
        </section>
        <!-- /.news -->

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
                        <a href="#" class="home-contact__btn">
                            お問い合わせはこちら
                        </a>
                    </div>
                    <!-- /.home-contact__text-box -->
                </div>
                <!-- /.home-contact__contents -->
            </div>
            <!-- /.inner -->
        </section>
        <!-- /.home-contact -->
    </main>
<?php get_footer() ?>