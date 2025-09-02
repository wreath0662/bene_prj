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
                <img src="<?= esc_url(get_theme_file_uri('/images/service-tamanoya/service_logo.svg')); ?>" alt="玉乃屋ロゴ">
            </figure>
            <div class="mv_copy">
                <p>個室で味わうのは</p>
                <p>極雌和牛× 厳選ワイン</p>
                <p>ワンランク上の時間</p>
            </div>
        </div>

        <figure class="beneGroup">
            <img src="<?= esc_url(get_theme_file_uri('/images/service-tamanoya/benegroup_text.svg')); ?>" alt="Bene group">
        </figure>


        <div class="mv_image">
            <figure class="sp_none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_mv1.jpg" alt="玉乃屋メインビジュアル1">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_mv2.jpg" alt="玉乃屋メインビジュアル2">
            </figure>
        </div>
    </section>


    <!-- コンセプト -->
    <section class="concept">
        <h2 class="concept_title">全席個室完備<br>ミナミで寛ぎのひと時を</h2>

        <div class="concept_text">
            <p class="concept_text_container">
                少人数OK ! <br>
                全席個室で2名～10名様までご利用可能。
            </p>
            <p class="concept_text_container">
                卓上には無煙ロースターを搭載。<br>
                煙が充満しないキレイな環境で<br>
                焼肉できるのもポイントです。
            </p>
            <p class="concept_text_container">
                デートや少人数での宴会。<br>
                様々なシーンにプライベートな空間として<br>
                各席仕切り付きの個室
            </p>
            <p class="concept_text_container">
                プライベート空間で<br>
                ゆったりお過ごしいただけます。
            </p>
        </div>
        <figure class="concept_image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service.jpg" alt="玉乃屋の内観">
        </figure>
    </section>



    <!-- スタッフ紹介 -->
    <section class="staff">
        <div class="staff_wrapper">
            <div class="staff_item">
                <figure class="staff_main_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff.jpg" alt="玉乃屋スタッフ写真">
                </figure>
                <div class="staff_title">
                    <div class="loop_item">
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff_title.svg" alt="">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff_title.svg" alt="Staff Interview">
                        </figure>
                        <figure class="loop_inner_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff_title.svg" alt="">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff1.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">スタッフ同士やお店の雰囲気はどうですか？</p>
                    <p class="staff_answer">スタッフ同士の仲が良く、チームワークを大切にしています。
                        わからないことがあってもすぐに相談できる雰囲気で、新人の方も安心して働ける環境です。仕事中はしっかりと連携しつつ、休憩中や終業後は和やかに会話がはずむアットホームなお店です。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff2.jpg" alt="スタッフ写真2">
                </figure>

            </div>
            <div class="staff_container">
                <div class="staff_text">
                    <p class="staff_question">お客さまやこれから入社する方へメッセージを</p>
                    <p class="staff_answer">玉乃屋は、料理や接客を通して「特別な時間」をお届けする場所です。
                        これから一緒に働く仲間にも、楽しみながら成長できる環境を用意しています。未経験でも安心して挑戦できるようにサポートしますので、ぜひ一緒にお店を盛り上げていきましょう。</p>
                </div>
                <figure class="staff_container_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff3.jpg" alt="スタッフ写真2">
                </figure>

            </div>

        </div>
        <div class="threePhoto">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff4.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff5.jpg" alt="スタッフ写真2">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/staff6.jpg" alt="スタッフ写真2">
            </figure>
        </div>
    </section>


    <!-- SNS -->
    <section class="sns">
        <h2 class="sns_title">やきにく玉乃屋 公式コンテンツ</h2>
        <div class="sns_list">
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/contents_line.png" alt="LINE公式">
                </figure>
                <p class="sns_item_name">公式LINE</p>
                <p class="sns_item_account">ID:abc-def</p>
            </div>
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/contents_insta.png" alt="Instagram公式">
                    <p class="sns_item_name">公式Instagram</p>
                    <p class="sns_item_account">@yakiniku_tamanoya</p>
                </figure>
            </div>
            <div class="sns_item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/bene_insta.png" alt="求人情報">
                </figure>
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

                <a class="news_link" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">
                    <span>お知らせ一覧へ</span>
                    <img class="news_link_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
                </a>
            </div>

            <ul class="news_list">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'category_name' => "tamanoya",
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_image1.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_image2.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_image3.jpg" alt="料理の写真">
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/service-tamanoya/service_image4.jpg" alt="料理の写真">
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
                            <td>大阪府大阪市中央区宗右衛門町5-28</td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>地下鉄堺筋線「日本橋駅」より徒歩5分、「長堀橋駅」より徒歩8分<br>
                                地下鉄・阪神・近鉄「なんば駅」より徒歩7分</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>［火～木・日・祝］17：00〜24：00（L.O.23：00）<br>
                                ［金・土］17：00～27：00（L.O.26：00）<br>
                                <div class="annotation">※月曜日が営業日の場合17：00〜24：00営業になります。</div>
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
                            <td>8,000円～9,999円</td>
                        </tr>
                        <tr>
                            <th>支払い方法</th>
                            <td>現金・カード可（VISA、Master、JCB、A MEX、Diners）</td>
                        </tr>
                        <tr>
                            <th>サービス料</th>
                            <td>VIPルームのみ2ｈ5,000円（4～10名様で利用可）</td>
                        </tr>
                        <tr>
                            <th>席・設備</th>
                            <td>全席喫煙可／全席個室／モニターあり／VIPルーム貸切可</td>
                        </tr>

                    </table>
                    <div class="shopinfo_note">
                        <p>※予約時間から連絡なく15分以上ご来店が無かった場合、キャンセル扱いとさせていただきます。</p>
                        <p>※ご予約の確認でお店からお電話させていただく場合が御座います。
                            WEB予約でお席が取れない場合でも、空席がある場合が御座います。<br>
                            その際はお店まで一度ご連絡をお願い致します。</p>
                        <p>※WEB予約でお席が取れない場合でも、空席がある場合が御座います。その際はお店まで一度ご連絡をお願い致します。</p>
                    </div>
                </div>
            </div>
            <div class="shopinfo_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.6940657758119!2d135.50185731999372!3d34.670152401945444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e72be0116dd7%3A0xf8f983d6ef2202f2!2z44KE44GN44Gr44GP546J5LmD5bGL!5e0!3m2!1sja!2sjp!4v1756429423025!5m2!1sja!2sjp" width="600" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>

</main>

<?php get_footer(); ?>