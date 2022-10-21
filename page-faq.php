<?php get_header( 'noLoading' ); ?>
    <main>
        <section class="faq-kv js-sticky">
            <div class="faq-kv__bg">
                <div class="faq-kv__bg_s wrapper">
                    <h1 class="faq-kv__title">
                        <span class="faq-kv__title--main">
                            faq
                        </span>
                        <span class="faq-kv__title--sub">
                            よくある質問
                        </span>
                    </h1>
                </div>
            </div>
        </section>
        <!-- /.faq-kv -->

        <!-- breadcrumb -->
        <div class="breadcrumb">
            <div class="wrapper">
                <a href="<?php echo esc_url( home_url()); ?>" class="breadcrumb__home">ホーム</a>&nbsp>&nbspよくある質問
            </div>
        </div>
        <!-- /.breadcrumb -->
        <section class="faq">
            <div class=" inner">
                <h2 class="faq__title">
                    <span class="faq__title--main">
                        faq
                    </span>
                    <span class="faq__title--sub">
                        よくある質問
                    </span>
                </h2>
                <div class="customers__box">
                    <ul class="customers__list">
                        <li class="customers__item">
                            <button class="customers__button">
                                <a href="#delivery" class="customers__button--link">
                                    <span class="customers__button--link_arrow"></span>
                                    納品について
                                </a>
                            </button>
                        </li>
                        <!-- /.customers__item -->
                        <li class="customers__item">
                            <button class="customers__button">
                                <a href="#connection" class="customers__button--link">
                                    <span class="customers__button--link_arrow"></span>
                                    連絡・相談について
                                </a>
                            </button>
                        </li>
                        <!-- /.customers__item -->
                        <li class="customers__item">
                            <button class="customers__button">
                                <a href="#other" class="customers__button--link customers__button--link_other">
                                    <span class="customers__button--link_arrow"></span>
                                    その他
                                </a>
                            </button>
                        </li>
                        <!-- /.customers__item -->
                    </ul>
                    <!-- /.customers__list -->
                </div>
                <!-- /.customers__box -->
            </div>
            <!-- /.inner -->
        </section>
        <!-- /.faq -->

        <!-- delivery -->
        <section class="delivery inner" id="delivery">
            <h2 class="delivery__title">
                納品について
            </h2>
            <ul class="accordion__list">
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        納品方法はどのような対応が可能ですか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            ZIPファイル、本番環境へのアップロード（サイト公開）にて納品させていただきます。お客様のご希望に沿う形での納品をいたしますので、何なりとお申し付けください。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        ホームページ制作をご依頼した場合の納品までの目安を教えていただきたいです。
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            1か月～2か月(お打ち合わせ・ご確認なども含む)を目安にお考え下さい。また、ホームページの機能やページ数により変動いたします。<span class="accordion__answer--deco">正確な納品日につきましては、お見積り時にお伝えいたします</span>ので、お気軽にお問い合わせください。お見積りは無料でございます。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        コーディング代行をご依頼した場合の納品までの目安を教えていただきたいです。
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            1ページあたり3日ほどお時間を頂いております。<br>例)8ページの場合、24日を目安としてお考え下さい。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        納期を守っていただけますか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            はい。遅れる事が無いよう万全の体制で努めて参ります。万が一、納期に遅れるような事態(納品できる可能性が100%ではなくなった)の場合は、すぐにご連絡いたします。ただし、<span class="accordion__answer--deco">お客様でご用意していただく素材のご入稿や、各工程でのお客様の確認、フィードバックが予定より遅延した場合、当初予定の日程を再度、変更・調整させていただく場合がございます。</span>ご了承ください。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        至急、コーディングを行っていただきたいのですが・・・
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            至急のコーディングも承っておりますが、内容、納期などをお伺いしてからの判断となりますので、一度、お問い合わせしていただけたらと思います。<span class="accordion__answer--deco">原則、24時間以内にご返信しております。</span>
                        </p>
                    </div>
                </li>
                <!-- /.accordion__item -->
            </ul>
            <!-- /.accordion__list -->
        </section>
        <!-- /.delivery -->

        <!-- connection -->
        <section class="connection inner" id="connection">
            <h2 class="connection__title">
                ご連絡・相談について
            </h2>
            <ul class="accordion__list">
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        連絡手段について教えてください
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            LINE・Slack・ChatWork・Zoom・whereby・skypeなど、お客様のご希望に沿った連絡手段に対応いたします。お気軽にお申し付けください。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        連絡が取れる時間帯はいつですか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            原則として、平日:月～金/9:00～18:00となっておりますが、土日祝でもご連絡は可能です。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        ホームページについて何も分からないのですが大丈夫でしょうか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                        <span class="accordion__answer--deco">はい！大丈夫です。ホームページ完成後も、使い方などをレクチャーいたしますので、ご安心ください。</span>「こんなホームページが欲しい」「予算と必要な機能が釣り合わない→代替案のご提案」「ホームページの一部を直してほしい」「Wordpressの操作が分からない」「ブログを作りたいけど、何をどうすればいいのか全く分からない→1から丁寧にお伝えいたします」など、お客様の悩みを解決出来ればと思います。
                        </p>
                    </div>
                </li>
            </ul>
        </section>
        <!-- /.connection -->

        <!-- skill -->
        <section class="other inner" id="other">
            <h2 class="other__title">
                その他
            </h2>
            <ul class="accordion__list">
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        開発環境・検証ブラウザについて教えてください
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            主にVScodeを使用し、ブラウザの確認は、制作時の最新版「Chrome・safari・Edge」での確認を行っております。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        検証端末について教えてください
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            実機確認は「Mac book Air」「iPhone SE」「Windows11」「ipad PRO」「Android」にて行っております。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        稼働日数、稼働時間はどれくらいですか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            1日8時間～10時間、基本的に毎日稼働しております。当方、フリーランスとして活動しており、休日の場合は、<a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="accordion__answer--link">「お知らせ」</a>より事前に告知しております。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        PhotoshopやIllustratorは使用できますか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            はい。簡単な加工(切り抜き、合成)を行うことが可能です。
                            ロゴの作成は専門外となりますので、プロのデザイナーさんをご紹介させていただけたらと思います。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        デザインを元にコーディングからWordpress化までをお願いできますか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            はい。当方の一番得意とする分野ですので、安心してお任せください。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        パソコンのセキュリティー対策の取り組みは何かしていますか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            実施していることは、パソコンは常時パスワードをかける、ハードディスクの暗号化しております。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        メールが24時間経っても届かないのですが・・・
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            大変、申し訳ございません。<span class="accordion__answer--deco">迷惑フォルダーに入っている可能性</span>がございます。一度ご確認をお願いいたします。48時間経過しても届いていない場合は申し訳ありませんが、再度、送信していただきますようお願い申し上げます。
                        </p>
                    </div>
                </li>
                <li class="accordion__item">
                    <h3 class="accordion__question">
                        ブラインドタッチは出来ますか？
                    </h3>
                    <div class="accordion__box">
                        <p class="accordion__answer">
                            はい。インターネットサービスの「寿司打」では上級コース￥16000、e-typingでは377pt(ランク:comet)です。平均1秒/5.7打。
                        </p>
                    </div>
                </li>
            </ul>
        </section>
        <!-- /.other -->
        <div class="faq__after inner">
            <p class="faq__after--text">
                上記についてのご不明な点、上記以外での質問等ございましたら<br class="faq__after--text_br">
                お問い合わせフォームよりお気軽にご相談ください。 
            </p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="faq__after--link">
                ご質問・お問い合わせはこちら
            </a>
        </div>
    </main>
<?php get_footer(); ?>