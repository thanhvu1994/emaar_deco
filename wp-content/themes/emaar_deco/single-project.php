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
                        <a property="item" typeof="WebPage" title="Go to <?php echo get_bloginfo('name'); ?>" href="<?php echo site_url(); ?>" class="home"><span property="name"><i class="fa fa-home"></i></span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem">
                    </span>

                    <?php
                        $category = get_field('category');
                        $ancestors = array_reverse(get_post_ancestors($category));
                        $ancestors[] = $category;
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
                <article class="post-1061 post type-post status-publish format-standard has-post-thumbnail category-house-town-house category-project-in-australia category-projects entry override" itemscope itemtype="https://schema.org/CreativeWork">
                    <header class="entry-header"><h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1></header>
                    <div class="entry-content" itemprop="text">
                        <div class="news-content">
                            <div class="date"><?php the_date(); ?></div>
                            <?php
                                $images = get_field('project_gallery');

                                if(!empty($images)){
                                    $images = explode(',', $images);
                                }else{
                                    $images = array();
                                }
                            ?>
                            <div class="content-post">
                                <?php foreach($images as $imageId): ?>
                                    <?php
                                        $image = wp_get_attachment($imageId);
                                    ?>
                                    <p><img class="aligncenter size-full wp-image-<?php echo $imageId; ?>" src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>"/></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="related-news">
                            <div class="title">Others</div>
                            <?php
                            $args = array(
                                'post_type' => 'project',
                                'status' => 'publish',
                                'exclude'          => get_the_ID(),
                            );

                            $posts = get_posts($args);
                            ?>
                            <div class="detail">
                                <div id="wpv-view-layout-733-TCPID1061CPID1061" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-733-TCPID1061CPID1061" data-viewnumber="733-TCPID1061CPID1061" data-pagination="{&quot;id&quot;:733,&quot;base_permalink&quot;:&quot;/2017/04/townhouse-associated-with-homemark/?wpv_view_count=733-TCPID1061CPID1061&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;disabled&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;http://ozviegroup.com/wp-content/plugins/wp-views/res/img/ajax-loader.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/2017/04/townhouse-associated-with-homemark/?wpv_view_count=733-TCPID1061CPID1061">
                                    <ul class="wpv-loop js-wpv-loop">
                                        <?php foreach($posts as $post): ?>
                                            <li><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></li>
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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