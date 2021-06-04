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
        <!-- //////////////////////////////// -->
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
                <div class="vacancy-info-block__manager-img">
                    <img src="  <?= $manager_foto ?>" alt="">
                <!-- <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?> -->
                </div>
                <div class="vacancy-info-block__manager-name">
                    <?= $manager_name ?>
                    <?php the_title(); ?>
                </div>
                <div class="vacancy-info-block__manager-position">
                    <?= $manager_position ?>
                </div>
            </div>
            <div class="vacancy-info-block__manager-contact">
                <ul>
                    <?php if ($manager_mail): ?>
                    <li class="manager-mail">
                        <a href="mailto:<?= $manager_mail ?>">
                            <div class="vacancy-info-block__manager-icon">                               
                            </div>
                            <span><?= $manager_mail ?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if ($manager_phone): ?>
                    <li class="manager-phone">
                        <a href="tel::<?= $manager_phone ?>">
                            <div class="vacancy-info-block__manager-icon">                              
                            </div>
                            <span><?= $manager_phone ?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if ($manager_skype_link): ?>
                    <li class="manager-skype">
                        <a href="skype:<?=$manager_skype_link ?>?chat">
                            <div class="vacancy-info-block__manager-icon">                               
                            </div>
                            <span><?= $manager_skype_text ?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if ($manager_linked_in_link): ?>
                    <li class="manager-linked-in">
                        <a href="<?= $manager_linked_in_link ?>">
                            <div class="vacancy-info-block__manager-icon">                               
                            </div>
                            <span><?= $manager_linked_in_text ?></span>
                        </a>
                    </li>
                    <?php endif;?>
                </ul>
                <div class="vacancy-info-block__manager-button">
                    <button class="popup-open__link">Откликнуться</button>
                </div>

            </div>
            <div class="vacancy-info-block__share">
                <div class="vacancy-info-block__share-text">
                    Поделиться:
                </div>        
                <div class="vacancy-info-block__share-icons main-share-icons">
					     <?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
<!--                     <ul>
                        <li> <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/fff.png"
                                    alt=""> </a>
                        </li>
                        <li> <a href=""><img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/innn.png"
                                    alt=""></a>
                        </li>
                        <li> <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/ttt.png"
                                    alt=""></a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>




        <?php
                                    endforeach; ?>
    </ul>
    <?php // Reset the global post object so that the rest of the page works correctly.
                                wp_reset_postdata(); ?>
    <?php endif;
                                ?>
</div>