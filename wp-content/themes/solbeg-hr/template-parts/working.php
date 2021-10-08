<?php $main_page_working_on_title = get_field('main_page_working_on_title'); ?>
<?php $main_page_working_on_text = get_field('main_page_working_on_text'); ?>
<?php $main_page_working_on_img = get_field('main_page_working_on_img'); ?>
<?php $main_page_working_on_slider_title = get_field('main_page_working_on_slider_title'); ?>
<?php $main_page_working_on_slider_item = get_field('main_page_working_on_slider_item'); ?>
<?php $main_page_working_on_partners = get_field('main_page_working_on_partners'); ?>

<section class="main-page-working-on" id="projects">
    <div class="main-page-working-on__grid">
        <div class="main-page-working-on__top"></div>
        <div class="main-page-working-on__down"></div>
        <div class="main-page-working-on__img-text container">
            <div class="main-page-working-on__text">
                <?php if ($main_page_working_on_title): ?>
                    <h2 class="h2">
                        <?php echo esc_html($main_page_working_on_title); ?>
                    </h2>
                <?php endif; ?>
                <?php if ($main_page_working_on_text): ?>
                    <div class="main-page-working-on__text_p paragraph">
                        <?php echo esc_html($main_page_working_on_text); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($main_page_working_on_img): ?>
                <div class="main-page-working-on__img">
                    <img src="<?php echo esc_url($main_page_working_on_img['url']); ?>"
                         alt="<?php echo esc_attr($main_page_working_on_img['alt']); ?>">
                </div>
            <?php endif; ?>
        </div>
        <?php if ($main_page_working_on_img): ?>
            <div class="main-page-working-on__company container">
                <?php foreach ($main_page_working_on_partners as $working_on_partners) :
                    $img = $working_on_partners['main_page_working_on_partners_image'];
                    ?>
                    <div class="main-page-working-on__company_item">
                        <img src="<?php echo esc_url($img['url']); ?>"
                             alt="<?php echo esc_attr($img['alt']); ?>"
                        >
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
