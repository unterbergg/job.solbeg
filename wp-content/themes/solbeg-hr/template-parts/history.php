<?php $main_page_history_company_title = get_field('main_page_history_company_title'); ?>
<?php $main_page_history_company_slides = get_field('main_page_history_company_slides'); ?>
<?php if (get_field('display_section_history_company') != ''): ?>
    <div class="history">
        <div class="container">
            <div class="history__container">
                <?php if ($main_page_history_company_title): ?>
                    <div class="history__title">
                        <?php echo esc_html($main_page_history_company_title); ?>
                    </div>
                <?php endif; ?>
                <div class="history__years">
                    <?php foreach ($main_page_history_company_slides as $company_slide) {
                        $year = $company_slide['company_slide_year'];
                        ?>
                        <div class="history__years_item">
                            <?php echo esc_html($year); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="history__items">
                    <?php foreach ($main_page_history_company_slides as $company_slide) {
                        $content = $company_slide['date_and_title'];
                        $title = $company_slide['title'];
                        $image = $company_slide['image'];
                        ?>
                        <div class="history__item">
                            <div class="history__item_info">
                                <?php if ($title): ?>
                                    <div class="history__item_info-title">
                                        <?php echo wp_kses_post($title) ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($content): ?>
                                    <div class="history__item_info-text">
                                        <?php echo wp_kses_post($content) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($image): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt=""
                                     class="history__item_img">
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>