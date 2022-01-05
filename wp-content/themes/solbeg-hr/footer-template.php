<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solbeg_hr
 */
?>
<?php $footer_poland = get_field('main_page_top_block_title'); ?>
<?php $footer_address_1 = get_field('footer_address_1', 2); ?>
<?php $footer_address_2 = get_field('footer_address_2', 2); ?>
<?php $footer_address = get_field('footer_adress', 2); ?>
<?php $footer_social_icons = get_field('footer_social_icons', 2); ?>
<?php $footer_phone = get_field('footer_phone', 2); ?>
<?php $footer_email = get_field('footer_email', 2); ?>
<?php $footer_privacy_policy = get_field('footer_privacy_policy', 2); ?>
<?php $footer_privacy_policy_link = get_field('footer_privacy_policy_link', 2); ?>
<?php $footer_copyright = get_field('footer_copyright', 2); ?>
<?php $train_form_code = get_field('train_form_code', 2); ?>
<?php $contact_form_code = get_field('contact_form_code',2); ?>

<footer class="alt">
    <div class="footer">
        <?php if ($footer_address): ?>
            <div class="footer__addresses">
                <?php foreach ($footer_address as $item) :
                    $adress = $item['item']; ?>
                    <div class="footer__address">
                        <?php echo wp_kses_post($adress ) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($footer_social_icons): ?>
            <div class="footer__socials">
                <ul>
                    <?php foreach ($footer_social_icons as $social_icon) :
                        $link = $social_icon['social_icon_link'];
                        $icon = $social_icon['social_icon_img'];
                        ?>
                        <li>
                            <a href="<?php echo esc_url($link); ?>"
                               aria-label="<?php echo esc_attr($link); ?>">
                                <img src="<?php echo esc_url($icon["url"]); ?>"
                                     alt="<?php echo esc_attr($icon["alt"]); ?>">
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="footer__contacts">
            <ul>
                <?php if ($footer_phone): ?>
                    <li>
                        <?php foreach ($footer_phone as $phone) :
                            $text = $phone['text'];
                            $number = $phone['item'];
                            ?>
                            <a href="tel:<?php echo esc_html($number); ?>">
                                <?php echo esc_html($text); ?>
                            </a>
                        <?php endforeach; ?>
                    </li>
                <?php endif; ?>
                <?php if ($footer_email): ?>
                    <li>
                        <a href="mailto:<?php echo esc_html($footer_email); ?>">
                            <span class="email"><?php echo esc_html($footer_email); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="footer__button popup-open__link">
                <button>
                    <?php echo esc_html("Отправить резюме"); ?>
                </button>
            </div>
        </div>
        <div class="footer__copyright">
            <?php if ($footer_privacy_policy): ?>
                <a href="<?php echo esc_url($footer_privacy_policy_link); ?>">
                    <?php echo esc_html($footer_privacy_policy); ?>
                </a>
            <?php endif; ?>
            <?php if ($footer_copyright): ?>
                <span>
                    <?php echo esc_html($footer_copyright); ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</footer>
<div class="popup">
    <div class="popup-form__wrapper">
        <div class="popup-close">
            <a id="popup-close__link" href=""><img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/times.png" alt=""></a>
        </div>
        <div class="main-page-comtact-form__inner" id="contact-form">
            <div class="comtact-form">
                <?php if ($contact_form_code): ?>
                    <?php echo do_shortcode( "". $contact_form_code ."" );?>
                <?php endif; ?>
            </div>
        </div>
        <div class="main-page-comtact-form__inner" id="trainee">
            <div class="comtact-form">
                <?php if ($train_form_code): ?>
                    <?php echo do_shortcode( "". $train_form_code ."" );?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<section class="main-page-comtact-form__thanks">
    <div class="main-page-comtact-form__thanks-wrapper">
        <div class="thanks-inner">
            <div class="thanks-inner__image">
            </div>
            <div class="thanks-inner__title">
                Спасибо!
            </div>
            <div class="thanks-inner__text">
                Ваше сообщение отправлено
            </div>
            <div class="thanks-inner__button">
                <button>Оk</button>
            </div>
        </div>
    </div>
</section>
