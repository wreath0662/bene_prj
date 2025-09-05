<?php
/*
Template Name: C-ONEページ
*/
if (!defined('ABSPATH')) exit;
get_header(); ?>

<main class="service">

    <!-- メインビジュアル -->
    <section class="mv">
        <div class="mv_inner">
            <figure class="mv_logo">
                <img src="<?= esc_url(get_theme_file_uri('/images/service-c-one/service_logo.svg')); ?>" alt="玉乃屋ロゴ">
            </figure>
            <div class="mv_copy">
                <p>非日常を楽しむひととき</p>
                <p>お酒×会話</p>
                <p>ワンランク上の夜をあなたに</p>
            </div>
        </div>

        <figure class="beneGroup">
            <img src="<?= esc_url(get_theme_file_uri('/images/service-c-one/benegroup_text.svg')); ?>" alt="Bene group">
        </figure>


        <div class="mv_image">
            <figure class="sp_none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_mv1.jpg" alt="玉乃屋メインビジュアル1">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_mv2.jpg" alt="玉乃屋メインビジュアル2">
            </figure>
        </div>
    </section>


    <!-- コンセプト -->
    <section class="concept">
        <h2 class="concept_title">遊ぶも、語るも<br>自由に過ごすバータイム</h2>

        <div class="concept_text">
            <p class="concept_text_container">
                お一人様からグループまで。<br>
                「歌って、遊んで、食べて、飲める。」
            </p>
            <p class="concept_text_container">
                ダーツにカラオケ、フードも揃う、<br>
                欲張りな夜を叶えるバーです。
            </p>
            <p class="concept_text_container">
                デートや少人数での宴会。<br>
                様々なシーンに
            </p>
            <p class="concept_text_container">
                カウンター越しに会話を楽しみながら、<br>
                お好みのカクテルやウイスキーを堪能。<br>
                日常を忘れさせる非日常の空間です。
            </p>
            <p class="concept_text_container">
                仕事帰りの一杯から、<br>
                仲間との華やかな時間まで。
            </p>
        </div>
        <figure class="concept_image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service.jpg" alt="玉乃屋の内観">
        </figure>
    </section>



    <!-- スタッフ紹介 -->
    <section class="staff">
        <div class="staff_wrapper">
            <div class="staff_item">
                <figure class="staff_main_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff.jpg" alt="スタッフ写真">
                </figure>
                <div class="staff_title">
                    <div class="loop_item">
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff_title.svg" alt="">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff_title.svg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="staff_copy">
                    <p class="staff_main_copy">フレンドリーで<br>
                        笑い声が絶えない職場</p>
                    <p class="staff_sub_copy">お客様にもスタッフにも、笑顔が広がるC-ONEの雰囲気。</p>
                </div>
            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客様に対する接客方針はありますか？</p>
                    <p class="staff_answer">お客様一人ひとりに合った距離感を大切にしています。
                        盛り上がりたい方には元気に、静かに飲みたい方には落ち着いて。
                        その時の気分に合わせて楽しんでいただけるよう心がけています。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff1.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">スタッフ同士やお店の雰囲気はどうですか？</p>
                    <p class="staff_answer">スすごくフレンドリーで、笑い声が絶えません。仕事終わりにみんなでダーツやカラオケを楽しむことも多いです。上下関係が厳しい雰囲気はなく、仲間という感じで働けます。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff2.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客さまやこれから入社する方へメッセージを</p>
                    <p class="staff_answer">C-ONEは遊ぶのも飲むのも楽しめるバーです。初めての方も緊張せず、気軽に扉を開けてみてください。一緒に楽しい時間を過ごしましょう！</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff3.jpg" alt="スタッフ写真2">
                </figure>

            </div>

        </div>
        <div class="threePhoto">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff4.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff5.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/staff6.jpg" alt="スタッフ写真2">
            </figure>
        </div>
    </section>


    <!-- SNS -->
    <section class="sns">
        <h2 class="sns_title">BAR C-ONE 公式コンテンツ</h2>
        <div class="sns_list">

            <div class="sns_item">
                <a href="https://www.instagram.com/amusement_bar_c_oneosaka/" target="_blank"
                    rel="noopener noreferrer">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/contents_insta.png" alt="Instagram公式">
                        <p class="sns_item_name">公式Instagram</p>
                        <p class="sns_item_account">@amusement_bar_<br class="sp-none">
                            c_oneosaka</p>
                    </figure>
                </a>
            </div>
            <div class="sns_item">
                <a href="https://www.instagram.com/bene_corp_recruit/" target="_blank"
                    rel="noopener noreferrer">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/bene_insta.png" alt="求人情報">
                    </figure>
                </a>
                <p class="sns_item_name">採用情報</p>
                <p class="sns_item_account">@bene_corp_recruit</p>
            </div>
        </div>
    </section>

    <!-- News -->
    <section class="news">
        <div class="news_inner">

            <div class="news_head">
                <figure class="news_title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/news_title.svg" alt="News">
                </figure>

                <a class="news_link" href="<?php echo esc_url(home_url('/category/c-one')); ?>">
                    <span>お知らせ一覧へ</span>
                    <img class="news_link_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
                </a>
            </div>

            <ul class="news_list">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'category_name' => "c-one",
                ));
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="news_item">
                            <a href="<?php the_permalink(); ?>" class="news_link_inner">
                                <div class="news_meta">
                                    <span class="news_date"><?php echo get_the_date('Y.m.d'); ?></span>
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'category');
                                    if (!empty($terms) && !is_wp_error($terms)) :
                                    ?>
                                        <span class="news_cat"><?php echo esc_html($terms[0]->name); ?></span>
                                    <?php endif; ?>
                                </div>
                                <span class="news_text"><?php the_title(); ?></span>
                            </a>
                        </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </ul>
        </div>
    </section>

    <!-- イメージ写真 -->
    <div class="imagePhoto">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_image1.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_image2.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_image3.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-c-one/service_image4.jpg" alt="料理の写真">
        </figure>
    </div>
    <figure>


        <!-- 店舗情報 -->
        <section class="shopinfo">
            <div class="shopinfo_inner">
                <h2 class="shopinfo_title">店舗情報</h2>
                <div class="shopinfo_container">
                    <table class="shopinfo_item">
                        <tr>
                            <th>住所</th>
                            <td>大阪市浪速区日本橋5-13-9 三越ビル1F</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>地下鉄堺筋線「恵美須町駅」5番出口より徒歩3分<br>
                                JR「今宮駅通天閣口」東口より徒歩12分</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>19:00～3:00 （料理L.O. 2:30 ドリンクL.O. 2:30）
                            </td>

                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>不定休</td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td>06-6214-0298</td>
                        </tr>
                        <tr>
                            <th>予算</th>
                            <td>3,000円～5,000円</td>
                        </tr>
                        <tr>
                            <th>支払い方法</th>
                            <td>現金・カード（VISA、Master、JCB、A MEX、Diners）<br>電子マネー（楽天Edy､WAON､Suica､PASMO､nanaco､ICOCA､iD､QUICPay）</td>
                        </tr>
                        <tr>
                            <th>席・設備</th>
                            <td>全席喫煙可／カラオケ／ダーツ</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="shopinfo_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.965160238654!2d135.502701976197!3d34.6555827856316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000df2423429885%3A0x4e6ce2984aafac52!2sAMUSEMENT%20BAR%20C-ONE!5e0!3m2!1sja!2sjp!4v1756864414422!5m2!1sja!2sjp" width="600" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>

</main>

<?php get_footer(); ?>