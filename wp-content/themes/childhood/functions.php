<?php 
//хук 1арг что ловим, 2арг доп функционал
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    //подключение стилей
    //первый аргумент название стиля, второй путь указывайт на главный файл темы
    wp_enqueue_style('childhood-style', get_stylesheet_directory_uri());
    
}


?>
