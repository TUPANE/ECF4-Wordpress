<!--PAGE AFFICHAGE DES ARTICLES D'UNE PAGE-->
<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?><!--celui-ci permet d'afficher des articles-->
    	<h1><?php the_title(); ?></h1><!--celui-ci permet d'afficher le titre de chaque page-->
    	<?php the_content(); ?><!--celui-ci permet d'afficher les contenu de la page-->
	<?php endwhile; endif; ?><!--celui-ci termine l'affichage -->
<?php get_footer(); ?>