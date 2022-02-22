<?php
$index_title = get_field('index_title');
$index_text = get_field('index_text');
$index_subtext = get_field('index_subtext');
$index_button = get_field('index_button');
$index_item = get_field('index_item');
?>
<?php if (get_field('display_section__index_good') != ''): ?>

    <section class="index">
        <div class="container">
            <?php if ($index_title): ?>
                <h2 class="h2">
                    <?php echo esc_html($index_title); ?>
                </h2>
            <?php endif; ?>
            <?php if ($index_text): ?>
            <div class="index__container">
                <div class="index__container_wrap">
                    <p class="index__text">
                        <?php echo esc_html($index_text); ?>
                        <?php if ($index_button):
                            $text = $index_button['text'];
                            $link = $index_button['link'];
                            ?>

                        <?php endif; ?>
                    </p>
                    <a href="<?php echo esc_url($link); ?>" target="_blank"
                       class="index__rating-link"><?php echo esc_html($text); ?></a>
                </div>

                <div class="index__rating">
                    <div class="index__rating-col">
                    </div>
                    <?php if ($index_subtext): ?>
                        <div class="index__rating-text">
                            <?php echo esc_html($index_subtext); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="index__container">
                <?php if ($index_item):
                    ?>
                    <div class="index__info">
                        <?php foreach ($index_item as $item) :
                            $name = $item['name'];
                            $icons = $item['icons'];
                            $marker = $item['marker'];
                            $total_proc = 0;
                            ?>
                            <div class="index__info__item">
                                <div class="index__info__item-rating">
                                    <img src="<?php echo esc_url($icons['url']); ?>" alt="">
                                    <p>
                                        <?php
                                        $count = count($item['marker']);
                                        foreach ($item['marker'] as $subitem) :
                                            $procent = $subitem['procent'];
                                            $total_proc = $subitem['procent'] + $total_proc;
                                            ?>
                                        <?php endforeach; ?>
                                        <?php
                                        $total = (3 * $total_proc) / ($count * 100);
                                        $total_round = round($total, 1);
                                        echo esc_html($total_round);
                                        ?>
                                    </p>
                                </div>
                                <div class="index__info__item-text">
                                    <?php echo esc_html($name); ?>
                                </div>
                            </div>
                            <?php
                            $total_all = $total_round + $total_all;
                        endforeach;
                        ?>
                    </div>
                    <p class="total_all"><?php echo esc_html(round($total_all,1)); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>