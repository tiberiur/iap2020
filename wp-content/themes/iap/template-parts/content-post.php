<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="post">
	<?php get_template_part( 'template-parts/featured-image' ); ?>	
	<?php get_template_part( 'template-parts/entry-header' ); ?>
</a>