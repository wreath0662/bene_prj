<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
  <meta name="format-detection" content="telephone=no">
  <?php if (is_page("contact")) : ?>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Zen+Maru+Gothic:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700+JP:wght@400;500;600;700;&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body id="<?php
          if (is_singular()) {
            global $post;
            echo esc_attr($post->post_name);
          } elseif (is_post_type_archive()) {
            $post_type = get_queried_object();
            echo esc_attr($post_type->name);
          }
          ?>"
  <?php body_class(); ?>>
  <header class="l-header">
    <div class="l-header_inner">

      <!-- ロゴ -->
      <div class="l-header_logo ">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png" alt="株式会社BeneCorporation">
        </a>
      </div>

      <!-- ハンバーガーメニュー -->
      <button class="l-header_menu-btn" aria-label="メニューを開く">
        <span class="l-header_menu-icon"></span>
        <!-- 黒Menu画像 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/hamburger_menu.svg" alt="Menu" class="l-header_menu-img -black">
        <!-- 白Menu画像 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/hamburger_menu_white.svg" alt="Menu" class="l-header_menu-img -white">
      </button>

      <!-- グローバルメニュー -->
      <nav class="l-global-nav">
        <ul class="l-global-nav_list">

          <ul class="l-global-nav_list">
            <li class="l-global-nav_list_group"><a href="<?php echo esc_url(home_url('/')); ?>">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/menu_top.svg" alt="Top">
                </figure>
              </a></li>
            <li class="l-global-nav_list_group">

              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/menu_service.svg" alt="Top">
              </figure>

              <ul class="detail_menu">
                <li><a href="<?php echo esc_url(home_url('/service-tamanoya')); ?>">- やきにく玉乃屋</a></li>
                <li><a href="<?php echo esc_url(home_url('/service-t-horse')); ?>">- GARAGE T-HORSE</a></li>
                <li><a href="<?php echo esc_url(home_url('/service-c-one')); ?>">- BAR C-ONE</a></li>
                <li><a href="<?php echo esc_url(home_url('/service-kerandon')); ?>">- ケランドン</a></li>
                <li><a href="<?php echo esc_url(home_url('/service-c-one')); ?>">- ニコニコレンタカー</a></li>
              </ul>
            </li>
            <li class="l-global-nav_list_group">
              <a href="<?php echo home_url('/'); ?>#recruit">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/menu_recruit.svg" alt="Recruit">
                </figure>
              </a>
              <ul class="detail_menu">
                <li><a href="https://jp.indeed.com/cmp/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%EF%BD%82%EF%BD%85%EF%BD%8E%EF%BD%85-%EF%BC%A3%EF%BD%8F%EF%BD%92%EF%BD%90%EF%BD%8F%EF%BD%92%EF%BD%81%EF%BD%94%EF%BD%89%EF%BD%8F%EF%BD%8E?from=gnav-one-host&hl=ja&co=JP" target="_blank"
                    rel="noopener noreferrer">- Indeed</a></li>
                <li><a href="#">- 求人ボックス</a></li>
                <li><a href="#">- マイナビバイト</a></li>
              </ul>
            </li>
            <li class="l-global-nav_list_group">
              <a href="<?php echo esc_url(home_url('/company')); ?>">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/menu_company.svg" alt="Company">
                </figure>
              </a>
            </li>
            <li class="l-global-nav_list_group">
              <a href="<?php echo esc_url(home_url('/contact')); ?>">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/menu_contact.svg" alt="Contact">
                </figure>
              </a>
            </li>
          </ul>
      </nav>
    </div>
  </header>