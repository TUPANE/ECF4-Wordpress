
<!--PAGE AFFICHAGE PAGE-ACCUEIL-->
<?php get_header(); ?>
    <h1 id="JouL">BIENVENUE DANS VOTRE JOURNAL LOCAL</h1>
    <h3 id="nom">"Le pays"</h3>
<div class="acc">     
    <div id="bet"><?php while(have_posts()) : the_post() ;?></div>
    <h2><?php the_title(); ?></h2> 
    <div class="sio"><?php the_content(); ?></div>
    <?php endwhile;?>
</div>
<?php get_footer(); ?>

