<?php $display_section__contact = get_field('display_section__contact'); ?>
<?php $contact_title = get_field('contact_title'); ?>
<?php $contact_form_code = get_field('contact_form_code'); ?>
<?php $contact_form_invalid = get_field('contact_form_invalid'); ?>
<section id="contacts" class="main-page-comtact-form">
    <div class="container">
        <div class="main-page-comtact-form__wrapper">
            <div class="main-page-comtact-form__inner non-popups">
                <div class="contact-form col-2">
                    <?php if ($contact_title): ?>
                        <h2><?php echo esc_html($contact_title); ?></h2>
                    <?php endif; ?>
                    <?php if ($contact_form_code): ?>
                        <?php echo do_shortcode("" . $contact_form_code . ""); ?>
                    <?php endif; ?>
                </div>
                <?php if ($contact_form_invalid):
                    $text_email = $contact_form_invalid['text_email'];
                    $text_file = $contact_form_invalid['text_file'];
                        ?>
                    <style>
                        .contact-form__resume.show-tip:after {
                            content: '<?php echo $text_file ?>';
                        }

                        .contact-form__grid .email.invalid::after {
                            content: '<?php echo $text_email ?>';
                        }
                    </style>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>