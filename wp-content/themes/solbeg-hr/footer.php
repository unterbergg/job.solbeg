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
<?php $footer_address_1 = get_field('footer_address_1', 2); ?>
<?php $footer_address_2 = get_field('footer_address_2', 2); ?>
<?php $footer_social_icons = get_field('footer_social_icons', 2); ?>
<?php $footer_phone = get_field('footer_phone', 2); ?>
<?php $footer_email = get_field('footer_email', 2); ?>
<?php $footer_privacy_policy = get_field('footer_privacy_policy', 2); ?>
<?php $footer_privacy_policy_link = get_field('footer_privacy_policy_link', 2); ?>
<?php $footer_copyright = get_field('footer_copyright', 2); ?>

<footer>
    <div class="footer">
        <div class="footer__minsk-adress">
            <?= $footer_address_1 ?>
        </div>
        <div class="footer__brest-adress">
            <?= $footer_address_2 ?>
        </div>
        <div class="footer__social-icon">
            <ul>
                <?php  foreach ($footer_social_icons as $social_icon) {?>
                <li>
                    <a href="<?= $social_icon['social_icon_link'] ?>">
                        <img src="<?= $social_icon['social_icon_img'] ?>" alt="instagram">
                    </a>
                </li>
                <?php }; ?>
            </ul>
        </div>
        <div class="footer__contacts">
            <ul>accordion-button
                <li><a href="tel:<?= $footer_phone ?>"><?= $footer_phone ?></a></li>
                <li><a href="mailto:<?= $footer_email ?>"><?= $footer_email ?></a></li>
            </ul>
        </div>
        <div class="footer__button popup-open__link">
            <button>Отправить резюме </button>
        </div>
        <div class="footer__copyright">
            <ul>
                <li><a href="<?= $footer_privacy_policy_link ?>"><?= $footer_privacy_policy ?></a></li>
                <li><?= $footer_copyright ?></li>
            </ul>
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
                <!--<fieldset>
                    <legend class="h3">Связаться с нами</legend>-->
<!--                    --><?php //echo do_shortcode( '[contact-form-7 id="307" title="Contact form"]' ); ?>
                    <?php get_template_part('/template-parts/contact-form');?>
                <!--</fieldset>-->
            </div>
        </div>
        <div class="main-page-comtact-form__inner" id="trainee">
           <div class="comtact-form">
                <fieldset>
                    <legend class="h3">Заявка на стажировку</legend>
                    <?php echo do_shortcode( '[contact-form-7 id="839" title="Trainee Form"]' ); ?>
                </fieldset>
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

<?php wp_footer(); ?>
</body>

</html>