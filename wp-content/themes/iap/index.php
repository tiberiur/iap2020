<?php get_header(); ?>
<main>
    <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ):?>
                <?php the_post(); ?>
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            <?php endwhile ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>