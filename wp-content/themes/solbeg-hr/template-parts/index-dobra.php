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
                <p class="index__text">
                    <?php echo esc_html($index_text); ?>
                </p>
            <?php endif; ?>
            <div class="index__container">
                <div class="index__rating">
                    <div class="index__rating-col">
                    </div>
                    <?php if ($index_subtext): ?>
                        <div class="index__rating-text">
                            <?php echo esc_html($index_subtext); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($index_button):
                        $text = $index_button['text'];
                        $link = $index_button['link'];
                        ?>
                        <a href="<?php echo esc_url($link); ?>" target="_blank"
                           class="index__rating-link"><?php echo esc_html($text); ?></a>
                    <?php endif; ?>
                </div>
                <?php if ($index_item):
                    ?>
                    <div class="index__info">
                        <?php foreach ($index_item as $item) :
                            $name = $item['name'];
                            $color = $item['color'];
                            $marker = $item['marker'];
                            $total_proc = 0;
                            ?>
                            <div class="index__info__item">
                                <div class="index__info__item-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="58" viewBox="0 0 76 58"
                                         fill="none">
                                        <path d="M34.4838 1.42641C36.8122 -0.0401769 39.7975 0.0523225 42.0306 1.66025L72.3875 23.5187C76.131 26.2141 76.131 31.7859 72.3875 34.4814L42.4643 56.0274C40.02 57.7875 36.7056 57.7163 34.3391 55.853L3.52008 31.5876C-0.146883 28.7004 0.14954 23.0529 4.09861 20.5655L34.4838 1.42641Z"
                                              fill="<?php echo esc_html($color); ?>">
                                    </svg>
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
                                        echo esc_html($total_round . ' из 3.0');
                                        ?>
                                    </p>
                                </div>
                                <div class="index__info__item__marker">
                                    <?php foreach ($item['marker'] as $subitem) :
                                        $procent = $subitem['procent'];
                                        ?>
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.0792 1.93239C6.70914 0.335348 9.34272 0.423304 10.8625 2.12554L14.6216 6.33603C15.9765 7.8536 15.9765 10.1464 14.6216 11.664L11.1917 15.5057C9.55401 17.34 6.66463 17.2763 5.10944 15.3715L1.31063 10.7189C0.00204957 9.11617 0.131702 6.78003 1.60959 5.33197L5.0792 1.93239Z"
                                                  fill="<?php echo esc_html($color); ?>"
                                                  fill-opacity="<?php if ($procent < 10) {
                                                      echo '10';
                                                  } else {
                                                      echo $procent;
                                                  } ?>%"/>
                                        </svg>
                                    <?php endforeach; ?>
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
                    <p class="total_all"><?php echo esc_html($total_all); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>