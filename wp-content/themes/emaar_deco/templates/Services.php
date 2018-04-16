<?php
/**
 * Template Name: Services Page
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
                <article class="post-65 page type-page status-publish entry override" itemscope="" itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"></header>
                    <div class="entry-content" itemprop="text">
                        <div class="et_builder_outer_content" id="et_builder_outer_content">
                            <div class="et_builder_inner_content et_pb_gutters3">
                                <?php $args = array(
                                    'posts_per_page'   => -1,
                                    'offset'           => 0,
                                    'category'         => '',
                                    'category_name'    => '',
                                    'orderby'          => 'menu_order',
                                    'order'            => 'ASC',
                                    'include'          => '',
                                    'exclude'          => '',
                                    'meta_key'         => '',
                                    'meta_value'       => '',
                                    'post_type'        => 'service',
                                    'post_mime_type'   => '',
                                    'post_parent'      => '',
                                    'author'	   => '',
                                    'author_name'	   => '',
                                    'post_status'      => 'publish',
                                    'suppress_filters' => true
                                );
                                $posts_array = get_posts( $args );

                                if(!empty($posts_array)){
                                    $arr3Pages = array_chunk($posts_array,3);
                                }else{
                                    $arr3Pages = array();
                                }
                                ?>

                                <div class="et_pb_section  et_pb_section_0 et_pb_with_background et_section_regular" style="background-color: #000000!important;">
                                    <?php foreach($arr3Pages as $keyArr => $arr3Page): ?>
                                        <div class=" et_pb_row et_pb_row_<?php echo $keyArr; ?>">
                                            <?php foreach($arr3Page as $key => $page): ?>
                                                <div class="et_pb_column et_pb_column_1_3 et_pb_column_<?php echo $key; ?>">
                                                    <div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_blurb_0 et_pb_blurb_position_top">
                                                        <div class="et_pb_blurb_content">
                                                            <div class="et_pb_main_blurb_image">
                                                                <a href="<?php echo get_permalink($page->ID); ?>"><img style="max-width: 100px;" src="<?php echo get_field('feature_image', $page->ID); ?>" alt="<?php echo $page->post_title; ?>" class="et-waypoint et_pb_animation_top et-animated"></a>
                                                            </div>
                                                            <div class="et_pb_blurb_container">
                                                                <div class="et_pb_blurb_description">
                                                                    <p><a href="<?php echo get_permalink($page->ID); ?>"><img class="aligncenter wp-image-<?php echo $page->ID; ?> size-full" src="<?php echo get_field('name_image', $page->ID); ?>" alt="" width="233" height="61"></a></p>
                                                                </div><!-- .et_pb_blurb_description -->
                                                            </div>
                                                        </div> <!-- .et_pb_blurb_content -->
                                                    </div> <!-- .et_pb_blurb -->
                                                </div> <!-- .et_pb_column -->
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
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
