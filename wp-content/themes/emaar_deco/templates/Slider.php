<?php
/**
 * Template Name: Slider Page
 *
 * @package WordPress
 * @subpackage NUS Theme
 * @since NUS Theme 1.0
 */
?>

<?php get_template_part('head'); ?>

<!-- nav-primary -->
<?php get_template_part('nav-secondary'); ?>

<div class="site-container">
    <!-- nav-primary -->
    <?php get_template_part('nav-primary'); ?>

    <!-- header -->
    <?php get_header(); ?>

    <div class="site-inner">
        <div class="content-sidebar-wrap">
            <main class="content">
                <article class="post-649 page type-page status-publish entry override" itemscope itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"></header>
                    <div class="entry-content" itemprop="text">
                        <div class="et_builder_outer_content" id="et_builder_outer_content">
                            <div class="et_builder_inner_content et_pb_gutters3">
                                <div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular et_section_transparent">
                                    <div class="et_pb_fullwidth_code et_pb_module  et_pb_fullwidth_code_0">
                                        <div class="et_pb_code_inner">
                                            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                <?php the_content(); ?>
                                            <?php endwhile; endif; ?>
                                        </div>
                                    </div> <!-- .et_pb_fullwidth_code -->
                                </div> <!-- .et_pb_section -->
                            </div>
                        </div>
                    </div>
                </article>
                <img src="http://ozviegroup.com/wp-content/themes/dynamik-gen/images/content-filler.png" class="dynamik-content-filler-img" alt="">
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>