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
            <div class="page-top-block__loc">
                <?php
                    $posttags = get_the_tags();
                    if( $posttags ){
                        foreach( $posttags as $key => $tag ){
                            echo $tag->name;
                            if( $key != ( count($posttags) - 1 ) ) {
                                echo " / ";
                            }
                        }
                    }
                ?>
            </div>


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
            <? if(!get_previous_post_link()) :?>
                <?
                    global $post;
                    $args = array(
                    'numberposts' => 1, 'post_type' => $post->post_type, 'post_status' => 'publish'
                    );
                    $recent = wp_get_recent_posts( $args, OBJECT );
                    $next_post = ! empty( $recent ) ? array_shift( $recent ) : FALSE;
                ?>
                <nav class="navigation post-navigation" role="navigation">
                    <div class="nav-links">
                        <div class="nav-previous">
                            <a href="<?= get_permalink(get_next_post()->ID)?>" rel="prev">
                                <span class="nav-subtitle">Предыдущая:</span>
                                <span class="nav-title">
                                    <?= get_the_title(get_next_post()->ID);?>
                                </span>
                            </a>
                        </div>
                        <div class="nav-next">
                            <a href="<?= get_permalink($next_post->ID)?>" rel="next">
                                <span class="nav-subtitle">Следующая:</span>
                                <span class="nav-title">
                                    <?= get_the_title($next_post->ID);?>
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            <? else :
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая:', 'solbeg-hr' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая:', 'solbeg-hr' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );
            endif; ?>
            <!--<div class="nav-links">
                <div class="nav-previous">
                    <a href="http://job.solbeg.loc/2021/03/29/net-developer-2/" rel="prev">
                        <span class="nav-subtitle">Предыдущая:</span>
                        <span class="nav-title">.NET Developer</span>
                    </a>
                </div>
                <div class="nav-next">
                    <a href="http://job.solbeg.loc/2021/04/16/ios-developer-2/" rel="next">
                        <span class="nav-subtitle">Следующая:</span>
                        <span class="nav-title">iOS Developer</span>
                    </a>
                </div>
            </div>-->
        </div>
    </section>
    <?php endwhile; ?>

    <?php endif; ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();