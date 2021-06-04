<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Solbeg_hr
 */

get_header();
?>

<main id="primary" class="site-main">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="page-top-block"
        style='background-image: url("<?php echo esc_url( get_template_directory_uri()); ?>/img/vacancy-top.jpg");'>
        <div class="container">
            <div class="page-top-block__prev">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#anchor-vacancy"><img
                        src="<?php echo esc_url( get_template_directory_uri()); ?>/img/icon/left2.png" alt=""></a>
            </div>
            <div class="page-top-block__name">
                <h1><?php the_title() ?></h1>
            </div>
            <?php     $posttags = get_the_tags();
                if( $posttags ){
                foreach( $posttags as $tag ){?>

            <div class="page-top-block__loc"><?php echo $tag->name . ' ';  ?></div>
            <?php } }  ?>


        </div>
        <img class="page-top-block__back-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/img/qaqaqa.png"
            alt="">
    </section>

    <!-- //////////////////////////////// -->

    <section class="vacancy-info-block">
        <div class="container">
			<?php get_template_part( 'template-parts/vacancy-block' ); ?>	
        </div>
        <div class="vacancy-info-block__next-vacancy">
            <?php
		  the_post_navigation(
			 	array(
			 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая:', 'solbeg-hr' ) . '</span> <span class="nav-title">%title</span>',
			 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая:', 'solbeg-hr' ) . '</span> <span class="nav-title">%title</span>',
			 	)
			 );
			?>
        </div>
    </section>
    <?php endwhile; ?>

    <?php endif; ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();