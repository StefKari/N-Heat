<?php
function insert_jquery(){
    wp_enqueue_script('jquery', false, array(), false, true);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);

add_theme_support( 'post-thumbnails' );


function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'pre_get_posts', 'custom_post_type_archive' );


add_filter("gform_validation_message", "gwp_change_message", 10, 2);
function gwp_change_message($message, $form){
    return '
<div class="gform_validation_errors">Došlo je do greške pri popunjavanju prijave. Molimo Vas da popunite sva označena obavezna polja. Hvala!
</div>
';
}


function custom_post_type_archive( $query ) {

    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'products' ) ) {
        $query->set( 'posts_type', 'products' );
        $query->set( 'posts_per_page', '2' );
        $query->set( 'search_filter_id', '94' );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'DESC' );
    }

}



if( function_exists('acf_add_options_page') ) {

    $option_page = acf_add_options_page(array(
        'page_title'  => 'Footer',
        'menu_title'  => 'Footer',
        'menu_slug'   => 'menu',
        'capability'  => 'edit_posts',
        'redirect'  => false
    ));

}
//Register menus
function green_consulting_register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'mobile-menu' => __( 'Main mobile menu' ),
            'extra-menu' => __( 'Extra Menu' ),
        )
    );
}
add_action( 'init', 'green_consulting_register_my_menus' );

//include_once( get_stylesheet_directory() .'/wp-bootstrap-navwlaker.php');

add_filter('wp_title','search_form_title');

/*function load_scripts() {
    wp_enqueue_script('ajax', get_theme_file_uri() . '/sorting.js', array('jquery'), NULL, true);

    wp_localize_script('ajax' , 'wp_ajax',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );

}

add_action( 'wp_enqueue_scripts', 'load_scripts');


add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {


    $category = $_POST['category'];

    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1,

    );
    if(isset($category)) {
        $args['category__in'] = array($category);

    }
    $query = new WP_Query($args);

    if($query->have_posts()) :
        echo '<div class="row">';
        while($query->have_posts()) : $query->the_post();

            echo '<div class="col-md-4">';
            echo '<a href="' . get_the_permalink() . '">';;
            the_post_thumbnail ( '<img>');
            the_title('<h2>', '</h2>');
            the_excerpt( '<p>',  '</p>');
             echo '</a>';
          echo '</div>' ;
        endwhile;
        echo '</div>' ;
    endif;
    wp_reset_postdata();


    die();
}

*/



function get_post_char_limit($str, $maxStr) 
{
    $str = strip_tags($str);
   
    if ($str != null) {
        if (strlen($str) <= $maxStr) {
            return trim($str);
        } else {
            $shorStr = substr($str, 0, $maxStr);
            $shorStr .= "...";

            return trim($shorStr);
        }
    }
}