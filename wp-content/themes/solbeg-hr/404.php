<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Solbeg_hr
 */

get_header();
?>

<section class="page-404">
    <div class="page-404__wrapper">
        <div class="page-404__inner">
            <div class="page-404__image">
            </div>
            <div class="page-404__link">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				На главную
				</a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();