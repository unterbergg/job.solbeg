<?php
$trainee_title = get_field('trainee_title');
$trainee_list_left = get_field('trainee_list_left');
$trainee_subtitle = get_field('trainee_subtitle');
$trainee_list_right = get_field('trainee_list_right');
$trainee_form_title = get_field('trainee_form_title');
$trainee_form_list = get_field('trainee_form_list');
$trainee_form_text = get_field('trainee_form_text');
$trainee_form_image = get_field('trainee_form_image');
$trainee_form_button = get_field('trainee_form_button');
?>

<section class="main-page__trainee" id="trainee">
    <div class="container">
        <div class="main-page-soc-pack__title">
            <?php if ($trainee_title): ?>
                <h2 class="h2">
                    <?php echo esc_html($trainee_title); ?>
                </h2>
            <?php endif; ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/trainee.svg" alt="">
        </div>
        <div class="trainee__container">
            <?php if ($trainee_list_left): ?>
                <div class="trainee__item">
                    <ul>
                        <?php foreach ($trainee_list_left as $items) :
                            $item = $items['item'];
                            ?>
                            <li>
                                <?php echo esc_html($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <img class="trainee__underline"
                         src="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/underline.svg">
                </div>
            <?php endif; ?>
            <?php if ($trainee_list_right): ?>
                <div class="trainee__item">
                    <h3><?php echo esc_html($trainee_subtitle); ?></h3>
                    <ol>
                        <?php foreach ($trainee_list_right as $items) :
                            $item = $items['item'];
                            ?>
                            <li>
                                <?php echo esc_html($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            <?php endif; ?>
        </div>
        <div class="trainee__container trainee__background">
            <?php if ($trainee_form_image): ?>
                <div class="trainee__image">
                    <img src="<? echo esc_url($trainee_form_image['url']); ?>"
                         alt="<? echo esc_attr($trainee_form_image['alt']); ?>">
                </div>
            <?php endif; ?>
            <div class="trainee__item">
                <?php if ($trainee_form_title): ?>
                    <h3>
                        <?php echo esc_html($trainee_form_title); ?>
                    </h3>
                <?php endif; ?>
                <?php if ($trainee_form_list): ?>
                    <ul class="trainee__ul">
                        <?php foreach ($trainee_form_list as $items) :
                            $item = $items['item'];
                            ?>
                            <li>
                                <?php echo esc_html($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($trainee_form_text): ?>
                    <p>
                        <?php echo esc_html($trainee_form_text); ?>
                    </p>
                <?php endif; ?>
                <?php if ($trainee_form_button): ?>
                    <a href="#" class="base__button popup-open__link" data-form="trainee">
                        <?php echo esc_html($trainee_form_button); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>