<?php 
//хук 1арг что ловим, 2арг доп функционал
<<<<<<< HEAD
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

=======
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    //подключение стилей
    //первый аргумент название стиля, второй путь указывайт на главный файл темы
    wp_enqueue_style('childhood-style', get_stylesheet_directory_uri());
    
}
>>>>>>> 5c6803ebf0b1ce05bb994ff899794e65402cfcc5


?>
