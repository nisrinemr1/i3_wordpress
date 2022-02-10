<?php
    define('THEME_URI', get_stylesheet_directory_uri());

    add_action('after_setup_theme', function(){
        //enregistrer la nav
        register_nav_menus([
            "primary" => "Menu principal",
        ]);
        //permet d'ajouter un logo sur mon thème dans l'identité du site!!
        add_theme_support('custom-logo');

        add_theme_support('post-thumbnails');
    });
?>