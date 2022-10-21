<?php get_header( 'noLoading' ); ?>
        <main>
            <section class="newsDetail js-sticky">
                <div class="newsDetail__bg">
                    <div class="newsDetail__bg_s wrapper">
                        <h1 class="newsDetail__title">
                            WEBサイト事例
                        </h1>
                    </div>
                </div>
            </section>
            <!-- /.newsDetail -->

            <!-- breadcrumb -->
            <div class="breadcrumb">
                <div class="wrapper">
                    <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbsp<a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="breadcrumb__news">WEBサイト事例</a>&nbsp>&nbsp<?php the_title(); ?>
                </div>
            </div>
            <!-- /.breadcrumb -->

            <section class="section-wrapper_r works-inner">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="news-article">
                    <div class="news-article__time">
                        <time class="news-article__time--text" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                    </div>
                    <div class="news-article__thumbnail">
                        <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-cocoro-def.png?20220418" alt="WEB制作フリーランス、ココロのデフォルト画像" />
                            </a>
                        <?php endif;?>
                    </div>
                    <!-- 記事の内容 ここから -->
                    <div class="news-article__writing-space">
                        <?php the_content(); ?>
                    </div>
                    <!-- /記事の内容 ここまで -->
                </article>
                <?php endwhile; endif; ?>
                <!-- /.article -->

                <!-- news-aside -->
                <aside class="news-aside">
                    <div class="news-aside__notice">
                        <div class="news-aside__notice--title">
                            最新のお知らせ
                        </div>
                        <ul class="news-aside__list">
                            <?php $args = array(
                                'posts_per_page' => 3,
                                'post_type' => 'news',
                                'order'=>'DESC',
                                'orderby'=>'post_date'
                            );
                                $posts = get_posts( $args );
                                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );
                            ?>
                            <li class="news-aside__item">
                                <a href="<?php the_permalink(); ?>" class="news-aside__link">
                                    <time class="news-aside__link--time" datetime="<?php the_time('Y-m-d'); ?>">
                                        <?php the_time('Y-m-d'); ?>
                                    </time>
                                    <p class="news-aside__link--title">
                                        <?php the_title(); ?>
                                    </p>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                                <li>記事が見つかりませんでした。</li>
                            <?php endif;
                                wp_reset_postdata();
                            ?>
                        </ul>
                        <!-- /.news-aside__list -->
                    </div>
                    <!-- /.news-aside__notice -->

                    <div class="news-aside__pickup">
                        <div class="news-aside__pickup--title">
                            ピックアップ
                        </div>
                        <ul class="news-aside__pickup--list">
                            <?php $args = array(
                                    'posts_per_page' => 3,
                                    'post_type' => 'post',
                                    'order'=>'DESC',
                                    'orderby'=>'post_date'
                                );
                                $posts = get_posts( $args );
                                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );
                            ?>
                            <li class="news-aside__pickup--item">
                                <a href="<?php the_permalink(); ?>" class="news-aside__pickup-link">
                                    <div class="news-aside__pickup-link--image">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-cocoro-def.png?20220418" alt="WEB制作フリーランス、ココロのデフォルト画像" />
                                            </a>
                                        <?php endif;?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="news-aside__pickup-link--title">
                                        <?php the_title(); ?>
                                    </a>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                                <li>記事が見つかりませんでした。</li>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <!-- /.news-aside__list -->
                    </div>
                    <!-- /.news-aside__notice -->
    
                </aside>
                <!-- /.news-aside -->
            </section>
            <!-- /section-wrapper -->

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