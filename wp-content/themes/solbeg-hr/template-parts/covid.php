<?php $covid_image = get_field('covid_image'); ?>
<?php $covid_title = get_field('covid_title'); ?>
<?php $covid_text = get_field('covid_text'); ?>
<?php if (get_field('display_section___covid') != ''): ?>
    <div class="main-page-covid">
        <div class="container">
            <?php if ($covid_image): ?>
                <img src="<?php echo esc_url($covid_image['url']); ?>"
                     alt="<?php echo esc_attr($covid_image['alt']); ?>"
                     class="covid__image">
            <?php endif; ?>
            <div class="covid__content">
                <?php if ($covid_title): ?>
                    <div class="covid__content-title">
                        <?php echo esc_html($covid_title); ?>
                    </div>
                <?php endif; ?>
                <?php if ($covid_text): ?>
                    <div class="covid__content-text">
                        <?php echo esc_html($covid_text); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>