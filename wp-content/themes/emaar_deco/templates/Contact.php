<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Emaar Deco Theme
 * @since Emaar Deco 1.0
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
                <article class="post-69 page type-page status-publish entry override" itemscope itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"></header>
                    <div class="entry-content" itemprop="text">
                        <div class="et_builder_outer_content" id="et_builder_outer_content">
                            <div class="et_builder_inner_content et_pb_gutters3">
                                <div class="et_pb_section  et_pb_section_0 et_pb_with_background et_section_regular" style="background-color: #000000 !important;">
                                    <div class=" et_pb_row et_pb_row_0">
                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_0">
                                                <div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_container clearfix  et_pb_contact_form_0" data-form_unique_num="0">
                                                    <h1 class="et_pb_contact_main_title" style="color: white;"><?php the_title(); ?></h1>
                                                    <div class="et-pb-contact-message"></div>
                                                    <div class="contact-form">
                                                        <?php the_content(); ?>
                                                    </div> <!-- .et_pb_contact -->
                                                </div> <!-- .et_pb_contact_form_container -->
                                                <div class="et_pb_code et_pb_module  et_pb_code_0">
                                                    <div class="et_pb_code_inner">
                                                        <iframe src="<?php echo get_field('iframe_google_map_src'); ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div> <!-- .et_pb_code_inner -->
                                                </div> <!-- .et_pb_code -->
                                            </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_3  et_pb_column_1">
                                                <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">
                                                    <div class="et_pb_text_inner" style="color: white;">
                                                        <?php echo get_field('contact_infor'); ?>
                                                    </div>
                                                </div> <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_image et-waypoint et_animated et_pb_image_0 et_always_center_on_mobile" style="opacity: 1;">
                                                    <img src="<?php echo get_field('image'); ?>" alt="" />
                                                </div>
                                            </div> <!-- .et_pb_column -->

                                        <?php endwhile; endif; ?>
                                    </div> <!-- .et_pb_row -->
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
<style>
    .contact-form input, .contact-form textarea{
        padding: 5px 10px !important;
    }
    .contact-form label{
        color: white !important;
    }
    .contact-form p{
        padding-bottom: 5px !important;
    }
    .wpcf7-submit{
        width: 35% !important;
        float: left !important;
        color: red !important;
        text-align: center !important;
    }
    .wpcf7-textarea, .wpcf7-submit{
        border: 1px solid #bbb !important;
        color: #4e4e4e;
    }
</style>
<?php get_footer(); ?>
