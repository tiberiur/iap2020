<?php
// For use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
?>
<?php if ($tags): ?>
    <?php
    $firstTag = $tags[0]->term_id;
    $args = array (
        'tag__in' => array($firstTag),
        'post__not_in' => array($post->ID),
        'posts_per_page' => 6,
        'ignore_sticky_posts' => 1
    );
    $relatedPosts = new WP_Query($args);
    ?>
    
    <?php if( $relatedPosts->have_posts() ): ?>
        <div class="single-related">
            <h2>What to read next</h2>
            <div class="single-container posts">
            <?php while ($relatedPosts->have_posts()) :?> 
                <?php $relatedPosts->the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'post' ); ?>
            <?php endwhile ?>
            </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
<?php endif; ?>
