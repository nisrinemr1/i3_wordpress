<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name');wp_title(' - ') ?></title>
        <!-- permet d'inclure les feuilles de style -->
        <link rel="stylesheet" href ="<?= THEME_URI ?>/style.css">
        <?php wp_head() ?>
    </head>
<body>
    <nav>
        <div class="container">
    <!-- permet de dire à la page que le menu doit s'afficher ici primary menu -->
    <!-- ajout du logo dans navbar: -->
            <ul id="logo">
                <li>
                    <?php the_custom_logo() ?>
                </li>
            </ul>
            <?php wp_nav_menu([
                //identifiant du menu
                'theme_location' => 'primary',
                //ajouter un id dans l'html
                'menu_id' => 'main-menu',
                'container' => false
                ]) ?>
        </div>
    </nav>  
<div class="container">