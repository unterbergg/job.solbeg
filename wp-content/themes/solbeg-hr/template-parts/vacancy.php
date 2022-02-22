<?php
$args = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => 'publish'
];
$wp_query = new WP_Query($args);
$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;
?>
<?php if ($published_posts > 0) { ?>
    <section class="main-page-vacancy" id="vacancy">
        <div class="container">
            <div class="main-page-vacancy__header">
                <div class="main-page-vacancy__title">
                    <img class="no-lazyload"
                         src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/Path11.svg" alt="">
                    <h2 class="h2"><?php if (get_field('poland_theme', 2) != '') {
                            echo esc_html("Vacancies");
                        } else {
                            echo esc_html("Вакансии");
                        }
                        ?>
                    </h2>
                </div>
                <?php
                $col_city = wp_count_terms('post_tag');
                if ($col_city > 1) { ?>
                    <div class="main-page-vacancy__filter">
                        <div class="main-page-vacancy__filter-check">
                            <?php if (get_field('poland_theme', 2) != '') {
                                echo esc_html("All cities");
                            } else {
                                echo esc_html("Все города");
                            }
                            ?>
                        </div>
                        <ul class="main-page-vacancy__filter-items">


                            <li class="main-page-vacancy__filter-item main-page-vacancy__filter-item-show-all active">
                                <?php if (get_field('poland_theme', 2) != '') { ?>
                                    <button> <?php echo esc_html("All cities"); ?></button>
                                <?php } else {
                                    ?>
                                    <button> <?php echo esc_html("Все города"); ?></button>
                                <?php } ?>
                            </li>

                            <?php
                            $tags = get_tags();
                            foreach ($tags as $tag) {
                                $tag_link = get_tag_link($tag->term_id);
                                $col_city = wp_count_terms('post_tag');
                                if ($col_city > 1) {
                                    echo "<li class='main-page-vacancy__filter-item {$tag->name}'><button class='{$tag->name}'>";
                                    echo "{$tag->name}</button></li>";
                                } else {
                                    echo "<li class='main-page-vacancy__filter-item {$tag->name} active'><button class='{$tag->name}'>";
                                    echo "{$tag->name}</button></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php }
                ?>
            </div>
            <div class="main-page-vacancy__accordions">
                <?php if ($wp_query->have_posts()) { ?>
                    <ul>
                        <?php while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                            $post_id = get_the_ID();
                            ?>
                            <li id="post-<?php echo $post_id; ?>"
                                class='vacancy_location <?php if ($col_city == 1) {
                                    echo "active";
                                } ?> <?php $posttags = get_the_tags();
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
                                        <a href="<?php the_permalink(); ?>"><?php echo esc_html("Learn more"); ?></a>
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
<?php } ?>