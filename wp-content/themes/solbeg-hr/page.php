<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Solbeg_hr
 */

get_header();
?>

<section class="page-top-block"
    style='background-image: url("<?php echo esc_url( get_template_directory_uri()); ?>/img/vacancy-top.jpg");'>
    <div class="container">
        <div class="page-top-block__prev">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
                    src="<?php echo esc_url( get_template_directory_uri()); ?>/img/icon/left2.png" alt=""></a>
        </div>
        <div class="page-top-block__name">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
    <img class="page-top-block__back-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/img/qaqaqa.png"
        alt="">
</section>


<section class="sample-page">
    <div class="sample-page-container">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();