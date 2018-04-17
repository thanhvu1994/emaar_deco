<?php
/**
 * Template Name: Products Page
 *
 * @package WordPress
 * @subpackage Emaar Deco Theme
 * @since Emaar Deco 1.0
 */
?>

<?php get_template_part('head'); ?>

<!-- nav-primary -->
<?php get_template_part('nav-secondary'); ?>

<div class="site-container" style="background: white !important;">
    <!-- nav-primary -->
    <?php get_template_part('nav-primary'); ?>

    <!-- header -->
    <?php get_header(); ?>

    <div class="site-inner">
        <div class="content-sidebar-wrap">
            <main class="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><!-- Breadcrumb NavXT 5.7.1 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to <?php echo get_bloginfo('name'); ?>" href="<?php echo site_url(); ?>" class="home">
                            <span property="name"><i class="fa fa-home"></i></span>
                        </a>
                        <meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem">
                    </span>

                    <?php
                        $ancestors = array_reverse(get_post_ancestors(get_the_ID()));

                        $args = array(
                            'post_parent' => get_the_ID(),
                            'post_type'   => 'page',
                            'numberposts' => -1,
                            'post_status' => 'publish'
                        );
                        $childrens = get_children( $args );
                        $arrayCateID[] = get_the_ID();

                        foreach($childrens as $children){
                            $args = array(
                                'post_parent' => $children->ID,
                                'post_type'   => 'page',
                                'numberposts' => -1,
                                'post_status' => 'publish'
                            );
                            $grandChildrens = get_children( $args );

                            foreach($grandChildrens as $grandChildren){
                                $arrayCateID[] = $grandChildren->ID;
                            }

                            $arrayCateID[] = $children->ID;
                        }
                    ?>
                    <?php foreach($ancestors as $key => $ancestor): ?>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to <?php echo get_the_title($ancestor); ?> category archives." href="<?php echo get_permalink($ancestor); ?>" class="taxonomy category">
                                <span property="name"><?php echo get_the_title($ancestor); ?></span>
                            </a>
                            <meta property="position" content="<?php echo $key + 2; ?>"> > </span>
                    <?php endforeach; ?>

                    <span property="itemListElement" typeof="ListItem"><span property="name"><?php the_title(); ?></span><meta property="position" content="<?php echo count($ancestors) + 2; ?>"></span>
                </div>
                <div id="wpv-view-layout-686" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-686" data-viewnumber="686" data-pagination="{&quot;id&quot;:686,&quot;base_permalink&quot;:&quot;http://ozviegroup.com/category/projects/page/WPV_PAGE_NUM/?wpv_view_count=686&quot;,&quot;query&quot;:&quot;archive&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;&quot;,&quot;max_pages&quot;:2,&quot;page&quot;:1,&quot;loop&quot;:{&quot;type&quot;:&quot;taxonomy&quot;,&quot;name&quot;:&quot;category&quot;,&quot;data&quot;:{&quot;taxonomy&quot;:&quot;category&quot;,&quot;term&quot;:&quot;projects&quot;,&quot;term_id&quot;:9},&quot;id&quot;:&quot;686&quot;}}" data-permalink="http://ozviegroup.com/category/projects/?wpv_view_count=686">
                    <!-- wpv-loop-start -->
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish'
                        );

                        $posts = get_posts($args);
                        $block4posts = array_chunk($posts,4);
                    ?>
                    <div class="container wpv-loop js-wpv-loop">
                        <?php foreach($block4posts as $block4post): ?>
                            <div class="row">
                                <?php foreach($block4post as $key => $item): ?>
                                    <?php if($key == 0): ?>
                                        <div class="one-fourth first">
                                    <?php else: ?>
                                        <div class="one-fourth">
                                    <?php endif; ?>
                                            <div class="full">
                                                <div class="imagesp"><a href="<?php echo get_permalink($item->ID); ?>"><img width="1000" height="750" src="<?php echo get_field('feature_image',$item->ID); ?>" class="attachment-large size-large wp-post-image" alt="<?php echo $item->post_title; ?>"/></a></div>
                                                <div class="titlesp" style="text-align: left;">
                                                    <a style="font-weight: normal;" href="<?php echo get_permalink($item->ID); ?>"><?php echo $item->post_title; ?></a>
                                                    <p>
                                                        <?php for($i = 1; $i <= get_field('star',$item->ID); $i++): ?>
                                                            &starf;
                                                        <?php endfor; ?>
                                                        <?php for($i = get_field('star',$item->ID); $i < 5; $i++): ?>
                                                            &star;
                                                        <?php endfor; ?>
                                                    </p>
                                                    <p class="pricesp"><?php echo number_format(get_field('price',$item->ID), 0, ',', '.'); ?> VNĐ</p>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- wpv-loop-end -->
                </div>

                <img src="<?php echo get_template_directory_uri().'/images/content-filter.png'; ?>" class="dynamik-content-filler-img" alt="">
                <?php endwhile; endif; ?>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery('body').addClass('single-post');
    });
</script>
<style>
    .imagesp{
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 240px;
        overflow: hidden;
    }
    .titlesp a{
        font-size: 16px !important;
    }
    .pricesp{
        font-weight: 550;
    }
</style>