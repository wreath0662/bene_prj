<footer class="l-footer">
    <div class="l-footer_inner">
        <div class="l-footer_container">
            <div class="footer_nav">
                <div class="footer_block">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_service.svg" alt="Service">
                    </figure>
                    <ul>
                        <a href="<?php echo esc_url(home_url('/service-tamanoya')); ?>">
                            <li>- やきにく玉乃屋</li>
                        </a>
                        <a href="<?php echo esc_url(home_url('/service-t-horse')); ?>">
                            <li>- GARAGE T-HORSE</li>
                        </a>
                        <a href="<?php echo esc_url(home_url('/service-c-one')); ?>">
                            <li>- BAR C-ONE</li>
                        </a>
                        <a href="<?php echo esc_url(home_url('/service-kerandon')); ?>">
                            <li>- ケランドン</li>
                        </a>
                        <a href="">
                            <li>- ニコニコレンタカー</li>
                        </a>
                    </ul>
                </div>

                <div class="footer_block">
                    <a href="">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_recruit.svg" alt="Recruit">
                        </figure>
                    </a>
                    <ul>
                        <a href="">
                            <li>- Indeed</li>
                        </a>
                        <a href="">
                            <li>- 求人ボックス</li>
                        </a>
                        <a href="">
                            <li>- マイナビバイト</li>
                        </a>
                    </ul>
                </div>

                <div class="footer_block footer_block_third">
                    <a href="<?php echo esc_url(home_url('/company')); ?>">
                        <figure class="footer_company">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_company.svg" alt="Company">
                        </figure>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_contact.svg" alt="Contact">
                        </figure>
                    </a>
                    <a href="https://www.instagram.com/bene_corp_recruit/" target="_blank"
                        rel="noopener noreferrer">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.svg" alt="Contact">
                        </figure>
                    </a>
                </div>
            </div>
            <!-- 右カラム -->
            <div class="footer_info">
                <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo.svg" alt="Bene Corporation ロゴ">

                <div class="footer_address">
                    <p>
                        〒556-0062<br>大阪府摂津市鳥飼上5-4-13
                    </p>
                </div>
            </div>


        </div>

        <div>
            <p class="footer_copy">©2025 Bene Corporation</p>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>