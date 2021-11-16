<?php $main_page_about_title = get_field('main_page_about_title'); ?>
<?php $main_page_about_text = get_field('main_page_about_text'); ?>
<?php $main_page_about_image = get_field('main_page_about_image'); ?>
<?php $main_page_about_count_div = get_field('main_page_about_count_div'); ?>
<?php if (get_field('display_section_about') != ''): ?>
    <section class="main-page-about">
        <div class="container">
            <div class="main-page-about__grid">
                <div class="main-page-about__title">
                    <?php if ($main_page_about_title): ?>
                        <h2 class="h2">
                            <?php echo esc_html($main_page_about_title); ?>
                        </h2>
                    <?php endif; ?>
                    <div class="main-page-about__title-img">
                        <?php if ($main_page_about_image) { ?>
                            <img class="main-page-about__title-img-img"
                                 src="<?php echo esc_url($main_page_about_image['url']); ?>"
                                 alt="<?php echo esc_attr($main_page_about_image['alt']); ?>">
                        <?php } ?>
                    </div>
                </div>
                <?php if ($main_page_about_text): ?>
                    <div class="main-page-about__text paragraph">
                        <?php echo wp_kses_post($main_page_about_text) ?>
                    </div>
                <?php endif; ?>
                <?php if ($main_page_about_count_div) { ?>
                    <div class="main-page-about__count">
                        <?php foreach ($main_page_about_count_div as $count_div) { ?>
                            <div class="main-page-about__project">
                                <div class="main-page-about__box-num"><?php echo esc_html($count_div['count_num']); ?></div>
                                <div class="main-page-about__box-text"><?php echo esc_html($count_div['count_text']); ?></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>