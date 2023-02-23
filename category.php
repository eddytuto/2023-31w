<?php
/**
    Modèle category.php permet d'afficher une archive par catégorie d'article
*/
get_header() ?>
<main>
    <code>category.php</code>
    <section class="blocflex">
<?php 
if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <article>
       <h5><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h5>
       <p><?= wp_trim_words(get_the_excerpt(), 10);?></p>
    </article>
    <?php endwhile;
endif; ?>   
</section>
</main> 
<?php get_footer(); ?>

