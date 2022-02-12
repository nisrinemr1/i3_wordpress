<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title(' - ')?></title>
    <link rel="stylesheet" href="<?= THEME_URI ?>/style.css">
    <?php wp_head() ?>
</head>
<body>
    <nav>
        <div class="container-nav">
            <ul id="logo">
                <li>
                    <?php the_custom_logo() ?>
                </li>
            </ul>
            <?php wp_nav_menu([
                //identifiant du menu
                'theme_location' => 'primary',
                //ajout de l'id dans l'html
                'menu_id' => 'main-menu',
                //pour enlever le ul autour 
                'container' => false
            ]) ?>
        </div>
    </nav>
    <div class="container">