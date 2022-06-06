<?php get_header(); ?> 
<h1>Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content() ?></p>

<?php
    $contenu = get_the_content();
    echo wp_trim_words($contenu, 20, "...");
?>

<p>
    <?= wp_trim_words(get_the_content(), 20, "<a href='".get_the_permalink()."' class=button>" . substr(get_the_title(), 0, 8) . "</a>") ?>
</p>

    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>