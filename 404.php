<?php get_header( 'noLoading' ); ?>
    <main>
        <section class="notFound-kv">
            <div class="notFound-kv__bg">
                <div class="notFound-kv__bg_s wrapper">
                    <h1 class="notFound-kv__title">
                        <span class="notFound-kv__title--main">
                            not&nbsp<br class="notFound-kv__title--main_br">found&nbsp404
                        </span>
                        <span class="notFound-kv__title--sub">
                            ページが見つかりませんでした。
                        </span>
                    </h1>
                </div>
            </div>
        </section>
        <!-- /.notFound-kv -->

        <!-- breadcrumb -->
        <div class="breadcrumb">
            <div class="wrapper">
                <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbspnot&nbspfound&nbsp404
            </div>
        </div>
        <!-- /.breadcrumb -->

        <div class="notFound inner">
            <p class="notFound__lead">
                お探しのページは<br class="notFound__lead_br-sp">見つかりませんでした。
            </p>
            <p class="notFound__text">
                アクセスをしようしたページは、削除・変更または利用できない可能性があります。
            </p>
            <p class="notFound__text">
                お手数をおかけしますが、以下のボタンよりホーム画面へ戻る、<br class="notFound__text_br">または下部のメニューより
                お探しいただけますようお願いいたします。
            </p>
            <div class="notFound__btn">
                <a href="<?php echo esc_url( home_url() ); ?>" class="notFound__btn--link">
                    ホームへ戻る
                </a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>