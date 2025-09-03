<?php get_header(); ?>

<main id="subPage" class="newsListPage">
    <div class="kv-ttl fade-in">
        <div class="wrapper-mid">
            <span class="eng blue ttl32 font-bold">NEWS</span>
            <h1 class="subPage-title ttl60">
                <?php echo esc_html(get_the_archive_title()); ?> の記事一覧
            </h1>
        </div>
    </div>

    <section class="news-section bg-blue">
        <div class="wrapper-mid">
            <div class="news-ttlBox">
                <div class="news-ttlBox-ttl">
                    <ul class="cat-list">
                        <li><a href="<?php echo esc_url(home_url('/news/')); ?>">すべて</a></li>
                        <?php
                        // 必要なら、特定の親カテゴリ配下に絞るなどもOK
                        wp_list_categories([
                            'title_li' => '',
                            // 'child_of' => 123, // 親カテゴリIDで絞る場合
                        ]);
                        ?>
                    </ul>
                </div>
            </div>

            <div class="news-inner fade-in">
                <div class="wrapper-min">
                    <div class="news-list">
                        <?php if (have_posts()) : ?>
                            <ul>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php get_template_part('template-parts/news-article'); ?>
                                <?php endwhile; ?>
                            </ul>

                            <!-- ページネーション（どちらか片方だけ使う） -->
                            <div class="pageNav">
                                <?php
                                // the_posts_pagination() か wp_pagenavi() のどちらか
                                the_posts_pagination([
                                    'mid_size'  => 1,
                                    'prev_text' => '＜',
                                    'next_text' => '＞',
                                    'screen_reader_text' => ' ',
                                ]);
                                // wp_pagenavi(); // ← 使うなら上を消す
                                ?>
                            </div>

                        <?php else : ?>
                            <p>投稿がありません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="wrapper-mid">
        <div class="breadcrumb">
            <p id="breadcrumbs">
                <span><span><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></span>
                    &gt; <span><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS一覧</a></span>
                    <?php if (is_category() || is_tag()) : ?>
                        &gt; <span class="breadcrumb_last" aria-current="page"><?php single_term_title(); ?></span>
                    <?php endif; ?>
                </span>
            </p>
        </div>
    </div>

    <?php get_template_part('template-parts/contact-section'); ?>
</main>

<?php get_footer(); ?>