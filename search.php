<?php
/**
    Modèle search.php pour afficher les résultats de recherche
*/
get_header() ?>
<main>
    <code>search.php</code>
    <section class="recherche">
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        //the_title('<h1>','</h1>');
        //the_permalink(); ?>
        <article>
        <h5><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h5>
        <?= wp_trim_words(get_the_excerpt(), 30);?>
        </article>
        <hr>
    <?php endwhile;
endif; ?>  
</section> 
</main> 
<?php get_footer(); ?>