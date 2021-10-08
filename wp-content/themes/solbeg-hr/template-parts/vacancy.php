<section class="main-page-vacancy" id="vacancy">
    <div class="container">
        <div class="main-page-vacancy__header">
            <div class="main-page-vacancy__title">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path11.svg" alt="">
                <h2 class="h2"><?php echo esc_html("Вакансии"); ?> </h2>
            </div>
            <div class="main-page-vacancy__filter">
                <div class="main-page-vacancy__filter-check">
                    <?php echo esc_html("Все города"); ?>
                </div>
                <ul class="main-page-vacancy__filter-items">
                    <li class="main-page-vacancy__filter-item main-page-vacancy__filter-item-show-all active">
                        <button><?php echo esc_html("Все города"); ?></button>
                    </li>
                    <?php
                    $tags = get_tags();
                    foreach ($tags as $tag) {
                        $tag_link = get_tag_link($tag->term_id);
                        echo "<li class='main-page-vacancy__filter-item {$tag->name}'><button class='{$tag->name}'>";
                        echo "{$tag->name}</button></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="main-page-vacancy__accordions">
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            ];
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()) { ?>
                <ul>
                    <?php while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        $post_id = get_the_ID();
                        ?>
                        <li id="post-<?php echo $post_id; ?>"
                            class='vacancy_location <?php $posttags = get_the_tags();
                            if ($posttags) {
                                foreach ($posttags as $tag) {
                                    echo $tag->name . ' '; ?> <?php }
                            }
                            ?>'>

                            <div class="accordion-button" <?php echo esc_html(post_class()); ?>>
                                <div class="accordion-button-first"><?php echo esc_html(the_title()); ?></div>
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
                                <?php get_template_part('template-parts/vacancy-block'); ?>
                                <div class="accordion-panel__show-more">
                                    <a href="<?php the_permalink(); ?>"><?php echo esc_html("Узнать больше");?></a>
                                </div>
                            </div>
                        </li>
                        <?php
                    } ?>
                </ul>
                <?php
                wp_reset_query();
            }
            ?>
        </div>
</section>