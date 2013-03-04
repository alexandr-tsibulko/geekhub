<?php get_header(); ?>

<div class="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="page-content">
        <h1><?php the_title();?></h1>
        <div class="page-text">
            <?php echo get_the_post_thumbnail( $id, array(274,189), array( 'class' => 'about-thumbnail' ) ); ?>
            <div class="about-text"><?php the_content(); ?></div>
        </div>
    </div>

    <?php endwhile; endif; wp_reset_query(); ?>

</div><!-- content -->

<?php get_footer(); ?>