<?php

get_header(); ?>

    <div class="content">

            <?php
                //Запит в базу з урлом сторінки ogoloshennya
                query_posts('pagename=ogoloshennya');
                if (have_posts()) : the_post();
            ?>

            <div class="ogoloshennya">
            <?php
                 //Якщо відповідь не пуста, то виводити вміст контент сторінки
                 the_content();
            ?>
            </div>

            <?php endif; wp_reset_query(); ?>


            <?php
                //Запит в базу з урлом сторінки nashi-kursi
                query_posts('pagename=nashi-kursi');
                if (have_posts()) : the_post();
            ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            <?php endif; wp_reset_query(); ?>


            <ul class="social-share">
                <li>
                    <!--<img src="<?php /*bloginfo('template_directory'); */?>/images/facebook_img.jpg" alt="facebook"/>-->
                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="certificates"><a href="#"></a></li>
                <li>
                    <h4>наши спонсоры</h4>
                    <ul class="sponsors">
                        <li class="de"><a href="#"></a></li>
                        <li class="moc"><a href="#"></a></li>
                        <li class="s"><a href="#"></a></li>
                        <li class="next"><a href="#"></a></li>
                        <li class="y"><a href="#"></a></li>
                    </ul>
                </li>
            </ul>

    </div><!-- content -->

<?php get_footer(); ?>