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

        <div class="contactThanks inner">
            <p class="contactThanks__lead">
                お問い合わせ<br class="contactThanks__lead_br-sp">ありがとうございます。
            </p>
            <p class="contactThanks__text">
                「自動返信メール」を送信しております。<br class="contactThanks__text_br-sp">
                ご確認のほど、お願いいたします。
            </p>
            <p class="contactThanks__text">
                ※5分経過しても、自動返信メールが届かない場合、<br class="contactThanks__text_br">
                メールアドレスが間違っている可能性がございますのでお手数ですが再度ご記入ください。
            </p>
        </div>
        <!-- /.contactThanks -->
    </main>
<?php get_footer(); ?>