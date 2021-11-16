<?php $main_page_video = get_field('main_page_video'); ?>
<?php $main_page_video_poster = get_field('main_page_video_poster'); ?>
<?php if (get_field('display_section___video') != ''): ?>
    <section class="main-page-video container">
        <style>
            .videoPoster {
                background-image: url(<?php echo esc_html($main_page_video_poster); ?>);
            }

            .videoPoster:before {
                background-image: url(<?php echo esc_url(get_template_directory_uri());?>/img/icon/play.png);
            }
        </style>
        <div class="video_wrapper js-videoWrapper">
            <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true"
                    allowfullscreen
                    data-src="<?php echo esc_html($main_page_video); ?>?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
            <button class="videoPoster js-videoPoster"></button>
        </div>
    </section>
<?php endif; ?>