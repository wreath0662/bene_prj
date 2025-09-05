<?php get_header(
    /*
Template Name:お問い合わせ
*/); ?>

<main class="contact">
    <section class="contact_form">
        <div class="contact_form_wrapper">
            <figure class="contact_form_title">
                <img src="<?= esc_url(get_theme_file_uri('/images/contact/contact_title.svg')); ?>" alt="Contact">
            </figure>

            <div class="contact_form_box">
                <p class="contact_form_head">
                    以下のフォームに必要事項をご記入の上、送信ボタンをクリックしてください。<br class="sp-none">
                    なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。ご了承ください。
                </p>

                <div class="form-inner">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>