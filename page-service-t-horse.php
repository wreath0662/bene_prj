<?php
/*
Template Name: T-HORSEページ
*/
if (!defined('ABSPATH')) exit;
get_header(); ?>

<main class="service">

    <!-- メインビジュアル -->
    <section class="mv">
        <div class="mv_inner">
            <figure class="mv_logo">
                <img src="<?= esc_url(get_theme_file_uri('/images/service-t-horse/service_logo.svg')); ?>" alt="玉乃屋ロゴ">
            </figure>
            <div class="mv_copy">
                <p>理想の一台に出会えるのは</p>
                <p>全国オークション×プロ代行</p>
                <p>購入から納車までワンストップ</p>
            </div>
        </div>

        <figure class="beneGroup">
            <img src="<?= esc_url(get_theme_file_uri('/images/service-t-horse/benegroup_text.svg')); ?>" alt="Bene group">
        </figure>


        <div class="mv_image">
            <figure class="sp_none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv1.jpg" alt="玉乃屋メインビジュアル1">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv2.jpg" alt="玉乃屋メインビジュアル2">
            </figure>
        </div>
    </section>


    <!-- コンセプト -->
    <section class="concept">
        <h2 class="concept_title">全国オークション対応<br>安心して選ぶ理想の1台を</h2>

        <div class="concept_text">
            <p class="concept_text_container">
                初めての方でも安心！ <br>
                プロがご希望に合った車両を代行落札いたします。
            </p>
            <p class="concept_text_container">
                店頭に並ばない希少車や、コストを抑えたお得な車まで幅広く対応。<br>
                中間マージンを省いた透明性のある価格でご提供できるのもポイントです。
            </p>
            <p class="concept_text_container">
                落札後は名義変更・車検・整備・納車までトータルでサポート。
            </p>
            <p class="concept_text_container">
                安心と納得のサービスで、<br>
                長くお付き合いいただけます。
            </p>
        </div>
        <figure class="concept_image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service.jpg" alt="玉乃屋の内観">
        </figure>
    </section>



    <!-- スタッフ紹介 -->
    <section class="staff">
        <div class="staff_wrapper">
            <div class="staff_item">
                <figure class="staff_main_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff.jpg" alt="スタッフ写真">
                </figure>
                <div class="staff_title">
                    <div class="loop_item">
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff_title.svg" alt="">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff_title.svg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="staff_copy">
                    <p class="staff_main_copy">安心と信頼を届ける<br>
                        オークション代行</p>
                    <p class="staff_sub_copy">お客様に最適な一台を見つけることが、私たちの使命です。</p>
                </div>
            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客様に対する接客方針はありますか？</p>
                    <p class="staff_answer">車は一台一台に個性があり、お客様が求める条件もそれぞれ異なります。だからこそ「ご予算・用途・好み」に合わせた最適なご提案を心がけています。オークションの専門知識を活かし、安心して任せていただけるよう誠実に対応しています。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff1.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">スタッフ同士やお店の雰囲気はどうですか？</p>
                    <p class="staff_answer">小規模だからこそ風通しがよく、スタッフ全員が意見を出し合える雰囲気です。車が好きなメンバーが集まっているので、オークションの情報交換や新しい車種の話題で盛り上がることも多いです。堅苦しさはなく、前向きに挑戦できる環境です。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff2.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客さまやこれから入社する方へメッセージを</p>
                    <p class="staff_answer">T-HORSEは「安心して車を購入できるオークション代行サービス」を目指しています。初めてオークションに挑戦する方も、車が好きで仕事にしたい方も大歓迎です。信頼を第一に、お客様にとって一番のパートナーであり続けたいと思っています。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff3.jpg" alt="スタッフ写真2">
                </figure>

            </div>

        </div>
        <div class="threePhoto t-horsePhoto">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff4.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff5.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff6.jpg" alt="スタッフ写真2">
            </figure>
        </div>
    </section>


    <!-- SNS -->
    <!-- <section class="sns">
        <h2 class="sns_title">やきにく玉乃屋 公式コンテンツ</h2>
        <div class="sns_list">
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/contents_line.png" alt="LINE公式">
                </figure>
                <p class="sns_item_name">公式LINE</p>
                <p class="sns_item_account">ID:abc-def</p>
            </div>
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/contents_insta.png" alt="Instagram公式">
                    <p class="sns_item_name">公式Instagram</p>
                    <p class="sns_item_account">@yakiniku_t-horse</p>
                </figure>
            </div>
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/bene_insta.png" alt="求人情報">
                </figure>
                <p class="sns_item_name">採用情報</p>
                <p class="sns_item_account">@bene_corp_recruit</p>
            </div>
        </div>
    </section> -->

    <!-- News -->
    <section class="news">
        <div class="news_inner">

            <div class="news_head">
                <figure class="news_title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/news_title.svg" alt="News">
                </figure>

                <a class="news_link" href="<?php echo esc_url(home_url('/category/t-horse')); ?>">
                    <span>お知らせ一覧へ</span>
                    <img class="news_link_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
                </a>
            </div>

            <ul class="news_list">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'category_name' => "t-horse",
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_image1.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_image2.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_image3.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_image4.jpg" alt="料理の写真">
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
                            <td>大阪府摂津市新在家1-22-46</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>大阪モノレール本線「南摂津駅」より徒歩13分</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>10:30~19:00
                            </td>

                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>不定休</td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td>06-6379-3925</td>
                        </tr>


                    </table>

                </div>
            </div>
            <div class="shopinfo_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9269.382734845123!2d135.56000178982958!3d34.775193857660305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e24f3c78d0d5%3A0x72c43a027f73c6ab!2zZ2FyYWdlIFQtSE9SU0Ug5pGC5rSl5bqX!5e0!3m2!1sja!2sjp!4v1756865334871!5m2!1sja!2sjp" width="600" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

</main>

<?php get_footer(); ?>