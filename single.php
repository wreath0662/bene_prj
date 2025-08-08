<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="news-content-section">
  <div class="wrapper-min">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="news-content">
          <div class="news-content__ttlBox">
            <div class="news-content__ttlBox__inner">
              <time class="time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <?php
              $cats = get_the_category();
              if ($cats) :
              ?>
                <div class="category-inner">
                  <?php foreach ($cats as $cat) : ?>
                    <span class="category"><?php echo esc_html($cat->name); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
            <h1><?php the_title(); ?></h1>
          </div>

          <?php if (has_post_thumbnail()) : ?>
            <div class="news-content__thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>

          <div class="news-content__inner">
            <?php the_content(); ?>
          </div>
        </article>

        <!-- <div class="articlePage-btn">
          <div class="prev-btn">
            <?php previous_post_link('%link', '<span class="circle"></span> 前の記事'); ?>
          </div>
          <div class="back-btn">
            <a href="<?php echo esc_url(home_url('/news/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-back.svg" alt="戻る">
              一覧に戻る
            </a>
          </div>
          <div class="next-btn">
            <?php next_post_link('%link', '次の記事 <span class="circle"></span>'); ?>
          </div>
        </div> -->
    <?php endwhile;
    endif; ?>
  </div>
</main>

<?php get_footer(); ?>