		
		<?php if(is_active_sidebar('footer')): ?>
		<footer class="footer">
			<?php dynamic_sidebar( 'footer' ); ?>
			<small>© <?= date("Y") ?> <?= get_bloginfo('name') ?> - <?= get_bloginfo('description') ?> <br />All rights reserved.</small>
		</footer>
		<?php endif; ?>
		
		<?php wp_footer(); ?>

	</body>
</html>