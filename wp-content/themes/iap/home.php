<?php get_header(); ?>
<main class="main-home">
    <?php if ( have_posts() ): ?>
        <h2>All articles</h2>
        <div class="posts">
            <?php while ( have_posts() ):?>
                <?php the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'post' ); ?>
            <?php endwhile ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>