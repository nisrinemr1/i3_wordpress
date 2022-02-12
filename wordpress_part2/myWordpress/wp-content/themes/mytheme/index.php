<?php get_header() ?>

<div class="form-container">
    <form action="projets" method="GET"><!-- rajouter dans l'url un new paramètre. J'aurais just a add un input -->
        <div>
            <!-- pour qu'il y ait ?s=hello  Il regarde partout. Dans le contenu, le titre et les tags!!!-->
            <input type="search" name="s">
            <button>Rechercher</button>
</div>
    </form>
</div>

<!-- fallback. Vu qu'on a pas de template pour la page des projet, il affiche la template de l'index.php! Current Template Name afin qu'on sais dans quel template on est:
    Current Template: front-page.php-->
    <!-- on va travailler ici la page projet.  -->

<!-- en fonction de la page on applique un css.  Dans function.php!-->

<div class="card-container">
    <!-- have_poit va retourner vrai s'il reste des articles à parcourir. Il va boucler les différents article. Tans qu'il y a des article, il continue -->
    <?php while(/* sur quoi on va devoir boucler. Wordpress à une fonction */have_posts()) {
        the_post();?>
        <a href="<?php the_permalink()?>">
        <div class="card">
                <?php the_post_thumbnail('medium')?> <!-- le clique se fera sur l'image et non pas sur le text si on le laisse sur l'image -->
                <?php the_title()?>
            </div>
        </a>
    <?php } ?>
    <!-- the_post va passer à l'article suivant. -->
    <!-- http://localhost:8888/wordpressKhun/myWordpress/post à ajouter dans le menu et créer un liens personnalisés.
    Creer une page qui va pointer vers la liste des projets. Une page qui va créer automatiquement afficher des article  -->
</div>

<!-- ajout de la pagination Existe a partir du moment qu'il y a plus de 10 post! Pas assez d'elements! IL faudra changer dans les reglage -> lecture -> 1 article. Il le fait de manière automatique. C'est wordpress qui l'a créer lui même !-->

<div class="pagination-container">
        <?php the_posts_pagination(["container-page"])?>
</div>
<?php get_footer() ?>