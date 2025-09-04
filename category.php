<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="news_archive">
    <div class="news_archive_inner">
        <!-- 左カラム：タイトル＋サイドナビ -->
        <h2 class="news_archive_title">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/archive/news_title.svg" alt="News">
            </figure>
        </h2>
        <div class="news_archive_container">
            <!-- 任意：ブランド/事業リンク（必要に応じて置き換え） -->
            <nav class="news_archive_sideNav" aria-label="関連ページ">
                <ul class="news_archive_sideNav_list">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category):
                    ?>
                        <li>
                            <a href="<?= esc_url(get_category_link($category->term_id)); ?>" ; ?>
                                <?= esc_html($category->name); ?>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/archive/arrow.svg" alt="右矢印">
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- 右カラム：一覧 -->
            <div class="news_archive_body">
                <ul class="news_archive_list">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="news_archive_item">
                                <a href="<?php the_permalink(); ?>" class="news_archive_link">
                                    <div class="news_archive_meta">
                                        <span class="news_archive_date"><?php echo get_the_date('Y.m.d'); ?></span>
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'category');
                                        if (!empty($terms) && !is_wp_error($terms)) :
                                        ?>
                                            <span class="news_archive_cat"><?php echo esc_html($terms[0]->name); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <span class="news_archive_text"><?php the_title(); ?></span>
                                </a>
                            </li>
                        <?php endwhile;
                    else : ?>
                        <p>現在お知らせはありません。</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- ページネーション -->
        <div class="news_archive_pagination">
            <?php the_posts_pagination([
                'mid_size'  => 5,
                'prev_text' => '前へ',
                'next_text' => '次へ',
            ]); ?>
        </div>
    </div>
    </div>
</main>

<?php get_footer(); ?>