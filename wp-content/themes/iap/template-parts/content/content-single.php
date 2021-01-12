<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>

	<header class="single-title">
		<?php the_title( '<h1>', '</h1>' ); ?>
		<?php the_excerpt() ?>
	</header>

	<div class="single-container">
		<?php get_template_part( 'template-parts/post/meta' ); ?>

		<div class="single-content">
			<?php the_content(); ?>
		</div>

		<?php get_template_part( 'template-parts/post/share' ); ?>

		<?php $post_tags = get_the_tags(); ?>
		<?php if($post_tags): ?>
		<div class="single-tags">
			<span>Tags: </span>
			<ul>
				<?php foreach($post_tags as $tag): ?>
					<li><?= $tag->name ?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<?php endif ?>
		
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	</div>

    <script>
    (function() {

		const shareLinks = document.querySelectorAll('.single-share a');

		shareLinks.forEach(el => el.addEventListener('click', event => {
			
			const url = el.href;
			// use this url for testing on local env
			// https://www.facebook.com/sharer/sharer.php?u=https://www.news.ro/social/update-coordonatorul-campaniei-vaccinare-anunta-programarea-doua-etapa-incepe-15-ianuarie-face-programarea-vaccinare-1-766-puncte-vaccinare-disponibile-etapa-doua-50-dintre-15-ianuarie-1922401412002021011619878057

			const 
				width  = 575,
				height = 350,
				left   = (window.outerWidth  - width)  / 2,
				top    = (window.outerHeight - height) / 2,
				opts   = 'status=1' +
					',width='  + width  +
					',height=' + height +
					',top='    + top    +
					',left='   + left;

			window.open(url, 'social share', opts);

			event.preventDefault();
		}))
		
    })()
    </script>
</article>