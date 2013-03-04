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


            <?php query_posts('category_name=nashi-kursi&orderby=date&order=ASC'); ?>
            <h2 class="courses-title"><?php single_cat_title(); ?></h2>
            <ul class="courses">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <?php echo get_the_post_thumbnail( $id, array(125,123), array( 'class' => 'kurs-thumbnail' ) ); ?>
                    <div class="kurs-info">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </li>
            <?php endwhile; endif; wp_reset_query(); ?>
            </ul>


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