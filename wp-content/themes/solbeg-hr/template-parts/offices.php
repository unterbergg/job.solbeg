<?php $main_page_our_offices_title = get_field('main_page_our_offices_title'); ?>
<?php $main_page_our_offices_item = get_field('main_page_our_offices_item'); ?>
<?php $main_page_our_offices_new = get_field('main_page_our_offices_new'); ?>
<?php if (get_field('display_section__our_offices') != ''): ?>
    <section class="main-page-our-offices">
        <div class="container">
            <?php if ($main_page_our_offices_title): ?>
                <h3 class="h3">
                    <?php echo esc_html($main_page_our_offices_title); ?>
                </h3>
            <?php endif; ?>
            <?php if ($main_page_our_offices_item) : ?>
                <div class="main-page-our-offices__slider last">
                    <?php foreach ($main_page_our_offices_item as $offices_item) :
                        $img = $offices_item['offices_item_img'];
                        $text = $offices_item['offices_item_text'];
                        ?>

                        <div class="main-page-our-offices__item">
                            <img class="main-page-our-offices__img"
                                 src="<?php echo esc_url($img['url']); ?>"
                                 alt="<?php echo esc_attr($img['alt']); ?>">
                            <div class="main-page-our-offices__name"><?php echo esc_html($text); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>