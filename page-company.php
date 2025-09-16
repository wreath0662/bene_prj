<?php
/*
Template Name: 会社紹介
*/
if (!defined('ABSPATH')) exit;
?>
<?php get_header(); ?>

<main class="company">
    <figure class="company_head">
        <img src="<?= esc_url(get_theme_file_uri('/images/company/company_title.svg')); ?>" alt="Company">
    </figure>
    <figure class="company_mv">
        <img src="<?= esc_url(get_theme_file_uri('/images/company/company_mv.jpg')); ?>" alt="社員の集合写真">
    </figure>

    <!-- 企業理念 -->
    <section class="company_philosophy">
        <div class="company_philosophy_inner">
            <p class="company_philosophy_title">企業理念</p>
            <div>
                <div class="company_philosophy_item">
                    <figure class="head_text">
                        <picture>
                            <!-- スマホ用 Vision -->
                            <source srcset="<?= esc_url(get_theme_file_uri('/images/company/vision_text_sp.svg')); ?>" media="(max-width: 576px)">
                            <!-- PC用 Vision -->
                            <img src="<?= esc_url(get_theme_file_uri('/images/company/vision_text.svg')); ?>" alt="Vision">
                        </picture>
                    </figure>
                    <div class="item_group">
                        <p class="item_head">人と街に、誠実と感動を。</p>
                        <p>私たちは、人と街の豊かな未来を紡ぐ企業グループとして、誠実なものづくり・サービスづくりを通して、すべての人に感動ある体験と、日々の心地よい豊かさを提供し続けます。</p>
                    </div>
                </div>

                <div class="company_philosophy_item">
                    <figure class="head_text">
                        <picture>
                            <!-- スマホ用 Mission -->
                            <source srcset="<?= esc_url(get_theme_file_uri('/images/company/mission_text_sp.svg')); ?>" media="(max-width: 576px)">
                            <!-- PC用 Mission -->
                            <img src="<?= esc_url(get_theme_file_uri('/images/company/mission_text.svg')); ?>" alt="Mission">
                        </picture>
                    </figure>
                    <div class="item_group">
                        <p class="item_head">五感で感じる、豊かな時間と体験を。</p>
                        <p>ベーネグループは、焼肉店・バー・車事業・韓国スイーツなど多様な事業を通じて、ライフスタイルに彩りを添える「体験の場」を創造します。誠実さ、遊び心、感性を大切にしながら、地域と人の未来に寄り添います。</p>
                    </div>
                </div>
                <div class="company_philosophy_item">
                    <figure class="head_text">
                        <picture>
                            <!-- スマホ用 Policy -->
                            <source srcset="<?= esc_url(get_theme_file_uri('/images/company/policy_text_sp.svg')); ?>" media="(max-width: 576px)">
                            <!-- PC用 Policy -->
                            <img src="<?= esc_url(get_theme_file_uri('/images/company/policy_text.svg')); ?>" alt="Policy">
                        </picture>
                    </figure>
                    <div class="policy_group">
                        <p class="item_head policy_head">誠実に向き合う</p>
                        <p class="policy_text">お客様・仲間・地域と真摯に関わり、信頼を大切にします。</p>
                    </div>
                    <div class="policy_group">
                        <p class="item_head policy_head">品質を追求する</p>
                        <p class="policy_text">一皿の焼肉から、バーの一杯、車の一台まで、納得と満足を大切にします。</p>
                    </div>
                    <div class=" policy_group">
                        <p class="item_head policy_head">遊び心を忘れない</p>
                        <p class="policy_text">少しの驚きと楽しさで、ベーネらしい体験を提供します。</p>
                    </div>
                    <div class=" policy_group">
                        <p class="item_head policy_head">地域とともに生きる</p>
                        <p class="policy_text">地元の人・文化・歴史に根ざし、街の一員として共に成長します。</p>
                    </div>
                    <div class=" policy_group">
                        <p class="item_head policy_head">多様性を尊重する</p>
                        <p class="policy_text">年齢・性別・国籍・価値観にとらわれず、一人ひとりが主役になれるグループを目指します。</p>
                    </div>
                </div>
            </div>



    </section>



    <!-- ご挨拶 -->
    <section class=" company_message">
        <div class="company_message_inner">
            <p class="company_message_title">ご挨拶</p>

            <div class="company_message_item">
                <p class="company_message_head">
                    地域密着から始まったBeneの挑戦は、<br>
                    社員一人ひとりの責任と情熱によって支えられています。
                </p>

                <figure class="company_message_image">
                    <img src="<?= esc_url(get_theme_file_uri('/images/company/company_greeting.jpg')); ?>" alt="社員が会議室で打ち合わせしている写真">
                </figure>
                <div class="company_message_text">
                    <p>Beneグループは、地域密着の飲食・サービス事業からスタートし、<br class="sp_none">
                        今日まで多くのお客様とのつながりの中で歩みを続けてまいりました。
                    </p>
                    <p>私たちの強みは、何よりも「人」。<br class="sp_none">
                        それぞれの事業に責任と誇りを持って向き合うメンバーが、<br class="sp_none">
                        お客様に誠実で温かいサービスをお届けしています。</p>
                    <p>1人ではなく、チームで創る会社。<br class="sp_none">
                        だからこそ、変化の時代にも柔軟に、前向きに、新たな価値を生み出し続けられると信じています。</p>
                    <p>これからも、Beneグループに関わるすべての方にとって、<br class="sp_none">
                        心に残るサービスと体験を提供できるよう、社員一同、真摯に歩んでまいります。</p>

                </div>

            </div>
        </div>
    </section>

    <!-- 会社概要 -->
    <section class="company_information">
        <div class="company_information_inner">
            <p class="company_information_title">会社概要</p>
            <table class="company_information_item">
                <tr>
                    <th>会社名</th>
                    <td>株式会社ベーネコーポレーション</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>
                        【本社】<br>
                        〒566-0062 大阪府摂津市鳥飼上5-4-13<br><br>
                        【難波営業所】<br>
                        〒556-0005 大阪市浪速区日本橋5-12-9 共栄ビル302号室
                    </td>
                </tr>


                <tr>
                    <th>代表者</th>
                    <td>玉川 冬馬</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>飲食事業、物販事業、サービス事業</td>
                </tr>
            </table>
        </div>
    </section>


</main>
<?php get_footer(); ?>