<?php get_header(
    /*
Template Name:プライバシーポリシー
*/); ?>

<main class="contact">
    <section class="contact_form">
        <div class="contact_form_wrapper">
            <figure class="contact_form_title">
                <img src="<?= esc_url(get_theme_file_uri('/images/contact/privacy_title.svg')); ?>" alt="Contact">
            </figure>
            <div class="contact_form_box">
                <p class="contact_form_head">
                    当サイトの運営に際し、お客様のプライバシーを尊重し個人情報に対して十分な配慮を行うとともに、大切に保護し、適正な管理を行うことに努めております。
                </p>

                <h2 class="ttl24 blue font-bold">【個人情報の利用目的】</h2>

                <div class="purpose-list">
                    <ul>
                        <li>a&rpar;. お客様のご要望に合わせたサービスをご提供するための各種ご連絡。</li>
                        <li>b&rpar;. お問い合わせいただいたご質問への回答のご連絡。</li>
                    </ul>
                </div>

                <div class="policy-list">
                    <ol>
                        <li>取得した個人情報は、ご本人の同意なしに目的以外では利用しません。</li>
                        <li>情報が漏洩しないよう対策を講じ、従業員だけでなく委託業者も監督します。</li>
                        <li>ご本人の同意を得ずに第三者に情報を提供しません。</li>
                        <li>ご本人からの求めに応じ情報を開示します。</li>
                        <li>公開された個人情報が事実と異なる場合、訂正や削除に応じます。</li>
                        <li>個人情報の取り扱いに関する苦情に対し、適切・迅速に対処します。</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>