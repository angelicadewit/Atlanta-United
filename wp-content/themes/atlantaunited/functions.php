<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'after_setup_theme', 'atlantaunited_setup' );
function atlantaunited_setup() {
load_theme_textdomain( 'atlantaunited', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'atlantaunited' ) ) );
}




add_action( 'wp_enqueue_scripts', 'atlantaunited_load_scripts' );
function atlantaunited_load_scripts() {
    wp_enqueue_style( 'atlantaunited-style', get_stylesheet_uri() );
    wp_enqueue_style( 'atlantaunited-style-from-scss', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'atlunited-js', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0.0', true );
}



add_action( 'wp_footer', 'atlantaunited_footer_scripts' );
function atlantaunited_footer_scripts() {
?>

    
    <script>
        jQuery(document).ready(function ($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
    
    <?php
}
add_filter( 'document_title_separator', 'atlantaunited_document_title_separator' );
function atlantaunited_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'atlantaunited_title' );
function atlantaunited_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'atlantaunited_read_more_link' );
function atlantaunited_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'atlantaunited_excerpt_read_more_link' );
function atlantaunited_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'atlantaunited_image_insert_override' );
function atlantaunited_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'atlantaunited_widgets_init' );
function atlantaunited_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'atlantaunited' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'atlantaunited_pingback_header' );
function atlantaunited_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'atlantaunited_enqueue_comment_reply_script' );
function atlantaunited_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function atlantaunited_custom_pings( $comment ) {
?>
        <li <?php comment_class(); ?> id="li-comment-
            <?php comment_ID(); ?>">
            <?php echo comment_author_link(); ?>
        </li>
        <?php
}
add_filter( 'get_comments_number', 'atlantaunited_comment_count', 0 );
function atlantaunited_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


