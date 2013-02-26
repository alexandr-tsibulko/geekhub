
    <div class="footer">

        <span>&copy; Copyright <?php the_date('Y');?></span>

        <?php
        wp_nav_menu(
            array(
                'menu'            => 'header-menu',
                'container'       => '',
                'menu_class'      => 'footer-nav',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
            )
        )
        ;?>

    </div><!-- footer -->

</div><!-- wrapper -->

<?php wp_footer(); ?>

</body>
</html>