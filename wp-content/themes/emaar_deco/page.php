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
                    <article class="post-84 page type-page status-publish entry override" itemscope itemtype="https://schema.org/CreativeWork">
                        <header class="entry-header"></header>
                        <div class="entry-content" itemprop="text">
                            <div class="et_builder_outer_content" id="et_builder_outer_content">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_inner_shadow  et_pb_section_0 et_pb_with_background et_section_regular" style="background-color: #1d1d1f !important;">
                                        <div class=" et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_0">
                                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0" style="color: #dddddd !important;">
                                                    <div class="et_pb_text_inner">
                                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                            <h1 style="font-size: 45px;"><?php the_title(); ?></h1>
                                                            <p><?php the_content(); ?></p>
                                                        <?php endwhile; endif; ?>
                                                    </div>
                                                </div> <!-- .et_pb_text -->
                                            </div> <!-- .et_pb_column -->
                                        </div> <!-- .et_pb_row -->
                                    </div> <!-- .et_pb_section -->
                                </div>
                            </div>
                        </div>
                    </article>
                    <img src="<?php echo get_template_directory_uri().'/images/content-filter.png'; ?>" class="dynamik-content-filler-img" alt="">
                </main>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
