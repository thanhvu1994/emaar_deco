<?php get_template_part('head'); ?>

<?php get_template_part('menu-mobile'); ?>

<div class="nus-body-container">
    <div class="nus-wrapper">
        <?php get_header(); ?>

        <?php get_template_part('menu'); ?>

        <div class="main">
            <div class="container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="intro-page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="document">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <?php get_footer(); ?>
    </div>
</div>

