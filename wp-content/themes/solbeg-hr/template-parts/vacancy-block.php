<?php
/**
 * @package Solbeg_hr
 */

?>
<div class="vacancy-info-block__grid">
    <div class="vacancy-info-block__info">
        <?php the_content(); ?>
    </div>
    <?php
    $featured_posts = get_field('manager_block');
    if ($featured_posts): ?>
        <ul>
            <?php foreach ($featured_posts as $post):
                setup_postdata($post); ?>
                <?php $manager_name = get_field('manager_name'); ?>
                <?php $manager_position = get_field('manager_position'); ?>
                <?php $manager_foto = get_field('manager_foto'); ?>


                <?php $manager_mail = get_field('manager_mail'); ?>
                <?php $manager_phone = get_field('manager_phone'); ?>
                <?php $manager_linked_in_text = get_field('manager_linked_in_text'); ?>
                <?php $manager_linked_in_link = get_field('manager_linked_in_link'); ?>
                <?php $manager_skype_text = get_field('manager_skype_text'); ?>
                <?php $manager_skype_link = get_field('manager_skype_link'); ?>

                <div class="vacancy-info-block__manager">
                    <div class="vacancy-info-block__manager-info">
                        <?php if ($manager_foto): ?>
                            <div class="vacancy-info-block__manager-img">
                                <img src="<?php echo esc_url($manager_foto['url']); ?>"
                                     alt="<?php echo esc_attr($manager_foto['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ($manager_name): ?>
                            <div class="vacancy-info-block__manager-name">
                                <?php echo esc_html($manager_name); ?>
                                <?php esc_html(the_title()); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($manager_position): ?>
                            <div class="vacancy-info-block__manager-position">
                                <?php esc_html($manager_position); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="vacancy-info-block__manager-contact">
                        <ul>
                            <?php if ($manager_mail): ?>
                                <li class="manager-mail">
                                    <a href="mailto:<?php echo esc_url($manager_mail); ?>">
                                        <div class="vacancy-info-block__manager-icon">
                                        </div>
                                        <span><?php echo esc_html($manager_mail) ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($manager_phone): ?>
                                <li class="manager-phone">
                                    <a href="tel::<?php echo esc_url($manager_phone); ?>">
                                        <div class="vacancy-info-block__manager-icon">
                                        </div>
                                        <span><?php echo esc_html($manager_phone); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($manager_skype_link): ?>
                                <li class="manager-skype">
                                    <a href="skype:<?php echo esc_url($manager_skype_link); ?>?chat">
                                        <div class="vacancy-info-block__manager-icon">
                                        </div>
                                        <span><?php echo esc_html($manager_skype_text); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($manager_linked_in_link): ?>
                                <li class="manager-linked-in">
                                    <a target="_blank" href="<?php echo esc_url($manager_linked_in_link); ?>">
                                        <div class="vacancy-info-block__manager-icon">
                                        </div>
                                        <span><?php echo esc_html($manager_linked_in_text); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="vacancy-info-block__manager-button">
                            <button class="popup-open__link"><?php echo esc_html("Откликнуться"); ?></button>
                        </div>

                    </div>
                    <div class="vacancy-info-block__share">
                        <div class="vacancy-info-block__share-text">
                            <?php echo esc_html("Поделиться:"); ?>
                        </div>
                        <div class="vacancy-info-block__share-icons main-share-icons">
                            <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                        </div>
                    </div>
                </div>
            <?php
            endforeach; ?>
        </ul>
        <?php
        wp_reset_postdata(); ?>
    <?php endif;
    ?>
</div>