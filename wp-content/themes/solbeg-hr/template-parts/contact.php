
<section id="contacts" class="main-page-comtact-form" style='background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/img/fon.jpg");'>
    <div class="container">
        <div class="main-page-comtact-form__wrapper">
            <div class="main-page-comtact-form__inner non-popups">
                <div class="contact-form col-2">
                    <h2><?php echo esc_html("Хотите у нас работать? Напишите нам");?></h2>
                    <?php echo do_shortcode('[contact-form-7 title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>