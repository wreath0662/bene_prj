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
                    <td>〒542-0083 大阪市中央区東心斎橋1-17-9</td>
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

    <!-- 代表挨拶 -->
    <section class="company_message">
        <div class="company_message_inner">
            <p class="company_message_title">代表挨拶</p>

            <div class="company_message_item">
                <p class="company_message_head">
                    地域密着から始まったBeneの挑戦は、<br>
                    新しい価値を創り続ける企業となる
                </p>
                <div class="company_message_text">
                    <p>地域密着から始まったBeneの挑戦は、
                        人と人とのつながりを大切にしながら、
                        信頼されるブランドとして歩みを進めてきました。
                        変化の激しい時代の中でも、柔軟な発想と行動力をもって、
                        常に新しい可能性に挑み続けています。
                        これからもまっすぐに、真摯に、
                        多くの方にとって心に残る存在であり続けられるよう、
                        価値あるサービスを届けてまいります。</p>
                </div>

                <p class="company_message_name">
                    代表取締役<strong>玉川 冬馬</strong>
                </p>
            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>