<div class="single-meta">
	<?= get_avatar( get_the_author_meta( 'ID' ), '70' ); ?>
	<p>
		<strong><?= get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') ?></strong>
		<date><?php the_time('M d, Y'); ?></date>
	</p>
	<?php get_template_part( 'template-parts/post/share' ); ?>
</div>