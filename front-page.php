<?php
if (!defined('ABSPATH')) exit;
get_header();
/*
Template Name: フロントページ
*/
?>

<!-- メインビジュアル -->
<main class="h-mv">
	<figure class="mv_logo">
		<img src="<?= esc_url(get_theme_file_uri('/images/home/group_logo.png')); ?>" alt="Bene Group">
	</figure>
	<div class="mv_inner pc_only">

		<figure class="mv_image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/t-horse.png" alt="T-HORSE">
		</figure>

		<figure class="mv_image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/kerandon.png" alt="ケランドン">
		</figure>

		<figure class="mv_image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/tamanoya.png" alt="玉乃屋">
		</figure>

		<figure class="mv_image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/c-one.png" alt="C-ONE">
		</figure>

		<figure class="mv_image">

			<img src="<?php echo get_template_directory_uri(); ?>/images/home/ceo.png" alt="代表">
		</figure>
	</div>

	<!-- スマホのときのスライダー -->
	<div class="mv_inner swiper-container sp_only">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/t-horse.png" alt="T-HORSE">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/kerandon.png" alt="ケランドン">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/tamanoya.png" alt="玉乃屋">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/c-one.png" alt="C-ONE">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/ceo.png" alt="代表">
			</div>

		</div>
	</div>

	<div class="mv_text">
		<p class="mv_text_main">人と街に<span class="comma">、</span>誠実と感動を</p>
		<figure class="mv_text_sub">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/mv_subtext.svg" alt="Bringing sincerity and emotion to people and cities">
		</figure>
	</div>
</main>




<!-- Our Vision -->
<section class="h-vision">
	<div class="h-vision_inner">
		<div class="h-vision_images">
			<div class="h-vision_imagegroup">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/vision1.jpg" alt="カクテル">
				</figure>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/vision2.jpg" alt="車整備">
				</figure>
			</div>
			<div class="h-vision_imagegroup">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/vision3.jpg" alt="パン">
				</figure>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/vision4.jpg" alt="肉">
				</figure>
			</div>
		</div>

		<div class="h-vision_box">
			<figure class="h-vision_title">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/vision_title.svg" alt="Our Vision">
			</figure>
			<p class="h-vision_text">
				地域密着から始まったBeneの挑戦は、やがて多くの人の記憶に残る信頼のブランドとなること。また、新しい価値を創り続ける企業となること。お客様の「ありがとう」を原動力に、信頼・誠実・挑戦を大切に、地域と共に歩んでまいります。
			</p>
			<a class="h-vision_btn" href="<?php echo esc_url(home_url('/company')); ?>">
				<span class="h-vision_btn__text">会社紹介へ</span>
				<img class="h-vision_btn__arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
			</a>

		</div>
	</div>
</section>

<!-- service -->
<section class="h-service">
	<figure class="h-service_title">
		<img src="<?php echo get_template_directory_uri(); ?>/images/home/service_title.svg" alt="Service">
	</figure>

	<div class="h-service_slider-wrapper">
		<!-- Prevボタン -->
		<div class="swiper-button-prev prev_text">
			<figure class="sp_none">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/service_prev.svg" alt="前へ">
			</figure>
		</div>

		<!-- スライダー本体 -->
		<div class="h-service_slider swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="<?php echo esc_url(home_url('/service-tamanoya')); ?>">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/home/service1.jpg" alt="サービス1">
						</figure>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="<?php echo esc_url(home_url('/service-t-horse')); ?>">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/home/service2.jpg" alt="サービス2">
						</figure>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="<?php echo esc_url(home_url('/service-c-one')); ?>">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/home/service3.jpg" alt="サービス3">
						</figure>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="<?php echo esc_url(home_url('/service-kerandon')); ?>">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/home/service4.jpg" alt="サービス4">
						</figure>
					</a>
				</div>

			</div>
		</div>
		<!-- Nextボタン -->
		<div class="swiper-button-next next_text">
			<figure class="sp_none">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/service_next.svg" alt="次へ">
			</figure>
		</div>

		<div class="h-service_customArrows">
			<div class="swiper-button-prev arrow-prev" aria-label="前へ">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/arrow_prev.svg" alt="左矢印">
			</div>
			<div class="swiper-button-next arrow-next" aria-label="次へ">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/arrow_next.svg" alt="右矢印">
			</div>
		</div>
	</div>



