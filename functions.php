<?php

function ablog_scripts() {

    wp_enqueue_style('boostrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('ablog-style', get_stylesheet_uri(), array(), time(), 'all');

    wp_enqueue_script('bostrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');

}
add_action('wp_enqueue_scripts','ablog_scripts');



function ablog_config(){

    register_nav_menus(
        array(
            'ablog_main_menu'   => 'Main menu',
            'ablog_footer_menu' => 'Footer menu',
    )
    );

    $args = array(
        'default-image'          => '',
        'width'                  => 155,
        'height'                 => '100%',
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $args );

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'width' => 200,
        'height'=> 110,
        'flex-height'            => true,
        'flex-width'             => true, 
    ),);

}
add_action('after_setup_theme','ablog_config', 0);


function ablog_sidebars(){

    register_sidebar(array(
        'name'  =>   'Blog Sidebar',
        'id'    =>   'sidebar-blog',
        'description'   =>  'This is the blog sidebar, you can Add your widgets here',
        'before_widget' =>  '<div class="widget__wrapper">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget__title">',
        'after_title'   =>  '</h4>'
    ));

    // Services Register

    register_sidebar(array(
        'name'  =>   'Service 1',
        'id'    =>   'services-1',
        'description'   =>  'First Service area',
        'before_widget' =>  '<div class="widget__wrapper">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget__title">',
        'after_title'   =>  '</h4>'
    ));

    register_sidebar(array(
        'name'  =>   'Service 2',
        'id'    =>   'services-2',
        'description'   =>  'Second Service area',
        'before_widget' =>  '<div class="widget__wrapper">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget__title">',
        'after_title'   =>  '</h4>'
    ));

    register_sidebar(array(
        'name'  =>   'Service 3',
        'id'    =>   'services-3',
        'description'   =>  'Third Service area',
        'before_widget' =>  '<div class="widget__wrapper">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget__title">',
        'after_title'   =>  '</h4>'
    ));
}
add_action('widgets_init','ablog_sidebars' );