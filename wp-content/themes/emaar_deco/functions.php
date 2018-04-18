<?php

/**
@ Thiết lập các hằng dữ liệu quan trọng
@ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
@ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
 **/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );

/**
@ Load file /core/init.php
@ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
 **/

require_once( CORE . '/init.php' );

/**
@ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
if ( ! isset( $content_width ) ) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
    $content_width = 620;
}

/**
@ Thiết lập các chức năng sẽ được theme hỗ trợ
 **/
if ( ! function_exists( 'nus_theme_setup' ) ) {
    /*
     * Nếu chưa có hàm nus_theme_setup() thì sẽ tạo mới hàm đó
     */
    function nus_theme_setup() {
        /*
         * Thiết lập theme có thể dịch được
         */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain( 'nus', $language_folder );

        /*
         * Tự chèn RSS Feed links trong <head>
         */
        add_theme_support( 'automatic-feed-links' );

        /*
         * Thêm chức năng post thumbnail
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * Thêm chức năng title-tag để tự thêm <title>
         */
        add_theme_support( 'title-tag' );

        /*
         * Thêm chức năng post format
         */
        add_theme_support( 'post-formats',
            array(
                'video',
                'image',
                'audio',
                'gallery'
            )
        );

        /*
         * Thêm chức năng custom background
         */
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support( 'custom-background', $default_background );

        /*
         * Tạo menu cho theme
         */
        register_nav_menu ( 'main-menu', __('Main Menu', 'nus') );
        register_nav_menu ( 'footer-menu', __('Footer Menu', 'nus') );

        /*
         * Tạo sidebar cho theme
         */
        $sidebar = array(
            'name' => __('Language Switcher', 'nus'),
            'id' => 'language-switcher',
            'description' => 'Language Switcher',
            'class' => 'language-switcher',
            'before_title' => '<h3 class="widgettitle">',
            'after_sidebar' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action ( 'init', 'nus_theme_setup' );

}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    show_admin_bar(false);
    /*if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }*/
}

function sortMenuItems($arrMenuItems){
    $result = array();
    $temp = array();
    foreach($arrMenuItems as $item){
        if($item->menu_item_parent == 0){
            $temp['title'] = $item->title;
            $temp['url'] = $item->url;
            $temp['class'] = check_active_menu($item);
            $temp['child'] = array();

            foreach($arrMenuItems as $childItems){
                if($childItems->menu_item_parent == $item->ID){
                    $child = array(
                        'title' => $childItems->title,
                        'url' => $childItems->url,
                        'class' => check_active_menu($childItems),
                        'child' => array()
                    );

                    foreach($arrMenuItems as $childOfChildItems){
                        if($childOfChildItems->menu_item_parent == $childItems->ID){
                            $childOfChild = array(
                                'title' => $childOfChildItems->title,
                                'url' => $childOfChildItems->url,
                                'class' => check_active_menu($childOfChildItems),
                                'child' => array()
                            );

                            $temp['class'] .= check_active_menu($childOfChildItems);
                            $child['child'][] = $childOfChild;
                        }
                    }

                    $temp['class'] .= check_active_menu($childItems);
                    $temp['child'][] = $child;
                }
            }

            $result[$item->ID] = $temp;
        }
    }

    return $result;
}

function check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'current-menu-item current-page-item';
    }
    return '';
}

add_action('admin_head', 'show_favicon');
function show_favicon() {
    echo '<link href="'.get_template_directory_uri().'/images/favicon.png" rel="icon" type="image/x-icon">';
}

function insert_contact($data) {
    global $wpdb;
    $table_name = $wpdb->prefix . "contacts";

    $data['modified_date'] = date('Y-m-d H:i:s');
    return $wpdb->insert( $table_name, $data);
}

function insert_gift($data) {
    global $wpdb;
    $table_name = $wpdb->prefix . "gifts";

    $result = $wpdb->insert( $table_name, $data);

    if($result == 1){
        return $wpdb->insert_id;
    }else{
        return 0;
    }
}

function to_associative_array($array){
    $result = array();
    foreach($array as $value){
        $key = str_replace(' ','_',strtolower($value));
        $result[$key] = $value;
    }
    return $result;
}

function get_campaigns()
{
    $id = (isset($_POST['id'])) ? $_POST['id'] : '';

    $campaigns = get_posts(array(
        'post_type'			=> 'campaign',
        'post_parent'       => $id,
        'posts_per_page'	=> -1,
        'meta_key'			=> 'order',
        'orderby'			=> 'meta_value',
        'order'				=> 'ASC',
    ));

    $result = array();
    foreach($campaigns as $campaign){
        $result[$campaign->ID] = $campaign->post_title;
    }

    echo json_encode($result);
    wp_die();
}
add_action( 'wp_ajax_get_campaigns', 'get_campaigns' );
add_action( 'wp_ajax_nopriv_get_campaigns', 'get_campaigns' );

function get_the_user_ip() {
    if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
//check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
//to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function encrypt($plaintext, $password) {
    $method = "AES-256-CBC";
    $key = hash('sha256', $password, true);
    $iv = openssl_random_pseudo_bytes(16);

    $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
    $hash = hash_hmac('sha256', $ciphertext, $key, true);

    return $iv . $hash . $ciphertext;
}

function decrypt($ivHashCiphertext, $password) {
    $method = "AES-256-CBC";
    $iv = substr($ivHashCiphertext, 0, 16);
    $hash = substr($ivHashCiphertext, 16, 32);
    $ciphertext = substr($ivHashCiphertext, 48);
    $key = hash('sha256', $password, true);

    if (hash_hmac('sha256', $ciphertext, $key, true) !== $hash) return null;

    return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
}

function my_custom_login_logo() {
    echo '<style type="text/css">
	h1 a {background-image:url('.get_bloginfo("template_url").'/images/logo.png) !important; margin:0 auto;background-size:68px 100px !important; width:68px !important;height:100px !important; }
	</style>';
}
add_filter( 'login_head', 'my_custom_login_logo' );

function acf_load_category_choices( $field ) {

    // reset choices
    $field['choices'] = array();


    $args = array(
    'sort_order' => 'asc',
    'sort_column' => 'menu_order',
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'meta_key' => '',
    'meta_value' => '',
    'authors' => '',
    'child_of' => 21,
    'parent' => -1,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish'
    );

    $pages = get_pages($args);

    foreach($pages as $page){
        if($page->post_parent == 21){
            $field['choices'][$page->ID] = $page->post_title;
        }else{
            $field['choices'][$page->ID] = '-- '.$page->post_title;
        }
    }

    // return the field
    return $field;

}

function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

add_filter('acf/load_field/name=category', 'acf_load_category_choices');

