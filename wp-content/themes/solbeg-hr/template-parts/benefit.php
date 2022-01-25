<?php $benefits_title = get_field('benefits_title'); ?>
<?php $benefits_item = get_field('benefits_item'); ?>
<?php $benefits_button = get_field('benefits_button'); ?>
<?php if (get_field('display_section___benefits') != ''): ?>
    <div id="offer" class="main-page-benefit">
        <?php if ($benefits_title): ?>
            <div class="benefit-title container">
                <?php echo esc_html($benefits_title); ?>
            </div>
        <?php endif; ?>
        <?php
        $numb = 1;
        if ($benefits_item) { ?>
        <div class="benefit-list__container">
            <div class="benefit-list container">
                <?php foreach ($benefits_item as $item) {
                    $icon = $item['icon'];
                    $text = $item['text'];
                    ?>

                <?php } ?>
                <div class="benefit-items ">
                    <?php
                    foreach($benefits_item as $item => $posts){
                        $icon = $posts['icon'];
                        $text = $posts['text'];
                        echo ($item > 0 && $item % 2 == 0) ? '</div><div class="benefit-items">' : '';?>
                        <div class="benefit-item">
                            <div class="benefit-item__step">
                                <img class="benefit-item__step-icon"
                                     src="<?php echo esc_url($icon['url']); ?>"
                                     alt="<?php echo esc_attr($icon['alt']); ?>">
                            </div>
                            <div class="benefit-item__title">
                                <?php echo wp_kses_post($text); ?>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>


            </div>

            <div class="benefit__get container">
                <div class="benefit__get_text">
                    <?php echo esc_html($benefits_button['title']); ?>
                </div>
                <button class="benefit__get_button">
                    <?php echo esc_html($benefits_button['button_text']); ?>
                </button>
            </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>