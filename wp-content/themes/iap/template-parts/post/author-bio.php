<?php if ( (bool) get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) : ?>
	<div class="single-bio <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
		<?= get_avatar( get_the_author_meta( 'ID' ), '70' ); ?>
		<p><?php the_author_meta( 'description' ); ?></p>
	</div>
<?php endif; ?>
