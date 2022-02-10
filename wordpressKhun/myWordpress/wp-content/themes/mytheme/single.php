<?php get_header() ?>

<div class="left">
    <h1><?php the_title() ?></h1> <!-- recup le titre et l'affiche. -->
    
    <div>
        <?php the_post_thumbnail('large') ?><!-- pour recup l'image et le mettre en large -->
    </div>
    
    <div>
        <?php the_content()?>
    </div>
</div>

<div class="right">
    <!-- sur le resultat de la requête -->
    <?php $loop = getRelatedProjects(4, get_the_ID()) ?> <!-- get_the_id() exclure de la recherche dont l'id est l'id courrent! -->
    
    <h3>Article similaires</h3>
    <div class="card-container">
    <?php while($loop->have_posts()) { 
        $loop->the_post();
        //pour voir si on recupere bien
        //echo '<p>' .get_the_title(). '</p>';
        get_template_part('template-parts/project');
        //va chercher pour lui la template d'un projet.
    };?>
    </div>
</div>

<!-- on a déjà une div qui englobe tout! -->


<?php get_footer() ?>