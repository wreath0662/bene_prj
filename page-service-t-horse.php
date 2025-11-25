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
                <img src="<?= esc_url(get_theme_file_uri('/images/service-t-horse/service_logo.svg')); ?>" alt="T-HORSEロゴ">
            </figure>
            <div class="mv_copy">
                <p>理想の一台に出会える</p>
                <p>カーライフの専属パートナー</p>
                <p>購入からメンテナンスまで</p>
            </div>
        </div>

        <figure class="beneGroup">
            <img src="<?= esc_url(get_theme_file_uri('/images/service-t-horse/benegroup_text.svg')); ?>" alt="Bene group">
        </figure>


        <div class="mv_image">
            <figure class="sp_none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv1.jpg" alt="T-HORSEメインビジュアル1">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv2.jpg" alt="T-HORSEメインビジュアル2">
            </figure>
        </div>

        <!-- スマホ用：Swiper -->
        <div class="swiper sp_only" id="serviceMvSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv2.jpg" alt="T-HORSEメインビジュアル1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/service_mv1.jpg" alt="T-HORSEメインビジュアル2">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    　

    <!-- コンセプト -->
    <section class="concept">
        <h2 class="concept_title t-horse_title">10年以上の経験とネットワークを活かし、<br>お客様にとって「本当に価値ある一台」を<br>お届けいたします</h2>

        <div class="concept_text t-horse_text">
            <p class="concept_text_container">
                中古車流通の知見に基づき、希少車から、コストパフォーマンスに優れた車両まで幅広くご提案。
            </p>
            <p class="concept_text_container">
                単に車を「買う」ではなく、ライフスタイルや用途、維持コストまで踏まえた最適な選択をサポートします。
            </p>
            <p class="concept_text_container">
                購入後も、整備・車検・各種メンテナンス・保険相談までワンストップで対応。日々のケアから万が一のトラブル時まで、安心して頼れるパートナーとしてお付き合いさせていただきます。
            </p>
            <p class="concept_text_container">
                あなたのカーライフの価値を最大化する、長く寄り添うモビリティパートナーです。
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
                    <p class="staff_main_copy">カーライフに寄り添う<br>
                        あなた専属の相談相手</p>
                    <p class="staff_sub_copy">理想の一台のご提案から、乗り続けるためのケアまで<br>安心して任せられる存在を目指します</p>
                </div>
            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客様に対する接客方針はありますか？</p>
                    <p class="staff_answer">クルマは、ただの移動手段ではなく、日々の暮らしに深く関わる存在です。
                        だからこそ、まずはお客様のお話をしっかり伺い、ライフスタイルや用途、将来的な維持コストまで踏まえたうえで、無理のない選択肢をご提案しています。
                        「売りたい車をすすめる」のではなく、
                        「お客様が安心して長く乗れる一台」を一緒に選ぶ。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff1.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">スタッフ同士やお店の雰囲気はどうですか？</p>
                    <p class="staff_answer">風通しがよく、スタッフ全員が意見を出し合える雰囲気です。車が好きなメンバーが集まっているので、オークションの情報交換や新しい車種の話題で盛り上がることも多いです。堅苦しさはなく、前向きに挑戦できる環境です。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-t-horse/staff2.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">T-HORSEが支持される理由とは？</p>
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