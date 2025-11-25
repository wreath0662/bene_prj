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
                        <a href="https://www.2525r.com/osaka/osaka/naniwa/store-01719-001.html " target="_blank"
                            rel="noopener noreferrer">
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
                        <li>
                            <a href="https://jp.indeed.com/cmp/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%EF%BD%82%EF%BD%85%EF%BD%8E%EF%BD%85-%EF%BC%A3%EF%BD%8F%EF%BD%92%EF%BD%90%EF%BD%8F%EF%BD%92%EF%BD%81%EF%BD%94%EF%BD%89%EF%BD%8F%EF%BD%8E?from=gnav-one-host&hl=ja&co=JP"
                                target="_blank" rel="noopener noreferrer">
                                - Indeed
                            </a>
                        </li>

                        <li>
                            <a href="https://xn--pckua2a7gp15o89zb.com/cmp/2429-6417"
                                target="_blank" rel="noopener noreferrer">
                                - 求人ボックス
                            </a>
                        </li>

                        <li>
                            <a href="">
                                - マイナビバイト
                            </a>
                        </li>
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