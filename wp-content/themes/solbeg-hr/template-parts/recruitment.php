<?php $recruitment_title = get_field('recruitment_title'); ?>
<?php $recruitment_item = get_field('recruitment_item'); ?>
<?php if (get_field('display_section___recruitment') != ''): ?>
    <div class="main-page-recruitment">
        <?php if ($recruitment_title): ?>
            <div class="recruitment-title">
                <?php echo esc_html($recruitment_title); ?>
            </div>
        <?php endif; ?>
        <?php if ($recruitment_item) {
            $number = 1;
            ?>
            <div class="recruitment-list container">
                <?php foreach ($recruitment_item as $item) {
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <div class="recruitment-item">
                        <div class="recruitment-item__step">
                            <img class="recruitment-item__step-icon"
                                 src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                            <div class="recruitment-item__step-number"><?php echo esc_html($number); ?></div>
                        </div>
                        <div class="recruitment-item__title">
                            <?php echo esc_html($title); ?>
                        </div>
                        <div class="recruitment-item__text">
                            <?php echo esc_html($text ); ?>
                        </div>
                    </div>
                <?php $number++;
                }?>
            </div>
        <?php } ?>
    </div>
<?php endif; ?>