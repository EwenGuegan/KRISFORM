<?php get_header(); ?> <!-- Affiche le contenu du header -->
<?php //get_menu(); ?> <!-- Affiche le contenu du menu -->

<h1>
    Titre H1
</h1>
<?php if (have_posts()): while (have_posts()) : the_post(); ?> <!-- Si vrai, un (ou des) post a été trouvé sur l’url appelée, sinon faux. Affiche le contenu du/des post(s) trouvé(s) -->
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?> <!-- Affiche le contenu du footer -->