<?php $main_page_soc_pack_title = get_field('main_page_soc_pack_title'); ?>
<?php $main_page_soc_pack_tabs = get_field('main_page_soc_pack_tabs'); ?>

<div class="page-anchor" id="soc-pack"></div>
<section class="main-page-soc-pack container">
    <div class="main-page-soc-pack__title">
        <?php if ($main_page_soc_pack_title): ?>
            <h2 class="h2">
                <?php echo esc_html($main_page_soc_pack_title); ?>
            </h2>
        <?php endif; ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path2.svg" alt="">
        <div></div>
    </div>
    <?php if ($main_page_soc_pack_tabs): ?>
        <div class="main-page-soc-pack__tab-wrapper">
            <div class="main-page-soc-pack__tabs">
                <?php foreach ($main_page_soc_pack_tabs as $soc_pack_tabs) {
                    $title = $soc_pack_tabs['main_page_soc_pack_tabs_title'];
                    ?>
                    <div class="main-page-soc-pack__tab ">
                        <?php echo esc_html($title); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="tab_content">
                <?php foreach ($main_page_soc_pack_tabs as $soc_pack_tabs) {
                    $image = $soc_pack_tabs['main_page_soc_pack_tabs_image'];
                    $list = $soc_pack_tabs['main_page_soc_pack_tabs_list'];
                    $title = $soc_pack_tabs['main_page_soc_pack_tabs_title'];
                    $color = $soc_pack_tabs['main_page_soc_pack_tabs_gradient_color'];
                    ?>
                    <div class="main-page-soc-pack__tab-item">
                        <div class="main-page-soc-pack__tab-item-image"
                             style="background-image: url(<?php echo esc_url($image['url']); ?>)">
                        </div>
                        <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--desk"
                             style="background: linear-gradient(to left, transparent 40%, <?php echo esc_html($color); ?> 58%);">
                            <?php echo wp_kses_post($list) ?>
                        </div>
                        <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--tablet"
                             style="background: linear-gradient(to left, transparent 37%, <?php echo esc_html($color); ?> 48%);">
                            <?php echo wp_kses_post($list) ?>
                        </div>
                        <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--mobile"
                             style="background: linear-gradient(to left, transparent -360%, <?php echo esc_html($color); ?> 100%);">
                            <?php echo wp_kses_post($list) ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php endif; ?>
</section>