

<?php get_header(); ?>
    <div class="fon">
    </div>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
          
        <?php the_content() ?>
    </article>
 <?php endwhile; else: ?>
 <?php endif; ?>


 <?php get_footer();?>

