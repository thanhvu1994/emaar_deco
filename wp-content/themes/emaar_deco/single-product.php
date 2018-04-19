<link rel='stylesheet' id='msl-main-css'  href='<?php echo site_url()."/wp-content/plugins/master-slider/public/assets/css/masterslider.main.css?ver=3.4.1"; ?>' type='text/css' media='all' />

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
                                <span property="name"><?php pll_e('Products'); ?></span>
                            </a>
                            <meta property="position" content="2"> >
                    </span>

                    <span property="itemListElement" typeof="ListItem"><span property="name"><?php the_title(); ?></span><meta property="position" content="3"></span>
                </div>

                    <!-- Left Column / Headphones Image -->
                    <div class="left-column">
                        <!-- MasterSlider -->
                        <div id="P_MS5ad7015792315" class="master-slider-parent msl ms-parent-id-2" style="max-width:1366px;"  >

                            <?php
                            $images = get_field('product_gallery');

                            if(!empty($images)){
                                $images = explode(',', $images);
                            }else{
                                $images = array();
                            }
                            ?>
                            <div id="MS5ad7015792315" class="master-slider ms-skin-default" >
                                <?php foreach($images as $imageId): ?>
                                    <?php
                                    $image = wp_get_attachment($imageId);
                                    ?>
                                    <div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
                                        <img src="<?php echo site_url()."/wp-content/plugins/master-slider/public/assets/css/blank.gif"; ?>" alt="<?php echo $image['alt']; ?>" title="" data-src="<?php echo $image['src']; ?>" />
                                        <img class="ms-thumb" src="<?php echo $image['src']; ?>" alt="" />
                                        <div class="ms-thumb" ><div class="ms-tab-context"><div class=&quot;ms-tab-context&quot;></div></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- MasterSlider Main -->

                            <div class="product-description" style="margin-top: 30px;">
                                <span><?php pll_e('Description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <!-- END MasterSlider -->

                        <script>
                            (function ( $ ) {
                                "use strict";

                                $(function () {
                                    var masterslider_2315 = new MasterSlider();

                                    // slider controls
                                    masterslider_2315.control('arrows'     ,{ autohide:false, overVideo:true  });				masterslider_2315.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom' , margin:10  });

                                    masterslider_2315.control('thumblist'  ,{ autohide:false, overVideo:true, dir:'h', speed:17, inset:false, arrows:false, hover:false, customClass:'', align:'bottom',type:'thumbs', margin:5, width:140, height:80, space:5, fillMode:'fill'  });
                                    // slider setup
                                    masterslider_2315.setup("MS5ad7015792315", {
                                        width           : 1140,
                                        height          : 500,
                                        minHeight       : 300,
                                        space           : 0,
                                        start           : 1,
                                        grabCursor      : true,
                                        swipe           : true,
                                        mouse           : true,
                                        layout          : "boxed",
                                        wheel           : false,
                                        autoplay        : false,
                                        instantStartLayers:false,
                                        loop            : true,
                                        shuffle         : false,
                                        preload         : 0,
                                        heightLimit     : true,
                                        autoHeight      : false,
                                        smoothHeight    : true,
                                        endPause        : false,
                                        overPause       : true,
                                        fillMode        : "fill",
                                        centerControls  : true,
                                        startOnAppear   : false,
                                        layersMode      : "center",
                                        hideLayers      : false,
                                        fullscreenMargin: 0,
                                        speed           : 20,
                                        dir             : "h",
                                        parallaxMode    : 'swipe',
                                        view            : "basic"
                                    });


                                    window.masterslider_instances = window.masterslider_instances || [];
                                    window.masterslider_instances.push( masterslider_2315 );
                                });

                            })(jQuery);
                        </script>
                    </div>


                    <!-- Right Column -->
                    <div class="right-column">

                        <!-- Product Description -->
                        <div class="product-description">
                            <span><?php pll_e('Products'); ?></span>
                            <h2 style="font-weight: normal;"><?php the_title(); ?></h2>
                        </div>

                        <!-- Product Configuration -->
                        <div class="product-configuration">
                            <div class="cable-config" style="border-bottom: none;">
                                <span>
                                    <?php for($i = 1; $i <= get_field('star'); $i++): ?>
                                        &starf;
                                    <?php endfor; ?>
                                    <?php for($i = get_field('star'); $i < 5; $i++): ?>
                                        &star;
                                    <?php endfor; ?>
                                </span>
                            </div>

                            <div class="cable-config">
                                <span><?php pll_e('Quantity'); ?></span>

                                <div class="cable-choose">
                                    <button><?php pll_e('Total'); ?> : <?php echo get_field('quantity'); ?></button>
                                    <button><?php pll_e('Left'); ?> : <?php echo get_field('quantity_left'); ?></button>
                                    <button><?php pll_e('Sold'); ?> : <?php echo get_field('quantity') - get_field('quantity_left'); ?></button>
                                </div>

                                <a href="<?php echo get_page_link(25); ?>"><?php pll_e('Info'); ?></a>
                            </div>
                        </div>

                        <!-- Product Pricing -->
                        <div class="product-price">
                            <span><?php echo number_format(get_field('price'), 0, ',', '.'); ?> VNĐ</span>
                            <a href="<?php echo get_page_link(25); ?>" class="cart-btn"><?php pll_e('Contact'); ?></a>
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
        min-height: 600px;
        margin-bottom: 60px;
    }
    /* Columns */
    .left-column {
        display: inline-block;
        width: 60%;
        position: relative;
    }

    .right-column {
        display: inline-block;
        margin-left: 30px;
        width: 35%;
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
    @media (max-width: 940px) {
        .container {
            flex-direction: column;
            margin-top: 60px;
        }

        .left-column,
        .right-column {
            width: 100%;
        }

        .right-column {
            margin-top: 20px;
            margin-left: 0px;
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
<script type='text/javascript' src='<?php echo site_url()."/wp-content/plugins/master-slider/public/assets/js/masterslider.min.js?ver=3.4.1"; ?>'></script>