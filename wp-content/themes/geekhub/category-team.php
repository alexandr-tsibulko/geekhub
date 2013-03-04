<?php

get_header(); ?>

<div class="content">

    <h1><?php single_cat_title(); ?></h1>
    <ul class="category-content">
        <?php
            query_posts('category_name=team&orderby=date&order=ASC');
            if (have_posts()) : while(have_posts()) : the_post();
        ?>
        <li>
            <div class="entry-block">
                <h2 class="entry-title"><?php the_title();?></h2>
                <div class="entry-excerpt"><?php the_excerpt(); ?></div>
            </div>
            <?php echo get_the_post_thumbnail( $id, array(170,169), array( 'class' => 'entry-thumbnail' ) ); ?>
            <div class="entry-text"><?php the_content(); ?></div>
        </li>
        <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
</div><!-- content -->

<?php get_footer(); ?>