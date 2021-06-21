
<!--PAGE AFFICHAGE CATEGORIE-->


<?php get_header(); ?> 
<section id="primary" class="site-content">
  <div id="content">

<!-- Ci-dessous permet de vérifier si il y a des messages-->
<?php if ( have_posts() ) : ?>
  <header class="arc">
    <h1 class="cate"><?php single_cat_title( '', true ); ?></h1>

<!-- ci-dessous permet de faire la description-->
<?php if ( category_description() ) : ?>
  <div class="meta"><?php echo category_description(); ?></div>
<?php endif; ?>
  </header>

<!--Permet de faire la boucle-->
<?php while ( have_posts() ) : the_post(); ?>
  <div class="boul">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <main><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></main>
    <div class="goch">
    <?php the_excerpt(); ?>
    <p class="data"><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
    ?></p>
  </div></div><br><br>
<?php endwhile; 
  else: ?>
<?php endif; ?>
</div>
</section>


 
    <div class="cote"> <?php get_sidebar(); ?></div>
<?php get_footer(); ?>