</section>

<!-- Greeting -->
<section class="greeting">
	<figure class="greeting_title">
		<img src="<?php echo get_template_directory_uri(); ?>/images/home/greeting.svg" alt="Greeting">
	</figure>
	<div class="greeting_inner">
		<div class="greeting_box">

			<p class="greeting_lead">
				地域密着から始まったBeneの挑戦は、
				新しい価値を創り続ける企業となる
			</p>
			<div class="greeting_text">
				<p>地域密着から始まったBeneの挑戦は、
					人と人とのつながりを大切にしながら、
					信頼されるブランドとして歩みを進めてきました。
					変化の激しい時代の中でも、柔軟な発想と行動力をもって、
					常に新しい可能性に挑み続けています。
					これからもまっすぐに、真摯に、
					多くの方にとって心に残る存在であり続けられるよう、
					価値あるサービスを届けてまいります。</p>
			</div>

			<p class="greeting_name">
				代表取締役<strong>玉川 冬馬</strong>
			</p>
		</div>

		<div class="greeting__image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/greeting_ceo.jpg" alt="代表写真">
		</div>
	</div>
</section>

<!-- Recruit -->
<section id="recruit" class="recruit">
	<div class="recruit_inner">

		<figure class="recruit_title">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/recruit_title.svg" alt="Recruit">
		</figure>

		<div class="recruit_banner">
			<img src="<?php echo get_template_directory_uri(); ?>/images/home/recruit_banner.jpg" alt="Let's grow together at Bene Corporation!">
		</div>

		<div class="recruit_links">
			<!-- Indeed -->
			<div class="recruit_links_group">
				<figure class="recruit_links_image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/indeed_logo.png" alt="Indeed">
				</figure>
				<a class="recruit_btn" href="https://jp.indeed.com/job/%E5%BF%83%E6%96%8E%E6%A9%8B%E3%81%AE%E7%84%BC%E8%82%89%E5%BA%97%E3%81%A7%E3%83%9B%E3%83%BC%E3%83%AB%E3%82%AD%E3%83%83%E3%83%81%E3%83%B3-df06f09206e608ee" target="_blank"
					rel="noopener noreferrer">
					<span>玉乃屋の求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
				<a class="recruit_btn" href="https://jp.indeed.com/job/%E3%82%AB%E3%82%A6%E3%83%B3%E3%82%BF%E3%83%BC%E3%83%AC%E3%83%87%E3%82%A3%E3%82%AC%E3%83%BC%E3%83%AB%E3%82%BA%E3%83%90%E3%83%BCc-one-2cb7abc622898d3f" target="_blank"
					rel="noopener noreferrer">
					<span>C-ONEの求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
			</div>

			<!-- 求人ボックス -->
			<div class="recruit_links_group">
				<figure class="recruit_links_image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/kyujinbox_logo.png" alt="求人ボックス">
				</figure>
				<a class="recruit_btn" href="#">
					<span>玉乃屋の求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
				<a class="recruit_btn" href="https://xn--pckua2a7gp15o89zb.com/jbi/fe6ea2ddff9b4ec880c61405dfb7f7c8" target="_blank"
					rel="noopener noreferrer">
					<span>C-ONEの求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
			</div>

			<!-- マイナビバイト -->
			<div class="recruit_links_group">
				<figure class="recruit_links_image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/mynavi_logo.png" alt="マイナビバイト">
				</figure>
				<a class="recruit_btn" href="#">
					<span>玉乃屋の求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
				<a class="recruit_btn" href="#">
					<span>C-ONEの求人情報を見る</span>
					<img class="recruit_btn_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
				</a>
			</div>
		</div>

	</div>
</section>


<!-- News -->
<section class="news">
	<div class="news_inner">

		<div class="news_head">
			<figure class="news_title">
				<img src="<?php echo get_template_directory_uri(); ?>/images/home/news_title.svg" alt="News">
			</figure>

			<a class="news_link" href="<?php echo esc_url(home_url('/news')); ?>">
				<span>お知らせ一覧へ</span>
				<img class="news_link_arrow" src="<?php echo get_template_directory_uri(); ?>/images/home/arrow.svg" alt="矢印">
			</a>
		</div>

		<ul class="news_list">
			<?php
			$query = new WP_Query(array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
			));
			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
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
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</ul>
	</div>
</section>
<?php get_footer(); ?>