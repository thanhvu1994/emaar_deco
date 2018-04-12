        <script type="text/html" id="tmpl-wp-playlist-current-item">
            <# if ( data.image ) { #>
                <img src="{{ data.thumb.src }}" alt="" />
                <# } #>
                    <div class="wp-playlist-caption">
                        <span class="wp-playlist-item-meta wp-playlist-item-title">&#8220;{{ data.title }}&#8221;</span>
                        <# if ( data.meta.album ) { #><span class="wp-playlist-item-meta wp-playlist-item-album">{{ data.meta.album }}</span><# } #>
                                <# if ( data.meta.artist ) { #><span class="wp-playlist-item-meta wp-playlist-item-artist">{{ data.meta.artist }}</span><# } #>
                    </div>
        </script>
        <script type="text/html" id="tmpl-wp-playlist-item">
            <div class="wp-playlist-item">
                <a class="wp-playlist-caption" href="{{ data.src }}">
                    {{ data.index ? ( data.index + '. ' ) : '' }}
                    <# if ( data.caption ) { #>
                        {{ data.caption }}
                        <# } else { #>
                            <span class="wp-playlist-item-title">&#8220;{{{ data.title }}}&#8221;</span>
                            <# if ( data.artists && data.meta.artist ) { #>
                                <span class="wp-playlist-item-artist"> &mdash; {{ data.meta.artist }}</span>
                                <# } #>
                                    <# } #>
                </a>
                <# if ( data.meta.length_formatted ) { #>
                    <div class="wp-playlist-item-length">{{ data.meta.length_formatted }}</div>
                    <# } #>
            </div>
        </script>

        <div id="views-extra-css-ie7" style="display:none;" aria-hidden="true">
            <!--[if IE 7]><style>
                .wpv-pagination { *zoom: 1; }
            </style><![endif]-->
        </div>

        <script type="text/javascript">
            jQuery( document ).ready( function( $ ) {
                var extra_css = $( "#views-extra-css" ) ? $( "#views-extra-css" ).text() : null;	if( extra_css ) {		$( 'head' ).append( '<style style="text/css" media="screen">' + extra_css + '</style>' );
                    $( "#views-extra-css" ).remove();	}
                $( 'head' ).append( $( "#views-extra-css-ie7" ).html() );
                $( "#views-extra-css-ie7" ).remove();});
        </script>
        <script type="text/javascript">
            var et_animation_data = [];
        </script>
        <button id="responsive-menu-button"
                class="responsive-menu-button responsive-menu-boring
                 responsive-menu-accessible"
                type="button"
                aria-label="Menu">


            <span class="responsive-menu-box">
                <span class="responsive-menu-inner"></span>
            </span>

        </button><div id="responsive-menu-container" class="slide-left">
            <div id="responsive-menu-wrapper">
                <ul id="responsive-menu" class=""><li id="responsive-menu-item-73" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-40 current_page_item responsive-menu-item responsive-menu-current-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/" itemprop="url">Home</a></li><li id="responsive-menu-item-132" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/about-us/" itemprop="url">About us</a></li><li id="responsive-menu-item-78" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children responsive-menu-item responsive-menu-item-has-children"><a class="responsive-menu-item-link" href="http://ozviegroup.com/services/" itemprop="url">Services<div class="responsive-menu-subarrow">▼</div></a><ul class='responsive-menu-submenu responsive-menu-submenu-depth-1'><li id="responsive-menu-item-431" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/services/painting/" itemprop="url">Painting</a></li><li id="responsive-menu-item-430" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/services/exporting/" itemprop="url">Exporting</a></li><li id="responsive-menu-item-429" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/services/designing/" itemprop="url">Designing</a></li></ul></li><li id="responsive-menu-item-493" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/interior-products/" itemprop="url">Interior Products</a></li><li id="responsive-menu-item-495" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/furnitures/" itemprop="url">Furnitures</a></li><li id="responsive-menu-item-662" class=" menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children responsive-menu-item responsive-menu-item-has-children"><a class="responsive-menu-item-link" href="http://ozviegroup.com/category/projects/" itemprop="url">Projects<div class="responsive-menu-subarrow">▼</div></a><ul class='responsive-menu-submenu responsive-menu-submenu-depth-1'><li id="responsive-menu-item-663" class=" menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children responsive-menu-item responsive-menu-item-has-children"><a class="responsive-menu-item-link" href="http://ozviegroup.com/category/projects/project-in-australia/" itemprop="url">Project in Australia<div class="responsive-menu-subarrow">▼</div></a><ul class='responsive-menu-submenu responsive-menu-submenu-depth-2'><li id="responsive-menu-item-1395" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/category/projects/project-in-australia/apartments/" itemprop="url">Apartments</a></li><li id="responsive-menu-item-1396" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/category/projects/project-in-australia/house-town-house/" itemprop="url">House &#038; Town House</a></li></ul></li><li id="responsive-menu-item-664" class=" menu-item menu-item-type-taxonomy menu-item-object-category responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/category/projects/project-in-vietnam/" itemprop="url">Project in Vietnam</a></li></ul></li><li id="responsive-menu-item-464" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/gallery/" itemprop="url">Gallery</a></li><li id="responsive-menu-item-75" class=" menu-item menu-item-type-post_type menu-item-object-page responsive-menu-item"><a class="responsive-menu-item-link" href="http://ozviegroup.com/contact/" itemprop="url">Contact</a></li></ul>                                                                    <div id="responsive-menu-additional-content"></div>                        </div>
        </div>
        <script type="text/javascript">
            function revslider_showDoubleJqueryError(sliderID) {
                var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                jQuery(sliderID).show().html(errorMessage);
            }
        </script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/hoverIntent.min.js?ver=1.8.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/superfish.js?ver=1.7.5'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/superfish.args.js?ver=2.5.3'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/responsive.js?ver=2.2.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js?ver=1509224423'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var et_pb_custom = {"ajaxurl":"\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/ozviegroup.com\/wp-content\/themes\/genesis\/images","builder_images_uri":"http:\/\/ozviegroup.com\/wp-content\/plugins\/divi-builder\/includes\/builder\/images","et_frontend_nonce":"e57d38629f","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"e4304e1a31","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","is_builder_plugin_used":"1","ignore_waypoints":"no","is_divi_theme_used":"","widget_search_selector":".widget_search","is_ab_testing_active":"","page_id":"40","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":""};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/divi-builder.min.js?ver=2.0.39'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/jquery/ui/core.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
        <script type='text/javascript'>
            jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"dd\/mm\/yy","firstDay":1,"isRTL":false});});
        </script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Download File":"Download File","Download Video":"Download Video","Play":"Play","Pause":"Pause","Captions\/Subtitles":"Captions\/Subtitles","None":"None","Time Slider":"Time Slider","Skip back %1 seconds":"Skip back %1 seconds","Video Player":"Video Player","Audio Player":"Audio Player","Volume Slider":"Volume Slider","Mute Toggle":"Mute Toggle","Unmute":"Unmute","Mute":"Mute","Use Up\/Down Arrow keys to increase or decrease volume.":"Use Up\/Down Arrow keys to increase or decrease volume.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."}};
            var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
            var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Download File":"Download File","Download Video":"Download Video","Play":"Play","Pause":"Pause","Captions\/Subtitles":"Captions\/Subtitles","None":"None","Time Slider":"Time Slider","Skip back %1 seconds":"Skip back %1 seconds","Video Player":"Video Player","Audio Player":"Audio Player","Volume Slider":"Volume Slider","Mute Toggle":"Mute Toggle","Unmute":"Unmute","Mute":"Mute","Use Up\/Down Arrow keys to increase or decrease volume.":"Use Up\/Down Arrow keys to increase or decrease volume.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."}};
            var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/mediaelement/mediaelement-and-player.min.js?ver=2.22.0'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/mediaelement/wp-mediaelement.min.js?ver=4.8.6'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/underscore.min.js?ver=1.8.3'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
            var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/wp-util.min.js?ver=4.8.6'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/backbone.min.js?ver=1.2.3'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/mediaelement/wp-playlist.min.js?ver=4.8.6'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wpv_pagination_local = {"front_ajaxurl":"\/wp-admin\/admin-ajax.php","calendar_image":"http:\/\/ozviegroup.com\/wp-content\/plugins\/wp-views\/embedded\/res\/img\/calendar.gif","calendar_text":"Select date","datepicker_min_date":null,"datepicker_max_date":null,"resize_debounce_tolerance":"100","datepicker_style_url":"http:\/\/ozviegroup.com\/wp-content\/plugins\/types\/vendor\/toolset\/toolset-common\/toolset-forms\/css\/wpt-jquery-ui\/jquery-ui-1.11.4.custom.css"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/wpv-pagination-embedded.js?ver=2.4.1'></script>
        <script type='text/javascript' src='<?php echo includes_url(); ?>/js/wp-embed.min.js?ver=4.8.6'></script>
    </body>
</html>