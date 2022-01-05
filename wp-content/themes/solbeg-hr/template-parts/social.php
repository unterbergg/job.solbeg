<?php $main_page_soc_pack_title = get_field('main_page_soc_pack_title'); ?>
<?php $main_page_soc_pack_tabs = get_field('main_page_soc_pack_tabs'); ?>
<?php if (get_field('display_section__soc_pack') != ''): ?>
    <section class="main-page-soc-pack container" id="soc-packe">
        <div class="main-page-soc-pack__title">
            <?php if ($main_page_soc_pack_title): ?>
                <h2 class="h2">
                    <?php echo esc_html($main_page_soc_pack_title); ?>
                </h2>
            <?php endif; ?>

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
                    <?php
                    $number = 0;
                    foreach ($main_page_soc_pack_tabs as $soc_pack_tabs) {
                        $image = $soc_pack_tabs['main_page_soc_pack_tabs_image'];
                        $list = $soc_pack_tabs['main_page_soc_pack_tabs_list'];
                        $title = $soc_pack_tabs['main_page_soc_pack_tabs_title'];
                        $color = $soc_pack_tabs['main_page_soc_pack_tabs_gradient_color'];
                        ?>
                        <div class="main-page-soc-pack__tab-item" style="background: <?php echo esc_html($color); ?>">

                            <div class="main-page-soc-pack__tab-ul__wrapper main-page-soc-pack__tab-ul__wrapper-<?php echo($number) ?>">
                                <?php echo wp_kses_post($list) ?>
                                <div class="triangle" style="border-top-color: <?php echo esc_html($color); ?>;border-left-color: <?php echo esc_html($color); ?>;">
                                </div>
                            </div>
                            <div class="main-page-soc-pack__tab-item-image">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="" class="image">
                            </div>

                        </div>
                        <?php
                        $number++;
                    } ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>