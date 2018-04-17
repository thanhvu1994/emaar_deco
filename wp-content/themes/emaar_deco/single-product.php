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

                    <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Products." href="<?php echo get_page_link(200); ?>" class="taxonomy category">
                                <span property="name">Products</span>
                            </a>
                            <meta property="position" content="2"> >
                    </span>

                    <span property="itemListElement" typeof="ListItem"><span property="name"><?php the_title(); ?></span><meta property="position" content="3"></span>
                </div>

                    <!-- Left Column / Headphones Image -->
                    <div class="left-column">
                        <?php
                        $images = get_field('product_gallery');

                        if(!empty($images)){
                            $images = explode(',', $images);
                        }else{
                            $images = array();
                        }
                        ?>
                        <div id="slideshow">
                            <?php foreach($images as $imageId): ?>
                                <?php
                                $image = wp_get_attachment($imageId);
                                ?>
                                <div>
                                    <img class="aligncenter size-full wp-image-<?php echo $imageId; ?>" src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>


                    <!-- Right Column -->
                    <div class="right-column">

                        <!-- Product Description -->
                        <div class="product-description">
                            <span>Headphones</span>
                            <h1>Beats EP</h1>
                            <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
                        </div>

                        <!-- Product Configuration -->
                        <div class="product-configuration">
                        </div>

                        <!-- Product Pricing -->
                        <div class="product-price">
                            <span>148$</span>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery('body').addClass('single-post');

        jQuery("#slideshow > div:gt(0)").hide();

        setInterval(function() {
            jQuery('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        },  3000);
    });
</script>
<style>
    .content{
        min-height: 800px;
    }
    /* Columns */
    .left-column {
        display:inline-block;
        width: 55%;
        position: relative;
    }

    .right-column {
        display:inline-block;
        width: 25%;
        margin-left: 60px;
        vertical-align: top;
    }

    /* Product Description */
    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }
    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }
    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }
    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    /* Product Color */
    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type=&quot;radio&quot;] {
        display: none;
    }
    .color-choose input[type=&quot;radio&quot;] + label span {
                                                    display: inline-block;
                                                    width: 40px;
                                                    height: 40px;
                                                    margin: -1px 4px 0 0;
                                                    vertical-align: middle;
                                                    cursor: pointer;
                                                    border-radius: 50%;
                                                }

    .color-choose input[type=&quot;radio&quot;] + label span {
                                                    border: 2px solid #FFFFFF;
                                                    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
                                                }

    .color-choose input[type=&quot;radio&quot;]#red + label span {
                                                   background-color: #C91524;
                                               }
    .color-choose input[type=&quot;radio&quot;]#blue + label span {
                                                   background-color: #314780;
                                               }
    .color-choose input[type=&quot;radio&quot;]#black + label span {
                                                   background-color: #323232;
                                               }

    .color-choose input[type=&quot;radio&quot;]:checked + label span {
                                                   background-image: url(images/check-icn.svg);
                                                   background-repeat: no-repeat;
                                                   background-position: center;
                                               }
    /* Cable Configuration */
    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }
    .cable-config a:before {
        content: &quot;?&quot;;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }
    /* Product Price */
    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }
    .cart-btn:hover {
        background-color: #64af3d;
    }

    /* Responsive */
    @media (max-width: 940px) {
        .container {
            flex-direction: column;
            margin-top: 60px;
        }

        .left-column,
        .right-column {
            width: 85%;
        }

        .right-column {
            margin-left: 30px;
        }

        .left-column img {
            width: 300px;
            right: 0;
            top: -65px;
            left: initial;
        }
    }

    @media (max-width: 535px) {
        .left-column img {
            width: 220px;
            top: -85px;
        }
    }
</style>