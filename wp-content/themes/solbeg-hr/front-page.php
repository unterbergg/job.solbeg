<?php get_header(); ?>
<main>


    <!-- /////////////////////////////////////// -->
    <?php $main_page_top_block_title = get_field('main_page_top_block_title'); ?>
    <?php $main_page_top_block_button = get_field('main_page_top_block_button'); ?>
    <?php $main_page_top_block_button_link = get_field('main_page_top_block_button_link'); ?>
    <?php $main_page_top_block_background = get_field('main_page_top_block_background'); ?>
    <?php $main_page_top_block_background_video = get_field('main_page_top_block_background_video'); ?>

    <section class="main-page-top-block" style='background-image: 
linear-gradient(180deg, rgba(47, 46, 94, 0.72) 10.81%, rgba(53, 27, 65, 0.16) 100%), 
url("<?php echo esc_url(get_template_directory_uri()); ?>/img/back2.png"),
url("<?= $main_page_top_block_background ?>");'>
        <video autoplay loop muted playsinline="true" poster="video/plane.jpg" class="main-page-top-block__video">
            <source src="<?= $main_page_top_block_background_video ?>" type="video/mp4">
            <source src="<?= $main_page_top_block_background_video ?>" type="video/webm">
        </video>
        <div class="container">
            <h1 class="main-page-top-block__title"><?= $main_page_top_block_title ?></h1>
            <div class="anchor-down">
                <a href="<?= $main_page_top_block_button_link ?>"><?= $main_page_top_block_button ?></a>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////// -->
    <?php $main_page_about_title = get_field('main_page_about_title'); ?>
    <?php $main_page_about_text = get_field('main_page_about_text'); ?>
    <?php $main_page_about_image = get_field('main_page_about_image'); ?>
    <?php $main_page_about_count_div = get_field('main_page_about_count_div'); ?>

    <section class="main-page-about">
        <div class="container">
            <div class="main-page-about__grid">
                <div class="main-page-about__title">
                    <h2 class="h2"><?= $main_page_about_title ?></h2>
                    <div class="main-page-about__title-img">
                        <?php if ($main_page_about_image) { ?>
                        <img class="main-page-about__title-img-img" src="<?= $main_page_about_image ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
                <div class="main-page-about__text paragraph">
                    <?= $main_page_about_text ?>
                </div>
                <div class="main-page-about__count">

                    <?php if ($main_page_about_count_div) {
                        foreach ($main_page_about_count_div as $count_div) { ?>

                    <div class="main-page-about__project">
                        <div class="main-page-about__box-num"><?= $count_div['count_num'] ?></div>
                        <div class="main-page-about__box-text"><?= $count_div['count_text'] ?></div>
                    </div>

                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////// -->
    <?php $main_page_our_offices_title = get_field('main_page_our_offices_title'); ?>
    <?php $main_page_our_offices_item = get_field('main_page_our_offices_item'); ?>
    <?php $main_page_our_offices_new = get_field('main_page_our_offices_new'); ?>

    <section class="main-page-our-offices">
        <div class="container">
            <h3 class="h3"><?= $main_page_our_offices_title ?></h3>
            <div class="main-page-our-offices__grid">

                <?php if ($main_page_our_offices_item) {
                    foreach ($main_page_our_offices_item as $offices_item) { ?>
                <div class="main-page-our-offices__item">
                    <img class="main-page-our-offices__img" src="<?= $offices_item['offices_item_img'] ?>" alt="">
                    <img class="main-page-our-offices__img-back"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/miniback.png" alt="">
                    <span><?= $offices_item['offices_item_text'] ?></span>
                </div>

                <?php }
                } ?>
                <?php if ($main_page_our_offices_new) { ?>
                <div class="main-page-our-offices__item-new">
                    <span><?= $main_page_our_offices_new ?></span>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////// -->
    <?php $main_page_history_company_title = get_field('main_page_history_company_title'); ?>
    <?php $main_page_history_company_slides = get_field('main_page_history_company_slides'); ?>


    <section class="main-page-history-company" style='background-image: 
url("<?php echo esc_url(get_template_directory_uri()); ?>/img/back.png"), 
url("<?php echo esc_url(get_template_directory_uri()); ?>/img/back2.png");'>
        <div class="main-page-history-company__slider">
            <div class="main-page-history-company__title">
                <h3 class="h3"><?= $main_page_history_company_title ?></h3>
                <!-- <div class="prev-year-link">
                
                </div> -->
            </div>
            <div class="main-page-history-company__container"></div>

            <div class="main-page-history-company__year-wrapper">
                <div class="main-page-history-company__year">
                    <?php foreach ($main_page_history_company_slides as $company_slide) { ?>
                    <div class="company-year-item">
                        <div class="company-year-item__year">
                            <?= $company_slide['company_slide_year'] ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="main-page-history-company__text-wrapper">
                <div class="main-page-history-company__text">
                    <?php foreach ($main_page_history_company_slides as $company_slide) { ?>
                    <div class="company-text-item">
                        <div class="company-text-item__inner">
                            <?= $company_slide['date_and_title'] ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- /////////////////////////////////////// -->
    <?php $main_page_working_on_title = get_field('main_page_working_on_title'); ?>
    <?php $main_page_working_on_text = get_field('main_page_working_on_text'); ?>
    <?php $main_page_working_on_img = get_field('main_page_working_on_img'); ?>
    <?php $main_page_working_on_slider_title = get_field('main_page_working_on_slider_title'); ?>
    <?php $main_page_working_on_slider_item = get_field('main_page_working_on_slider_item'); ?>
    <?php $main_page_working_on_partners = get_field('main_page_working_on_partners'); ?>

    <section id="projects" class="main-page-working-on">
        <div class="main-page-working-on__grid">
            <div class="main-page-working-on__top"></div>
            <div class="main-page-working-on__down"></div>
            <!-- //////////////////////////////// -->
            <div class="main-page-working-on__img-text container">
                <div class="main-page-working-on__text">
                    <h2 class="h2"><?= $main_page_working_on_title ?></h2>
                    <div class="main-page-working-on__text_p paragraph">
                        <?= $main_page_working_on_text ?>
                    </div>
                </div>
                <div class="main-page-working-on__img">
                    <img src="<?= $main_page_working_on_img ?>" alt="">
                </div>
            </div>
            <!-- //////////////////////////////// -->
            <div class="main-page-working-on__slider-wrapper container">
                <div class="main-page-working-on__slider-header">
                    <h3 class="h3"><?= $main_page_working_on_slider_title ?></h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Layout.svg" alt="">
                </div>
                <div class="main-page-working-on__slider">
                    <?php foreach ($main_page_working_on_slider_item as $working_on_slider_item) { ?>
                    <div class="main-page-working-on__slider-item"
                        style='background-image: url("<?= $working_on_slider_item['working_on_slider_bg'] ?>");'>
                        <div class="main-page-working-on__slider-cont">
                            <div class="main-page-working-on__slider-title">
                                <?= $working_on_slider_item['working_on_slider_title'] ?>
                            </div>
                            <div class="main-page-working-on__slider-text">
                                <?= $working_on_slider_item['working_on_slider_text'] ?>
                            </div>
                            <div class="main-page-working-on__slider-tech">
                                <?php foreach ($working_on_slider_item['working_on_slider_tech'] as $working_on_slider_item_inner) { ?>
                                <span><?= $working_on_slider_item_inner['working_on_slider_tech_inner'] ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- //////////////////////////////// -->
            <div class="main-page-working-on__company container">
                <?php foreach ($main_page_working_on_partners as $working_on_partners) { ?>
                <div class="main-page-working-on__company_item">
                    <img src="<?= $working_on_partners['main_page_working_on_partners_image'] ?>" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <!-- //////////////////////////////// -->
    <?php $main_page_soc_pack_title = get_field('main_page_soc_pack_title'); ?>
    <?php $main_page_soc_pack_tabs = get_field('main_page_soc_pack_tabs'); ?>

    <div class="page-anchor" id="soc-pack"></div>
    <section class="main-page-soc-pack container">

        <div class="main-page-soc-pack__title">
            <h2 class="h2"><?= $main_page_soc_pack_title ?></h2>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path2.svg" alt="">
            <div></div>
        </div>
        <div class="main-page-soc-pack__tab-wrapper">
            <div class="main-page-soc-pack__tabs">
                <?php foreach ($main_page_soc_pack_tabs as $soc_pack_tabs) { ?>
                <div class="main-page-soc-pack__tab ">
                    <?= $soc_pack_tabs['main_page_soc_pack_tabs_title'] ?>
                </div>
                <?php } ?>
            </div>
            <div class="tab_content">

                <?php foreach ($main_page_soc_pack_tabs as $soc_pack_tabs) { ?>
                <div class="main-page-soc-pack__tab-item">
                    <div class="main-page-soc-pack__tab-item-image"
                        style="background-image: url(<?= $soc_pack_tabs['main_page_soc_pack_tabs_image'] ?>)">
                    </div>
                    <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--desk"
                        style="background: linear-gradient(to left, transparent 40%, <?=$soc_pack_tabs['main_page_soc_pack_tabs_gradient_color'] ?> 58%);">
                        <?= $soc_pack_tabs['main_page_soc_pack_tabs_list'] ?>
                    </div>
                    <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--tablet"
                        style="background: linear-gradient(to left, transparent 37%, <?=$soc_pack_tabs['main_page_soc_pack_tabs_gradient_color'] ?> 48%);">
                        <?= $soc_pack_tabs['main_page_soc_pack_tabs_list'] ?>
                    </div>
                    <div class="main-page-soc-pack__tab-ul__wrapper tab-ul__wrapper--mobile"
                        style="background: linear-gradient(to left, transparent -360%, <?=$soc_pack_tabs['main_page_soc_pack_tabs_gradient_color'] ?>  100%);">
                        <?= $soc_pack_tabs['main_page_soc_pack_tabs_list'] ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- //////////////////////////////// -->
    <?php $main_page_important_to_us_title = get_field('main_page_important_to_us_title'); ?>
    <?php $main_page_important_to_us_item = get_field('main_page_important_to_us_item'); ?>

    <section class="main-page-important-to-us">
        <div class="container">
            <div class="main-page-important-to-us__title">
                <h2 class="h2"><?= $main_page_important_to_us_title ?></h2>
                <div></div>
            </div>
            <div class="main-page-important-to-us__inner">
                <?php $i = 0; ?>
                <?php foreach ($main_page_important_to_us_item as $important_to_us_item) { ?>
                <?php $i++; ?>
                <div class="main-page-important-to-us__item">
                    <div class="main-page-important-to-us__item-front">
                        <img src="<?= $important_to_us_item['front_img'] ?>" alt="">
                        <div class="front-num"><?= $i ?></div>
                        <div class="front-text-title">
                            <?= $important_to_us_item['front_text'] ?>
                        </div>
                    </div>
                    <div class="main-page-important-to-us__item-back">
                        <div class="back-num"><?= $i ?></div>
                        <div class="back-text-title">
                            <?= $important_to_us_item['back_title'] ?>
                        </div>
                        <div class="back-text-text">
                            <?= $important_to_us_item['back_text'] ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- //////////////////////////////// -->
    <?php $main_page_what_they_say_title = get_field('main_page_what_they_say_title'); ?>
    <?php $main_page_what_they_say_our_partners_title = get_field('main_page_what_they_say_our_partners_title'); ?>
    <?php $main_page_what_they_say_slide = get_field('main_page_what_they_say_slide'); ?>
    <?php $main_page_what_they_say_our_partners = get_field('main_page_what_they_say_our_partners'); ?>


    <section class="main-page-what-they-say container">
        <div class="main-page-what-they-say__title">
            <h2 class="h2"><?= $main_page_what_they_say_title ?></h2>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/et.svg" alt="">
        </div>
        <div class="main-page-what-they-say__slider">
            <?php foreach ($main_page_what_they_say_slide as $what_they_say_slide) { ?>

            <div class="main-page-what-they-say__slide">
                <div class="main-page-what-they-say__slide-inner">
                    <div class="what-they-say__slide-left">
                        <div class="what-they-say__slide-quote paragraph">
                            <?= $what_they_say_slide['slide_quote'] ?>
                        </div>
                        <div class="what-they-say__slide-name-prof">
                            <div class="what-they-say__slide-name">
                                <?= $what_they_say_slide['slide_name'] ?>
                            </div>
                            <div class="what-they-say__slide-prof">
                                <?= $what_they_say_slide['slide_prof'] ?>
                            </div>
                        </div>
                        <div class="quote-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/“.svg" alt="">
                        </div>
                    </div>
                    <div class="what-they-say__slide-img">
                        <img src="<?= $what_they_say_slide['slide_img'] ?>" alt="">
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
        <div class="main-page-what-they-say__our-partners">
            <h3 class="h3"><?= $main_page_what_they_say_our_partners_title ?></h3>
            <ul>
                <?php foreach ($main_page_what_they_say_our_partners as $our_partners) { ?>
                <li>
                    <img src="<?= $our_partners['our_partners'] ?>" alt="">
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>



    <!-- //////////////////////////////// -->

    <div class="page-anchor" id="vacancy"></div>
    <section class="main-page-vacancy">
        <div class="container">
            <div class="main-page-vacancy__header">
                <div class="main-page-vacancy__title">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path11.svg" alt="">
                    <h2 class="h2">Вакансии</h2>
                </div>
                <div class="main-page-vacancy__filter">
                    <?php         
                    $tags = get_tags();
                    $html = ' <ul><li class="main-page-vacancy__filter-item main-page-vacancy__filter-item-show-all active"><button>Все</button></li>';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );

                        $html .= "<li class='main-page-vacancy__filter-item {$tag->name}'><button class='{$tag->slug}'>";
                        $html .= "{$tag->name}</button></li>";
                    }

                    $html .= ' </ul>';

                    echo $html; ?>

                </div>
            </div>
            <div class="main-page-vacancy__accordions">
                <!-- ====== LEFT ====== -->
                <?php
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => 'all vacancy',
                ];
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) { ?>
                <ul>
                    <?php while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        $post_id = get_the_ID();
                        ?>



                    <li id="post-<?php echo $post_id; ?>" class='vacancy_location <?php $posttags = get_the_tags();
                            if ($posttags) {
                                foreach ($posttags as $tag) { echo $tag->name . ' '; ?> <?php }
                            }
                            ?>'>

                        <div class="accordion-button" <?php post_class(); ?>>
                            <div class="accordion-button-first"><?php the_title(); ?></div>
                            <div class="accordion-button-second__wrapper">
                                <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                                foreach ($posttags as $tag) { ?>
                                <span class="accordion-button-second">
                                    <?php echo $tag->name . ' '; ?>
                                </span>
                                <?php }
                            }
                            ?>
                            </div>
                        </div>
                        <div class="accordion-panel">
                            <?php get_template_part( 'template-parts/vacancy-block' ); ?>

                            <div class="accordion-panel__show-more">
                                <a href="<?php the_permalink(); ?>">Узнать больше</a>
                            </div>
                        </div>
                    </li>
                    <?php
                    } ?>
                </ul> <!-- END LEFT -->
                <?php // Обязательно сбрасываем запрос, чтобы не сломать остатки лендинга.
                wp_reset_query();}
                ?>
            </div>
    </section>
    <!-- //////////////////////////////// -->
    <?php $main_page_video = get_field('main_page_video'); ?>
    <?php $main_page_video_poster = get_field('main_page_video_poster'); ?>


    <section class="main-page-video container">
        <style>
        .videoPoster {
            background-image: url(<?= $main_page_video_poster ?>);
        }

        .videoPoster:before {
            background-image: url(<?php echo esc_url(get_template_directory_uri());
            ?>/img/icon/play.png);
        }
        </style>
        <div class="video_wrapper js-videoWrapper">
            <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                data-src="<?= $main_page_video ?>?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>

            <!-- <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen
                data-src="<?= $main_page_video ?>?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe> -->
            <button class="videoPoster js-videoPoster"></button>
        </div>
    </section>




    <!-- //////////////////////////////// -->
    <?php $main_page_facts_title = get_field('main_page_facts_title'); ?>
    <?php $main_page_facts_text = get_field('main_page_facts_text'); ?>
    <?php $main_page_facts_item = get_field('main_page_facts_item'); ?>
    <?php $main_page_facts_double_item = get_field('main_page_facts_double_item'); ?>
    <?php $main_page_facts_item_full_line = get_field('main_page_facts_item_full_line'); ?>


    <section class="main-page-facts container">
        <div class="main-page-facts__title">
            <h2 class="h2"><?= $main_page_facts_title ?></h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path44.svg" alt="">
        </div>
        <div class="main-page-facts__text paragraph">
            <?= $main_page_facts_text ?>
        </div>
        <div class="main-page-facts__percents">

            <?php if ($main_page_facts_double_item) { $i = 0; foreach ($main_page_facts_double_item as $fact_double_item) { ?>
            <?php $i++; ?>
            <?php $fact_double_item_second_percents = 100 - $fact_double_item['percents'] ?>

            <!-- <?php var_dump($i) ?> -->
            <style>
            @media (min-width: 50px) and (max-width: 798px) {
                .facts-inner {
                    width: 100%;
                }

                .facts-inner.double-facts-1 {
                    width: 100% !important;
                }

                .facts-inner.double-facts-1 .facts-color {
                    width: <?=$fact_double_item['percents'] ?>%;
                }

                .facts-inner.double-facts-2 {
                    width: 100% !important;
                }

                .facts-inner.double-facts-2 .facts-color {
                    width: <?=$fact_double_item_second_percents ?>%;
                }
            }
            </style>


            <div class="facts-inner double-facts-1" style="width: <?=$fact_double_item['percents'] ?>%;">
                <div class="facts-color"
                    style="background: <?= $fact_double_item['first_color_bg'] ?>; font-size:<?= $fact_double_item['first_font_size'] ?>px; color:<?= $fact_double_item['first_font_color'] ?>">
                    <div class="facts-num-percents"><?= $fact_double_item['percents'] ?>%</div>
                    <div class="facts-num-text"><?= $fact_double_item['first_text'] ?></div>
                </div>
            </div>


            <div class="facts-inner double-facts-2" style="width: <?=$fact_double_item_second_percents ?>%;">
                <div class="facts-color"
                    style="background: <?= $fact_double_item['second_color_bg'] ?>; font-size:<?= $fact_double_item['second_font_size'] ?>px; color:<?= $fact_double_item['second_font_color'] ?>">
                    <div class="facts-num-percents"><?= $fact_double_item_second_percents ?>%</div>
                    <div class="facts-num-text"><?= $fact_double_item['second_text'] ?></div>
                </div>
            </div>
            <?php } } ?>


            <?php foreach ($main_page_facts_item as $fact_item) { ?>
            <div class="facts-inner">
                <div class="facts-color"
                    style='background: <?= $fact_item['fact_color'] ?>; width: <?= $fact_item['fact_percent'] ?>%;'>
                    <div class="facts-num-percents"
                        style="color:<?= $fact_item['fact_font_color'] ?>; font-size:<?= $fact_item['fact_font_size'] ?>px;">
                        <?= $fact_item['fact_percent'] ?>%
                    </div>
                    <div class="facts-num-text"
                        style="color:<?= $fact_item['fact_font_color'] ?>; font-size:<?= $fact_item['fact_font_size'] ?>px">
                        <?= $fact_item['fact_text'] ?>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php foreach ($main_page_facts_item_full_line as $item_full_line) { ?>
            <div class="facts-inner facts-inner__full-line">
                <div class="facts-color" style='background: <?= $item_full_line['fact_color'] ?>; width: 100%;'>
                    <div class="facts-num-percents"
                        style="color:<?= $item_full_line['fact_font_color'] ?>; font-size:<?= $item_full_line['fact_font_size'] ?>px;">
                        <?= $item_full_line['fact_year'] ?><?= $item_full_line['fact_year_text'] ?>
                    </div>
                    <div class="facts-num-text"
                        style="color:<?= $item_full_line['fact_font_color'] ?>; font-size:<?= $item_full_line['fact_font_size'] ?>px">
                        <?= $item_full_line['fact_text'] ?>
                    </div>
                </div>
            </div>
            <?php } ?>



        </div>
    </section>
    <!-- //////////////////////////////// -->
    <section id="contacts" class="main-page-comtact-form"
        style='background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/img/fon.jpg");'>
        <div class="container">
            <div class="main-page-comtact-form__wrapper">
                <div class="main-page-comtact-form__inner non-popups">
                    <div class="contact-form col-2">
                        <?= do_shortcode( '[contact-form-7 id="307" title="Contact form"]' ); ?>
                        <? // get_template_part('/template-parts/contact-form-page');?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- traineeship block-->
    <section id="trainee" class="main-page__trainee">
        <div class="container">
            <div class="main-page-soc-pack__title">
                <h2 class="h2">
                    <?='Стажировка';?>
                </h2>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/img/svg/trainee.svg" alt="">
            </div>
            <div class="trainee__container">
                <div class="trainee__item">
                    <ul>
                        <li>Длительность 1–3 месяца</li>
                        <li>Не оплачивается</li>
                        <li>С возможным трудоустройством</li>
                    </ul>
                    <img class="trainee__underline"
                         src="<?= esc_url(get_template_directory_uri()); ?>/img/svg/underline.svg"
                         alt=""
                    >
                </div>
                <div class="trainee__item">
                    <h3>Как проходит стажировка?</h3>
                    <ol>
                        <li>Стажера прикрепляют к команде и выделяют ментора (куратора)
                            для сопровождения на протяжении всей стажировки.
                        </li>
                        <li>
                            Стажировка заканчивается «защитой», на которой стажер
                            рассказывает о своей работе. На основании «защиты» принимается решение о трудоустройстве.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="trainee__container trainee__background">
                <div class="trainee__image">
                    <img src="/wp-content/themes/solbeg-hr/img/trainee.svg" alt="">
                </div>
                <div class="trainee__item">
                    <h3>Как попасть на стажировку?</h3>
                    <ul class="trainee__ul">
                        <li>Подать заявку</li>
                        <li>Прикрепить резюме</li>
                    </ul>
                    <p>
                        После рассмотрения заявки мы свяжемся с вами для назначения интервью, по результатам которого будет принято решение
                        о приглашении вас на стажировку.
                    </p>
                    <a href="#" class="base__button popup-open__link" data-form="trainee">
                        Подать заявку
                    </a>
                </div>
            </div>
        </div>
    </section>


</main><!-- #main -->
<?php get_footer(); ?>