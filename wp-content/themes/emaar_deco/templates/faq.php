<?php
/**
 * Template Name: FAQ Page
 *
 * @package WordPress
 * @subpackage NUS Theme
 * @since NUS Theme 1.0
 */
?>
<?php get_template_part('head'); ?>

<?php get_header(); ?>

<?php get_template_part('menu'); ?>

<div class="nus-banner">
    <img src="<?php echo get_field('inner_banner'); ?>" alt="" />
</div>

<div class="main">
    <div class="container">
        <div class="intro-page">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>

        <?php
        // get posts
        $posts = get_posts(array(
            'post_type'			=> 'faq_item',
            'posts_per_page'	=> -1,
            'meta_key'			=> 'order',
            'orderby'			=> 'meta_value_num',
            'order'				=> 'ASC',
        ));
        ?>
        <?php if( $posts ): ?>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php $i = 0; ?>
                <?php foreach( $posts as $key => $post ): ?>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading-<?php echo $key; ?>">
                            <h4 class="panel-title">
                                <?php if($i == 0): ?>
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key; ?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                <?php else: ?>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key; ?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                <?php endif; ?>
                            </h4>
                        </div>

                        <?php if($i == 0): ?>
                            <div id="collapse-<?php echo $key; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-<?php echo $key; ?>">
                        <?php else: ?>
                            <div id="collapse-<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $key; ?>">
                        <?php endif; ?>
                            <div class="panel-body document">
                                <h3><?php echo get_field('subtitle', $post->ID); ?></h3>
                                <p><?php echo $post->post_content; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="loadmore-wrap">
            <a href="#" id="loadMore">Load more</a>
        </div>

    </div>
</div>

<?php get_footer(); ?>
