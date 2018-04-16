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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post-423 page type-page status-publish entry override" itemscope="" itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"></header>
                    <div class="entry-content" itemprop="text">
                        <div class="et_builder_outer_content" id="et_builder_outer_content">
                            <div class="et_builder_inner_content et_pb_gutters3">
                                <div class="et_pb_section page-panting et_pb_section_0 et_pb_with_background et_section_regular" style="background-image: url(<?php echo get_field('background_image'); ?>) !important; }">
                                    <div class=" et_pb_row et_pb_row_0">
                                        <div class="et_pb_column et_pb_column_4_4  et_pb_column_0">
                                            <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">
                                                <div class="et_pb_text_inner">
                                                        <?php the_content(); ?>
                                                </div>
                                            </div> <!-- .et_pb_text -->
                                        </div> <!-- .et_pb_column -->
                                    </div> <!-- .et_pb_row -->
                                </div> <!-- .et_pb_section -->
                            </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; endif; ?>
                <img src="<?php echo get_template_directory_uri().'/images/content-filter.png'; ?>" class="dynamik-content-filler-img" alt="">
            </main>
        </div>
    </div>
</div>
<style>
    .et_pb_text_inner p{
        padding-left: 180px !important;
        text-align: justify !important;
    }
</style>
<?php get_footer(); ?>