<?php if (get_field('footer_poland', 2) != '') {
    get_template_part('footer-template-poland');
    }else {
    get_template_part( 'footer-template');
    }
?>

<?php wp_footer(); ?>
</body>
</html>