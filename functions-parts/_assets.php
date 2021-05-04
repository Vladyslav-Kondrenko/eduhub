<?php 
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/static/js/jquery-3.5.0.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/static/css/styles.css');
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_style('pikaday', 'https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css');
    wp_enqueue_style('country', get_stylesheet_directory_uri() . '/build/static/css/blocks/country.css');

 

    // wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    // wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('smooth-scroll', get_stylesheet_directory_uri() . '/build/static/js/libs/SmoothScroll.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('lax', get_stylesheet_directory_uri() . '/build/static/js/libs/lax.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('scroll-magic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js',  array('jquery'), '1.0', true);

    // 
    // wp_enqueue_script('scroll-magic-animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js',  array('jquery'), '1.0', true);
    // https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js
    // wp_enqueue_script('scroll-magic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js',  array('jquery'), '1.0', true);

    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/static/js/main.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/build/static/js/libs/slider.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('moment', get_stylesheet_directory_uri() . '/build/static/js/libs/moment.min.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('selectorStylize', get_stylesheet_directory_uri() . '/build/static/js/libs/selectorStylize.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('smoothScroll', get_stylesheet_directory_uri() . '/build/static/js/libs/smoothScroll.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/static/js/libs/swiper.min.js',  array('jquery'), '1.0', true);   
   
    
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('pikaday', 'https://cdn.jsdelivr.net/npm/pikaday/pikaday.js',  array('jquery'), '1.0', true);   
    wp_enqueue_script('player_api', 'https://www.youtube.com/player_api',  array('jquery'), '1.0', true);   
    
    
    
    $page_template =  mb_substr(get_page_template_slug(), 0, -4); // get template file name and cut last 4 symbols

    $css_file_path = get_template_directory_uri() . '/build/static/css/pages/' . $page_template . '.css';
    $js_file_path = get_template_directory_uri() . '/build/static/js/pages/' . $page_template . '.js';

    // $is_singular = is_singular('news') || is_singular('products') || is_singular('tips');

    // if (!$is_singular && !is_404() && !is_search(  )) {
        
    //     wp_enqueue_style( $page_template, $css_file_path );
    //     wp_enqueue_script($page_template, $js_file_path,  array('jquery'), '1.0', true);
    // }


    if (is_front_page()) {
        // wp_enqueue_style('swiper', get_template_directory_uri() . '/build/static/css/libs/swiper.css');
        // wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/static/js/libs/swiper.min.js',  array('jquery'), '1.0', true);
        // wp_enqueue_script('form', get_stylesheet_directory_uri() . '/build/static/js/blocks/form.js',  array('jquery'), '1.0', true);   
    }
    if (is_404()) {
        wp_enqueue_style('404', get_template_directory_uri() . '/build/static/css/pages/404.css');
    }


    if (is_page_template('page-blocked.php')) {
        wp_enqueue_style('page-blocked', get_template_directory_uri() . '/build/static/css/page-blocked.css');
    }

    if (!is_page_template('page-blocked.php')) {
        wp_enqueue_script('country', get_stylesheet_directory_uri() . '/build/static/js/blocks/country.js',  array('jquery'), '1.0', true);   
    }

  
}

add_action('wp_enqueue_scripts', 'my_assets');
