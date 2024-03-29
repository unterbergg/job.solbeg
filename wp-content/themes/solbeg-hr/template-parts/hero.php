<?php $main_page_top_block_title = get_field('main_page_top_block_title'); ?>
<?php $main_page_top_block_button = get_field('main_page_top_block_button'); ?>
<?php $main_page_top_block_button_link = get_field('main_page_top_block_button_link'); ?>
<?php $main_page_top_block_background = get_field('main_page_top_block_background'); ?>
<?php $main_page_top_block_background_video = get_field('main_page_top_block_background_video'); ?>
<?php if (get_field('display_section_top_block') != ''): ?>
    <section class="main-page-top-block"
             style='background-image: linear-gradient(180deg, rgba(47, 46, 94, 0.72) 10.81%, rgba(53, 27, 65, 0.16) 100%),
                 <?php echo 'url(' . esc_url($main_page_top_block_background['url']) . ')'; ?>'>
        <?php if ($main_page_top_block_background_video): ?>
            <video autoplay loop muted playsinline="true" class="main-page-top-block__video">
                <source src="<?php echo esc_url($main_page_top_block_background_video); ?>" type="video/mp4">
                <source src="<?php echo esc_url($main_page_top_block_background_video); ?>" type="video/webm">
            </video>
        <?php endif; ?>
        <div class="container">
            <?php if ($main_page_top_block_title): ?>
                <h1 class="main-page-top-block__title">
                    <?php echo wp_kses_post( $main_page_top_block_title ); ?>
                </h1>
            <?php endif; ?>
            <?php if ($main_page_top_block_button): ?>
                <a class="anchor-down" href="<?php echo esc_html($main_page_top_block_button_link); ?>">
                    <?php echo esc_html($main_page_top_block_button); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>