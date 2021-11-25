<?php $display_section__contact = get_field('display_section__contact'); ?>
<?php $contact_title = get_field('contact_title'); ?>
<?php $contact_form_code = get_field('contact_form_code'); ?>
<section id="contacts" class="main-page-comtact-form" style='background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/img/fon.jpg");'>
    <div class="container">
        <div class="main-page-comtact-form__wrapper">
            <div class="main-page-comtact-form__inner non-popups">
                <div class="contact-form col-2">
                    <?php if ($contact_title): ?>
                        <h2><?php echo esc_html($contact_title);?></h2>
                    <?php endif; ?>
                    <?php if ($contact_form_code): ?>
                        <?php echo do_shortcode( "'". $contact_form_code ."'" );?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>