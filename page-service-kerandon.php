<?php
/*
Template Name: ケランドンページ
*/
if (!defined('ABSPATH')) exit;
get_header(); ?>

<main class="service">

    <!-- メインビジュアル -->
    <section class="mv">
        <div class="mv_inner">
            <figure class="mv_logo">
                <img src="<?= esc_url(get_theme_file_uri('/images/service-kerandon/service_logo.svg')); ?>" alt="玉乃屋ロゴ">
            </figure>
            <div class="mv_copy">
                <p>韓国で話題のスイーツ</p>
                <p>まるごと卵×甘い生地</p>
                <p>満足感たっぷり</p>
            </div>
        </div>

        <figure class="beneGroup">
            <img src="<?= esc_url(get_theme_file_uri('/images/service-kerandon/benegroup_text.svg')); ?>" alt="Bene group">
        </figure>


        <div class="mv_image">
            <figure class="sp_none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_mv1.jpg" alt="玉乃屋メインビジュアル1">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_mv2.jpg" alt="玉乃屋メインビジュアル2">
            </figure>
        </div>
    </section>


    <!-- コンセプト -->
    <section class="concept">
        <h2 class="concept_title">焼きたてケランパン<br>卵と甘い香りのひと時を</h2>

        <div class="concept_text">
            <p class="concept_text_container">
                手のひらサイズで気軽に楽しめる、 <br>
                韓国屋台発の人気スイーツ。
            </p>
            <p class="concept_text_container">
                ふんわり甘い生地に卵がまるごと入った<br>
                外はサクッ、中はとろりの食感が魅力。
            </p>
            <p class="concept_text_container">
                定番プレーンはもちろん、<br>
                チーズやツナなどのアレンジもご用意。
                気分に合わせて選べます。
            </p>
            <p class="concept_text_container">
                フォトジェニックでかわいい見た目だから、
                写真にも映えて、シェアしたくなるおいしさ。
            </p>
        </div>
        <figure class="concept_image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service.jpg" alt="玉乃屋の内観">
        </figure>
    </section>



    <!-- スタッフ紹介 -->
    <!-- <section class="staff">
        <div class="staff_wrapper">
            <div class="staff_item">
                <figure class="staff_main_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff.jpg" alt="玉乃屋スタッフ写真">
                </figure>
                <div class="staff_title">
                    <div class="loop_item">
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff_title.svg" alt="">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff_title.svg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="staff_copy">
                    <p class="staff_main_copy">“いらっしゃいませ”の<br>
                        声がそろう瞬間が好き！</p>
                    <p class="staff_sub_copy">一体感のある職場で、笑顔と元気を届けています。</p>
                </div>
            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">玉乃屋のお客様に対する接客方針はありますか？</p>
                    <p class="staff_answer">私たちは「一組一組のお客様に寄り添うこと」を大切にしています。
                        落ち着いた空間でゆったりとお食事を楽しんでいただけるよう、笑顔でのご対応や心配りを徹底しています。お料理のご説明やおすすめのご提案も行い、お客様に「また来たい」と思っていただける接客を心がけています。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff1.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">スタッフ同士やお店の雰囲気はどうですか？</p>
                    <p class="staff_answer">スタッフ同士の仲が良く、チームワークを大切にしています。
                        わからないことがあってもすぐに相談できる雰囲気で、新人の方も安心して働ける環境です。仕事中はしっかりと連携しつつ、休憩中や終業後は和やかに会話がはずむアットホームなお店です。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff2.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客さまやこれから入社する方へメッセージを</p>
                    <p class="staff_answer">玉乃屋は、料理や接客を通して「特別な時間」をお届けする場所です。
                        これから一緒に働く仲間にも、楽しみながら成長できる環境を用意しています。未経験でも安心して挑戦できるようにサポートしますので、ぜひ一緒にお店を盛り上げていきましょう。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff3.jpg" alt="スタッフ写真2">
                </figure>

            </div>

        </div>
        <div class="threePhoto">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff4.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff5.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/staff6.jpg" alt="スタッフ写真2">
            </figure>
        </div>
    </section> -->


    <!-- SNS -->
    <section class="sns">
        <h2 class="sns_title">ケランドン 公式コンテンツ</h2>
        <div class="sns_list">
            <!-- <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/contents_line.png" alt="LINE公式">
                </figure>
                <p class="sns_item_name">公式LINE</p>
                <p class="sns_item_account">ID:abc-def</p>
            </div> -->
            <div class="sns_item">
                <a href="https://www.instagram.com/kerandon_koreansnack/" target="_blank"
                    rel="noopener noreferrer">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/contents_insta.png" alt="Instagram公式">
                        <p class="sns_item_name">公式Instagram</p>
                        <p class="sns_item_account">@kerandon_koreansnack</p>
                    </figure>
                </a>
            </div>
            <div class="sns_item">
                <a href="https://www.instagram.com/bene_corp_recruit/" target="_blank"
                    rel="noopener noreferrer">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/bene_insta.png" alt="求人情報">
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

                <a class="news_link" href="<?php echo esc_url(home_url('/category/kerandon')); ?>">
                    <span>お知らせ一覧へ</span>
                    <img class="news_link_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
                </a>
            </div>

            <ul class="news_list">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'category_name' => "kerandon",
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_image1.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_image2.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_image3.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-kerandon/service_image4.jpg" alt="料理の写真">
        </figure>
    </div>


    <!-- 店舗情報 -->
    <!-- <section class="shopinfo">
            <div class="shopinfo_inner">
                <h2 class="shopinfo_title">店舗情報</h2>
                <div class="shopinfo_container">
                    <table class="shopinfo_item">
                        <tr>
                            <th>住所</th>
                            <td>大阪市浪速区日本橋5丁目13-9 三越ビル1F</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>地下鉄堺筋線「日本橋駅」より徒歩5分、「長堀橋駅」より徒歩8分<br>
                                地下鉄・阪神・近鉄「なんば駅」より徒歩7分</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>テキストが入ります
                            </td>

                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>テキストが入ります/td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <th>予算</th>
                            <td>350円～500円</td>
                        </tr>
                        <tr>
                            <th>支払い方法</th>
                            <td>現金・カード可（VISA、Master、JCB、A MEX、Diners）</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="shopinfo_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.4911186860502!2d135.50412237578112!3d34.65560009712064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e767464fc691%3A0xfc8a354d13e8ff3e!2z44CSNTU2LTAwMDUg5aSn6Ziq5bqc5aSn6Ziq5biC5rWq6YCf5Yy65pel5pys5qmL77yV5LiB55uu77yR77yT4oiS77yZ!5e0!3m2!1sja!2sjp!4v1756866144141!5m2!1sja!2sjp" width="600" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section> -->

</main>

<?php get_footer(); ?>