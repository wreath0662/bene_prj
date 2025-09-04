<?php get_header(
    /*
Template Name:お問い合わせ
*/); ?>

<main class="contact">
    <section class="contact_form">
        <div class="subPage-frame wrapper-mid">
            <div class="wrapper-min">
                <div class="contact-ttlBox">
                    <?php $locale = get_locale();
                    if ('en_US' == $locale) { ?>
                        <h2 class="ttl32 blue ">CONTACT FORM</h2>
                    <?php } else { ?>
                        <p class="eng blue font-bold">CONTACT FORM</p>
                        <h2 class="ttl32">お問い合わせ内容</h2>
                    <?php } ?>
                    <?php $locale = get_locale();
                    if ('en_US' == $locale) { ?>
                        <div class="info blue font-bold" style="margin-bottom:0;">
                            <p style="padding-left:0.5em;text-indent:-0.5em;color:#000;">*This form is exclusively for product enquiries and product enquiries. <br>Please do not send sales emails.</p>
                        </div>
                    <?php } else { ?>

                    <?php } ?>
                    <?php $locale = get_locale();
                    if ('en_US' == $locale) { ?>
                    <?php } else { ?>
                    <?php } ?>
                </div>
                <div class="form-inner">
                    <?php $locale = get_locale();
                    if ('en_US' == $locale) { ?>
                        <p class="desc mb1">Please fill in the form below and click the Send button.<br class="sp-none">Please note that depending on the nature of your enquiry, there may be a delay in our reply. Please understand that we may delay our reply depending on the nature of your enquiry.</p>
                        <p class="desc mb2 red">*Please input.</p>
                        <?php the_content(); ?>
                    <?php } else { ?>
                        <p class="desc mb2">以下のフォームに必要事項をご記入の上、送信ボタンをクリックしてください。<br class="sp-none">なお、お問い合わせの内容によっては、ご返答が遅れる場合がございます。ご了承ください。</p>
                        <?php the_content(); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/breadcrumb'); ?>
</main>

<?php get_footer(); ?>