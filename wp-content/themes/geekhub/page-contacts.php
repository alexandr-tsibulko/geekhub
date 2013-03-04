<?php get_header(); ?>

<div class="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="page-content">
        <h1><?php the_title();?></h1>
        <dl>
            <dt class="map"><h2>Заходьте</h2></dt>
            <dd class="map"><?php the_content(); ?></dd>
            <dt><h2>Звоніть</h2></dt>
            <dd>+38 097 977 01 87</dd>
            <dt><h2>Пишіть</h2></dt>
            <dd>info@geekhub.com</dd>
            <dt><h2>Слідкуйте</h2></dt>
            <dd>
                <ul>
                    <li class="f"><a href="#"></a></li>
                    <li class="vk"><a href="#"></a></li>
                    <li class="t"><a href="#"></a></li>
                </ul>
            </dd>
        </dl>
    </div>

    <?php endwhile; endif; wp_reset_query(); ?>

</div><!-- content -->

<?php get_footer(); ?>