<?php
/*
Template Name: お知らせ一覧
*/
if (!defined('ABSPATH')) exit;
?>
<?php get_header(); ?>
<main class="p-contact">
    <?php get_header(); ?>

    <main class="news-archive">
        <div class="news_inner">

            <div class="news_head">
                <figure class="news_title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/news_title.svg" alt="News">
                </figure>
            </div>

            <ul class="news_list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
                <?php else : ?>
                    <li class="news_item">お知らせはまだありません。</li>
                <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <div class="news_pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 1,
                    'prev_text' => '＜',
                    'next_text' => '＞',
                    'screen_reader_text' => ' ',
                ));
                ?>
            </div>

        </div>
    </main>

    <?php get_footer(); ?>

</main>
<?php get_footer(); ?>