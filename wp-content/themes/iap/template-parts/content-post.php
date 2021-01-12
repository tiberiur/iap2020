<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
	<?php get_template_part( 'template-parts/featured-image' ); ?>	
	<?php get_template_part( 'template-parts/entry-header' ); ?>
</a>