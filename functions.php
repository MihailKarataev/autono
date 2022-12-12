<?php
    //ПОДКЛЮЧАЮ СТИЛИ
    add_action( 'wp_enqueue_scripts', 'main_style');
    function main_style() {
        wp_enqueue_style( 'style', get_stylesheet_uri());
    }

?>