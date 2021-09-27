<?php $main_page_history_company_title = get_field('main_page_history_company_title'); ?>
<?php $main_page_history_company_slides = get_field('main_page_history_company_slides'); ?>
<section class="main-page-history-company" style='background-image:
        url("<?php echo esc_url(get_template_directory_uri()); ?>/img/back.png"),
        url("<?php echo esc_url(get_template_directory_uri()); ?>/img/back2.png");'>
    <div class="main-page-history-company__slider">
        <?php if ($main_page_history_company_title): ?>
            <div class="main-page-history-company__title">
                <h3 class="h3">
                    <?php echo esc_html($main_page_history_company_title); ?>
                </h3>
            </div>
        <?php endif; ?>
        <div class="main-page-history-company__container"></div>
        <?php if ($main_page_history_company_slides) : ?>
            <div class="main-page-history-company__year-wrapper">
                <div class="main-page-history-company__year">
                    <?php foreach ($main_page_history_company_slides as $company_slide) {
                        $year = $company_slide['company_slide_year'];
                        ?>
                        <div class="company-year-item">
                            <div class="company-year-item__year">
                                <?php echo esc_html($year); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="main-page-history-company__text-wrapper">
                <div class="main-page-history-company__text">
                    <?php foreach ($main_page_history_company_slides as $company_slide) {
                        $content = $company_slide['date_and_title'];?>
                        <div class="company-text-item">
                            <div class="company-text-item__inner">
                                <?php echo wp_kses_post($content) ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>