<?php get_header( 'noLoading' ); ?>
        <main>
            
            <span class="header__space"></span>
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="container">
                    <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbsp制作事例
                </div>
            </div>
            <!-- /.breadcrumb -->

            <section class="discussion">
                <div class="discussion__bg">
                    <h2 class="discussion__title">
                        ホームページのご相談
                    </h2>
                    <p class="discussion__text">
                        ホームページについてお気軽にご相談ください。
                    </p>
                    <p class="discussion__text">
                        お客様の業界・状況などをお伺いし
                        <br>
                        <span class="discussion__text--span">「ホームページ集客のアイデア」</span>を<br class="discussion__text_br-sp">ご提案いたします。
                    </p>
                    <div class="discussion__link-box">
                        <p class="discussion__link-box--text">
                            \ビデオ会議も可/
                        </p>
                        <a class="discussion__link-box--link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img-parts/icon-arrow_01.png?20220803">
                            無料相談を試してみる
                        </a>
                    </div>
                    <div class="discussion__pic">
                        <img class="discussion__pic--img" src="<?php echo get_template_directory_uri(); ?>/img/img-page/works/discussion_01.png?20220803">
                    </div>
                </div>
            </section>

            <section class="works">
                <div class="works__inner">    
                    <h2 class="works__title">
                        <span class="works__title--main">
                            works
                        </span>
                        <span class="works__title--sub">
                            WEBサイト事例
                        </span>
                    </h2>
                    <div class="works__lead">
                        <p class="works__lead--text">
                            制作事例をご紹介しております。これから制作するホームページのご参考にご覧ください。
                        </p>
                        <!-- /.works__lead--text -->
                        <p class="works__lead--text">
                            また、ここには掲載していない会社様、個人様を通しての案件もございますので、<br class="works__lead--text_br-pc">まずはお問い合わせいただけたらと思います。
                        </p>
                        <!-- /.works__lead--text -->
                    </div>
                    <ul class="works__list">
                        <!-- works__item -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li class="works__item">
                            <a class="works__item--link" href="<?php the_permalink(); ?>">
                                <div class="works__image">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-cocoro-def.png?20220418" alt="WEB制作フリーランス、ココロのデフォルト画像" />
                                        </a>
                                    <?php endif;?>
                                </div>
                                <h3 class="works__item--title">
                                    <?php the_title() ?>
                                </h3>
                                <p class="works__item--prefectures">
                                    <?php the_field('prefectures'); ?>
                                    <?php if(get_field('municipality-1')): ?>
                                        &thinsp;,&nbsp;<?php the_field('municipality-1'); ?>
                                    <?php endif; ?>
                                    <?php if(get_field('municipality-2')): ?>
                                        <?php the_field('municipality-2'); ?>
                                    <?php endif; ?>
                                    <?php if(get_field('municipality-3')): ?>
                                        <?php the_field('municipality-3'); ?>
                                    <?php endif; ?>
                                </p>
                            </a>
                        </li>
                        <?php endwhile; endif; ?>
                        <!--/.works__item -->
                    </ul>
                    <!-- /.works__list -->
                </div>
                <!-- /.works__inner -->
            </section>
            <!-- /.works -->

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
                        <!-- /.home-contact__text-box -->
                    </div>
                    <!-- /.home-contact__contents -->
                </div>
                <!-- /.inner -->
            </section>
            <!-- /.home-contact -->
        </main>
        <?php get_footer(); ?>