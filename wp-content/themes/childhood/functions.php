<?php 
//хук 1арг что ловим, 2арг доп функционал
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
    //подключение стилей
    //первый аргумент название стиля, второй путь указывайт на главный файл темы
    //стили подключаются последовательно
    //можно и из других папок подключать
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    //Подлкючить доп файл из другой папки
    //wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css');
    //подключить через сдн
    //wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
};

function childhood_scripts() {
    //в array зависимости тип от джейквери, crhbgn pfuhepbnmcz njkmrj njulf rjulf pfuhepbnmcz l;tqrdthb
    wp_enqueue_script('childhood-scripts', get_template_directory_uri(  ) . '/assets/js/main.min.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); //изображение записей на заднем фоне
add_theme_support( 'menus' );


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args){
    //atts все атрибуты ссылок
    //item каждая отдельная ссылка
    //args все аргументы меню
    if($args->menu === 'Main'){
        $atts['class'] = 'header__nav-item';

        if($item->current){
            $atts['class'] .= ' header__nav-item-active'; //склеили классы
        };
    };
    return $atts;
}




?>
