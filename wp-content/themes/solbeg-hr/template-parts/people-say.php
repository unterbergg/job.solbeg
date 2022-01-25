<?php $main_page_what_they_say_title = get_field('main_page_what_they_say_title'); ?>
<?php $main_page_what_they_say_our_partners_title = get_field('main_page_what_they_say_our_partners_title'); ?>
<?php $main_page_what_they_say_slide = get_field('main_page_what_they_say_slide'); ?>
<?php $main_page_what_they_say_our_partners = get_field('main_page_what_they_say_our_partners'); ?>
<section class="main-page-what-they-say container">
    <?php if (get_field('display_section__what_they_say') != ''): ?>
        <div class="main-page-what-they-say__title">
            <?php if ($main_page_what_they_say_title): ?>
                <h2 class="h2">
                    <?php echo wp_kses_post($main_page_what_they_say_title) ?>
                </h2>
            <?php endif; ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/et.svg" alt="">
        </div>
        <?php if ($main_page_what_they_say_title): ?>
            <div class="main-page-what-they-say__slider">
                <?php foreach ($main_page_what_they_say_slide as $what_they_say_slide) {
                    $slide_quote = $what_they_say_slide['slide_quote'];
                    $slide_name = $what_they_say_slide['slide_name'];
                    $slide_prof = $what_they_say_slide['slide_prof'];
                    $slide_img = $what_they_say_slide['slide_img'];
                    ?>
                    <div class="main-page-what-they-say__slide">
                        <div class="main-page-what-they-say__slide-inner">
                            <div class="what-they-say__slide-left">
                                <div class="what-they-say__slide-quote paragraph">
                                    <div class="quote-open">
                                        <?php echo esc_html("Читать полностью"); ?>
                                    </div>
                                    <p><?php echo esc_html($slide_quote); ?></p>
                                </div>
                                <div class="what-they-say__slide-name-prof">
                                    <div class="what-they-say__slide-name">
                                        <?php echo esc_html($slide_name); ?>
                                    </div>
                                    <div class="what-they-say__slide-prof">
                                        <?php echo esc_html($slide_prof); ?>
                                    </div>
                                </div>
                                <div class="quote-img">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/“.svg"
                                         alt="">
                                </div>
                            </div>
                            <div class="what-they-say__slide-img">
                                <img src="<?php echo esc_url($slide_img['url']) ?>"
                                     alt="<?php echo esc_attr($slide_img['alt']) ?>">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="main-page-what-they-say__slide-arrows">
                <ul>
                    <li class="what-they-say-slide-arrow what-they-say__slide-arrows-left"></li>
                    <li class="what-they-say-slide-arrow what-they-say__slide-arrows-right"></li>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (get_field('display_section__working_on_partners') != ''): ?>
        <?php if ($main_page_what_they_say_our_partners): ?>
            <div class="main-page-what-they-say__our-partners main-page__partners">
                <?php if ($main_page_what_they_say_our_partners_title): ?>
                    <h3 class="h3">
                        <?php echo esc_html($main_page_what_they_say_our_partners_title); ?>
                    </h3>
                <?php endif; ?>
                <ul>
                    <?php foreach ($main_page_what_they_say_our_partners as $our_partners) :
                        $img = $our_partners['our_partners'];
                        ?>
                        <li>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>