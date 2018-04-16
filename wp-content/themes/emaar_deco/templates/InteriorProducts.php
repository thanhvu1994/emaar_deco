<?php
/**
 * Template Name: Interior Products Page
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
                <article class="post-489 page type-page status-publish entry override" itemscope itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"></header>
                    <div class="entry-content" itemprop="text" style="margin:2% 0">
                        <?php $args = array(
                            'posts_per_page'   => 6,
                            'offset'           => 0,
                            'category'         => '',
                            'category_name'    => '',
                            'orderby'          => 'menu_order',
                            'order'            => 'ASC',
                            'include'          => '',
                            'exclude'          => '',
                            'meta_key'         => '',
                            'meta_value'       => '',
                            'post_type'        => 'interior_product',
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
                        <?php foreach($arr3Pages as $key => $arr3Page): ?>
                            <?php foreach($arr3Page as $key1 => $item): ?>
                                <div class="interior-container">
                                    <img src="<?php echo get_field('feature_image', $item->ID); ?>" alt="<?php echo $item->post_title; ?>" class="interior-image">
                                    <div class="interior-overlay">
                                        <div class="interior-text"><a href="<?php echo get_permalink($item->ID); ?>"><?php echo $item->post_title; ?></a></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </article>
                <img src="<?php echo get_template_directory_uri().'/images/content-filter.png'; ?>" class="dynamik-content-filler-img" alt="">
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>
