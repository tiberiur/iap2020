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