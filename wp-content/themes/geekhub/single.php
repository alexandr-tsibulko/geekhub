<?php

get_header(); ?>

<div class="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="single-content">
        <h1><?php the_title();?></h1>
        <div class="single-text"><?php the_content(); ?></div>
    </div>

    <?php endwhile; endif; wp_reset_query(); ?>

</div><!-- content -->

<?php get_footer(); ?>