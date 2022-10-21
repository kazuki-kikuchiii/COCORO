<?php get_header( 'noLoading' ); ?>
    <main>
        <section class="contact-kv js-sticky">
            <div class="contact-kv__bg">
                <div class="contact-kv__bg_s wrapper">
                    <h1 class="contact-kv__title">
                        <span class="contact-kv__title--main">
                            contact&nbspus
                        </span>
                        <span class="contact-kv__title--sub">
                            お問い合わせ
                        </span>
                    </h1>
                </div>
            </div>
        </section>
        <!-- /.contact-kv -->

        <!-- breadcrumb -->
        <div class="breadcrumb">
            <div class="wrapper">
                <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbspお問い合わせ
            </div>
        </div>
        <!-- /.breadcrumb -->

        <!-- form -->
        <section class="form inner" >
            <h2 class="form__title">
                <span class="form__title--main">
                    form
                </span>
                <span class="form__title--sub">
                    お問い合わせフォーム
                </span>
            </h2>
            <div class="form__textbox">
                <p class="form__textbox--text">
                「ホームページを作りたいけど、何から手を付けていいのか分からない」
                </p>
                <p class="form__textbox--text">
                「サイトが古くなってきたのでリニューアルしたい」
                </p>
                <p class="form__textbox--text">
                「デザインはあるので、コーディングを依頼したい」
                </p>
                <p class="form__textbox--text">
                「作る予定はあるけど、お話だけ聞いてみたい」など
                </p>
                <p class="form__textbox--last-text">
                    ふんわりとした内容でも大歓迎です！
                </p>
            </div>

            <!-- <h3 class="form__sec-title">
                1.&nbsp;ご相談内容を<br class="form__sec-title_br">選択してください
            </h3>
            <div class="form__contents-btn">
                <div class="form__choice js-active">
                    <span class="form__choice--arrow"></span>
                    <p class="form__choice--title">
                        新規ホームページ制作
                    </p>
                </div>
                <div class="form__choice">
                    <span class="form__choice--arrow"></span>
                    <p class="form__choice--title">
                        ホームページの
                        <br class="form__choice--arrow_br">
                        リニューアル・改修
                    </p>
                </div>
                <div class="form__choice">
                    <span class="form__choice--arrow"></span>
                    <p class="form__choice--title">
                        コーディング代行
                    </p>
                </div>
                <div class="form__choice">
                    <span class="form__choice--arrow"></span>
                    <p class="form__choice--title">
                        その他
                    </p>
                </div>
            </div> -->

            <h3 class="form__sec-title">
                お問い合わせ内容を<br class="form__sec-title_br">ご入力ください
            </h3>

            <!-- form__area -->
            <div class="form__switch js-active">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php echo do_shortcode('[mwform_formkey key="40"]'); ?>
                <?php endwhile; endif; ?>
            </div>
            <!-- /.form__area -->

        </section>
        <!--/.form -->
    </main>
<?php get_footer(); ?>


<!-- <select class="form-price" name="form-price" id="form-price"><option value="">ご予算を選択してください</option>
<option value="～10万円">～10万円</option>
<option value="11-20万円">11-20万円</option>
<option value="21-30万円">21-30万円</option>
<option value="31-50万円">31-50万円</option>
<option value="50-100万円">50-100万円</option>
<option value="100万円～">100万円～</option>
</select> -->