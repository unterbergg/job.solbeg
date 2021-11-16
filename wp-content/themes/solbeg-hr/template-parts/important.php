<?php $main_page_important_to_us_title = get_field('main_page_important_to_us_title'); ?>
<?php $main_page_important_to_us_item = get_field('main_page_important_to_us_item'); ?>
<?php if (get_field('display_section__important_to_us') != ''): ?>
    <section class="main-page-important-to-us">
        <div class="container">
            <div class="main-page-important-to-us__title">
                <?php if ($main_page_important_to_us_title): ?>
                    <h2 class="h2">
                        <?php echo esc_html($main_page_important_to_us_title); ?>
                    </h2>
                <?php endif; ?>
            </div>
            <?php if ($main_page_important_to_us_item): ?>
                <div class="main-page-important-to-us__inner">
                    <?php $i = 0; ?>
                    <?php foreach ($main_page_important_to_us_item as $important_to_us_item) {
                        $frontimage = $important_to_us_item['front_img'];
                        $fronttext = $important_to_us_item['front_text'];
                        $backtitle = $important_to_us_item['back_title'];
                        $backtext = $important_to_us_item['back_text'];
                        $i++; ?>
                        <div class="main-page-important-to-us__item">
                            <div class="main-page-important-to-us__item-front">
                                <img src="<?php echo esc_url($frontimage['url']) ?>"
                                     alt="<?php echo esc_attr($frontimage['alt']) ?>">
                                <div class="front-num"><?php echo esc_html($i); ?></div>
                                <div class="front-text-title">
                                    <?php echo esc_html($fronttext); ?>
                                </div>
                            </div>
                            <div class="main-page-important-to-us__item-back">
                                <div class="back-num"><?php echo esc_html($i); ?></div>
                                <div class="back-text-title">
                                    <?php echo esc_html($backtitle); ?>
                                </div>
                                <div class="back-text-text">
                                    <?php echo wp_kses_post($backtext) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>