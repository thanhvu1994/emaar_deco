<?php get_template_part('head'); ?>

    <!-- nav-secondary -->
<?php get_template_part('nav-secondary'); ?>

    <div class="site-container">
        <!-- nav-primary -->
        <?php get_template_part('nav-primary'); ?>

        <!-- header -->
        <?php get_header(); ?>

        <div class="site-inner">
            <div id="slide_intro" class="widget-area dynamik-widget-area slide-intro">
                <section id="rev-slider-widget-4" class="widget widget_revslider">
                    <div class="widget-wrap">
                        <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background-color:transparent;padding:0px;">
                            <!-- START REVOLUTION SLIDER 5.3.1.5 fullscreen mode -->
                            <div id="rev_slider_8_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.1.5">
                                <ul>	<!-- SLIDE  -->
                                    <li data-index="rs-59" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo get_template_directory_uri().'/images/transparent.png'; ?>" style='background-color:#000000' alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption   tp-resizeme"
                                             id="slide-59-layer-1"
                                             data-x="center" data-hoffset=""
                                             data-y="center" data-voffset=""
                                             data-width="['none','none','none','none']"
                                             data-height="['none','none','none','none']"

                                             data-type="image"
                                             data-responsive_offset="on"

                                             data-frames='[{"delay":360,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Back.easeIn"}]'
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,0,0,0]"

                                             style="z-index: 5;">
                                            <img src="<?php echo get_field('logo', 6); ?>" alt="" data-no-retina>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>
                            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                if(htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                }else{
                                    var htmlDiv = document.createElement("div");
                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                            <script type="text/javascript">
                                /******************************************
                                 -	PREPARE PLACEHOLDER FOR SLIDER	-
                                 ******************************************/

                                var setREVStartSize=function(){
                                    try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                                        e.c = jQuery('#rev_slider_8_1');
                                        e.gridwidth = [1400];
                                        e.gridheight = [868];

                                        e.sliderLayout = "fullscreen";
                                        e.fullScreenAutoWidth='off';
                                        e.fullScreenAlignForce='off';
                                        e.fullScreenOffsetContainer= '';
                                        e.fullScreenOffset='';
                                        if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

                                    }catch(d){console.log("Failure at Presize of Slider:"+d)}
                                };

                                setREVStartSize();

                                var tpj=jQuery;

                                var revapi8;
                                tpj(document).ready(function() {
                                    if(tpj("#rev_slider_8_1").revolution == undefined){
                                        revslider_showDoubleJqueryError("#rev_slider_8_1");
                                    }else{
                                        revapi8 = tpj("#rev_slider_8_1").show().revolution({
                                            sliderType:"hero",
                                            jsFileLocation:"//ozviegroup.com/wp-content/plugins/revslider/public/assets/js/",
                                            jsIncludeToBody: true,
                                            sliderLayout:"fullscreen",
                                            dottedOverlay:"none",
                                            delay:9000,
                                            navigation: {
                                            },
                                            visibilityLevels:[1240,1024,778,480],
                                            gridwidth:1400,
                                            gridheight:868,
                                            lazyType:"none",
                                            parallax: {
                                                type:"mouse",
                                                origo:"slidercenter",
                                                speed:2000,
                                                levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
                                            },
                                            shadow:0,
                                            spinner:"off",
                                            autoHeight:"off",
                                            fullScreenAutoWidth:"off",
                                            fullScreenAlignForce:"off",
                                            fullScreenOffsetContainer: "",
                                            fullScreenOffset: "",
                                            disableProgressBar:"on",
                                            hideThumbsOnMobile:"on",
                                            hideSliderAtLimit:0,
                                            hideCaptionAtLimit:0,
                                            hideAllCaptionAtLilmit:0,
                                            debugMode:false,
                                            fallbacks: {
                                                simplifyAll:"off",
                                                disableFocusListener:false,
                                            }
                                        });
                                    }
                                });	/*ready*/
                            </script>
                        </div><!-- END REVOLUTION SLIDER -->
                    </div>
                </section>
            </div>
            <div class="content-sidebar-wrap">
                <main class="content">
                    <article class="post-40 page type-page status-publish entry override" itemscope itemtype="https://schema.org/CreativeWork">
                        <header class="entry-header"></header>
                        <div class="entry-content" itemprop="text"></div>
                    </article>
                    <img src="<?php echo get_template_directory_uri().'/images/content-filler.png'; ?>" class="dynamik-content-filler-img" alt="">
                </main>
            </div>
        </div>
    </div>

<?php get_footer(); ?>