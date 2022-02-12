<?php
//que du code php ici

//constants definitions 
define('THEME_URI', get_stylesheet_directory_uri());
//end constants definition 

//hook de cycle de vie de wordpress
add_action('after_setup_theme', function(){
    //document.addEventListener('click', function(){})
    //register mon premier menu 
    //le parametre de register nav menus est un tableau dans lequel je vais définir mes menus. 
    register_nav_menus([
        "primary" => "Menu principal",//primary est la clef du menu et après le => est le text qui va apparaître. menu id => menu text
        //"footer" => "Menu du pied de page"
    ]);
    
    //permet de rajouter des fonctionalités à votre thème wordpress https://developer.wordpress.org/reference/functions/add_theme_support/
    //add_theme_support($feature);
    //definir un tableau qu'on va autoriser un suport dans notre thème (comme l'ajout d'une image etc.)
    add_theme_support('custom-logo', ['height'=> 100, 'width'=>200]); //permet d'ajouter un logo sur mon theme dans l'identité du site! Cependant, il faudra déclarer quelque part ou il faudra mettre le logo. Si  on l'active de notre côté que les utilisateur va l'utiliser et il faudra trouver un endroit pour mettre le logo.
    add_theme_support('post-thumbnails'); 
});

//useEffect(()=> {

//})

//ajouter la fonction qui relira le style à la page spécifique. Hook du cycle de vie permettant l'ajout de feuilles de style ou de scripts.
add_action('wp_enqueue_scripts', function(){
    //is_page permet de tester la page sur laquelle on est
    if(is_home()) {//ici qu'on mentionne quel feuille de style ou de script. Si le template qui est utiliser est 'index', on va lui lier un style particulier.
        //ajout d'une autre fonction qui va diriger vers la feuille de style. dans le [] on y ajoute les dépendences. Comme dans l'ajout de bootstrap, il faudra ajouter la dépendance de jquery
        wp_enqueue_style('projects_style', THEME_URI . '/assets/dist/projets.css');
        //sinon il y aussi wp_enqueue_script pour ajouter le scripte.
        //die; il va arrêter le scripte juste après
    };
    //lier le css a la page single
    if(is_single()){
        wp_enqueue_style('single_style', THEME_URI . '/assets/dist/single.css');
    };
});


//fonction qui permet de récuperer des choses depuis la database. On ne le met pas dans single.php
function getRelatedProjects($nbArticle, $id){
    //ecrire les paramètre. on va recup le type de post et mettre le status qui est publié ou draft. Donc on doit récup uniquement les projets publié(publish).
    //ajout de l'option post_per_page pour limité le nombre d'éléments par page!  Donc récupere uniquement 4
    //Choisir si on veut récup les 4 premiers ou bien afficher les 4 derniers avec l'offset => vers l'indice 10 et montre les 10 suivants! 
    //order_by permet de dire comment ordoner mes articles(par le titre, le nom de l'auteur ou des id. mais là on va faire par la date de publications).
    // 'order' sera en decroisant desc : descending (derniers articles en premier.) 

    // SELECT * FROM Post 
    //WHERE post_status = 'publish' AND post_type IN('post') AND Id NOT IN(42) 
    // ORDER BY publish_date DESC 
    //LIMIT 4 OFFSET 0
    $args= [
        'post_type' =>['post'],
        'post_status' => 'publish',
        'post__not_in' => [$id],
        'post_per_page' => $nbArticle,
        'offset' => 0,
        'order_by' => 'publish_date',
        'order' => 'desc',
    ];

    //faire des requete vers la db et va contenir des arguments qui vont permettre de mettre une boucle et y afficher d'autres infos qui sont dans la database.
    //si on veut récup tous les articles d'un auteur spécifique. pour afficher les projets similaires et ceux qui ont contribués! là il faudra récpérer depuis la requete de la base! vu qu'on va pas utiliser pods, ce sera acf!
    //https://developer.wordpress.org/reference/classes/wp_query/
    return new WP_Query($args);
};


//on peut modifier des fonctions wordpress existente en ajoutant un filtre
add_filter('the_title', function($content){
    //content est le retour du the_title et on va retourner a chaque fois qu'on met get_the_title. Le content est le contenu orginal founit par la méthode the_title. On peut aussi retourner en reprenant le contenu et qu'on veut y mettre un coeur devant. Ca peut être interessant pour la pagination! 
    return '🛸' . $content . '👽';
});

add_filter('navigation_markup_template', function($content){
    //va remplacer la balise nav par la balise div! 
    return str_replace('</nav', '</div',str_ireplace('<nav','<div', $content));
    // possible de le faire avec la regegex
});

add_filter('excerpt_length', function(){
    return 20;
});

?>