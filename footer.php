        <!-- footer -->
        <footer>
            <div class="home-footer wrapper">
                <!-- home-footer__box -->
                <div class="home-footer__box">
                    <div class="home-footer__left">
                        <h2 class="home-footer__logo">
                            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png?20220418" alt="cocoroのロゴ画像"></a>
                        </h2>
                        <h3 class="home-footer__position">
                            愛知県のweb制作フリーランス
                        </h3>
                        <table class="home-footer__table">
                            <tbody>
                                <tr class="home-footer__tr">
                                    <td class="home-footer__tr--td">
                                        営業日
                                    </td>
                                    <td class="home-footer__tr--td">
                                        平日(月～金)
                                    </td>
                                </tr>
                                <tr class="home-footer__tr">
                                    <td class="home-footer__tr--td">
                                        営業時間
                                    </td>
                                    <td class="home-footer__tr--td">
                                        平日(09:00~18:00)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="home-footer__right">
                        <ul class="home-footer__list">
                            <li class="home-footer__item">
                                <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">制作実績</span></a>
                            </li>
                            <li class="home-footer__item">
                                <a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">料金一覧
                                </span></a>
                            </li>
                            <li class="home-footer__item">
                                <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">よくある質問</span></a>
                            </li>
                            <li class="home-footer__item">
                                <a href="<?php echo esc_url( home_url( '/greeting' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">私について</span></a>
                            </li>
                        </ul>
                        <ul class="home-footer__list">
                            <li class="home-footer__item home-footer__item_other">
                                <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">お知らせ</span></a>
                            </li>
                            <li class="home-footer__item home-footer__item_other">
                                <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" class="home-footer__item--link"><span class="home-footer__item--text">プライバシーポリシー</span></a>
                            </li>
                            <li class="home-footer__cta">
                                <div class="home-footer__cta-box">
                                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-footer__person">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 35.038 35.038"><defs><style>.a{fill:none;stroke:#1a1a1a;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><path class="a" d="M23.519,23.519a8.76,8.76,0,1,0-8.76-8.76A8.757,8.757,0,0,0,23.519,23.519Zm0,4.38C17.672,27.9,6,30.833,6,36.658v4.38H41.038v-4.38C41.038,30.833,29.366,27.9,23.519,27.9Z" transform="translate(-6 -6)"/></svg>
                                        <p>お問い合わせ</p>
                                    </a>
                                    <!-- <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="home-footer__mail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 46.833 37.093"><defs><style>.a{fill:none;stroke:#1a1a1a;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;}</style></defs><g transform="translate(-0.891 -4.5)"><path class="a" d="M7.262,6H41.354a4.274,4.274,0,0,1,4.262,4.262v25.57a4.274,4.274,0,0,1-4.262,4.262H7.262A4.274,4.274,0,0,1,3,35.831V10.262A4.274,4.274,0,0,1,7.262,6Z"/><path class="a" d="M45.616,9,24.308,26.077,3,9" transform="translate(0 1.879)"/></g></svg>
                                        <p>無料相談</p>
                                    </a> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.home-footer__right -->
                </div>
                <!-- /.home-footer__box -->
                <small class="home-footer__copy">
                    Copyright © 2022 COCORO All Rights Reserved.
                </small>
            </div>
            <!-- /.home-footer -->
        </footer>
        <?php wp_footer() ?>
        <!-- /.footer -->
        </div>
        <!-- /.loading hidden -->
    </body>
</html>