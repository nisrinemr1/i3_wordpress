<?php get_header() ?>

<!-- //the_custom_logo()  -->

<!-- permet d'afficher le titre de la page -->
<!-- the_title() -->
<!-- permet de recup une chaine de charactère qui contient un titre. Si je veux afficher le titre il faudra ajouter un echo -->
<!--get_the_title() --> <!-- mettre dans une balise php -->
<!-- si jamais j'ai envie de mettre en uppercase, autant le faire en css -->

<!--Afficher le contenu. -->
<?php the_content() ?>

<?= str_ireplace('i', '🕯', get_the_content()) ?>
<!-- remplace les i par les bougies. -->


<?php get_footer() ?>