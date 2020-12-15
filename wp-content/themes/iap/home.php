<?php get_header(); ?>

<main class="main-home">

    <?php $featuredPost = new WP_Query(array('posts_per_page'=>'1')) ?>
    <?php if($featuredPost->have_posts()): ?>
        <div class="featured-post">
        <?php while($featuredPost->have_posts()): ?>
            <?php $featuredPost->the_post() ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="post">
                <?php if ( has_post_thumbnail() ): ?>
                    <figure class="post-thumbnail">
                        <?php the_post_thumbnail() ?>
                    </figure>
                <?php endif ?>

                <?php the_title('<h3 class="post-title">', '</h3>') ?>

                <?php the_excerpt() ?>
            </a>
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