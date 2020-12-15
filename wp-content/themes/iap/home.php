<?php get_header(); ?>
<main class="main-home">

    <?php $featuredPost = new WP_Query(array('posts_per_page'=>'1')) ?>
    <?php if($featuredPost->have_posts()): ?>
        <div class="featured-post">
        <?php while($featuredPost->have_posts()): ?>
            <?php $featuredPost->the_post() ?>
            <?php get_template_part( 'template-parts/content', 'post' ); ?>
        <?php endwhile ?>
        </div>
    <?php endif ?>

    <?php if ( have_posts() ): ?>
        <h2>All articles</h2>
        <div class="posts">
            <?php $i = 0; while ( have_posts() ): ?>
                <?php the_post(); ?>
                <?php if($i !== 0): // skip the first post ?>
                    <?php get_template_part( 'template-parts/content', 'post' ); ?>
                <?php endif ?>
            <?php $i++; endwhile ?>
        </div>
    <?php endif ?>
</main>
<?php get_footer(); ?>