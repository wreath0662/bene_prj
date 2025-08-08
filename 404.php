<?php get_header(); ?>


<main id="subPage">
  <section class="error_section">
    <div class="error_inner">
      <h1 class="error_massage" style="text-align:center;line-height:1.5;">404 ERROR</h1>
      <p style="text-align:center;margin-bottom:5%;">
        <?php $locale = get_locale();
        if ('en_US' == $locale) { ?>
          The page you are looking for could not be found.
        <?php } else { ?>
          お探しのページは見つかりませんでした。
        <?php } ?>
      </p>
      <div class="link-btn list-link return-btn" style="display:flex;justify-content:center;margin:2rem 0;">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <span class="circle"></span>
          <?php $locale = get_locale();
          if ('en_US' == $locale) { ?>
            Return to Top Page
          <?php } else { ?>
            <p>トップページに戻る</p>
          <?php } ?>
        </a>
      </div>

    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
</main>
<?php get_footer(); ?>