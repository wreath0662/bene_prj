<?php get_header(
    /*
Template Name:サンクスページ
*/); ?>

<main class="contact">
    <section class="contact_form">
        <div class="contact_form_wrapper">
            <div class="contact_form_box">
                <figure>
                    <img src="<?= esc_url(get_theme_file_uri('/images/contact/thanks_title.svg')); ?>" alt="Thanks">
                </figure>

                <div class="desc">
                    <div class="contact_form_head">
                        <p>この度はお問い合わせありがとうございました。</p>
                        <p>ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。</p>
                        <p>もし確認メールが届いていない場合は、入力いただいたメールアドレスに誤りがあるか、迷惑メールフォルダ等に振り分けられている可能性がございます。</p>
                        <p>お手数ですが、再度ご確認をお願いいたします。</p>
                    </div>
                </div>

                <div class="link-btn list-link return-btn" style="display:flex;justify-content:center;margin:2rem 0;">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <span class="circle"></span>
                        <p>トップページに戻る</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>