<a class="card" href="<?php the_permalink() ?>">
    <?php the_post_thumbnail('thumbnail') ?>
    <div style="padding: 10px">
        <p><?php the_title() ?></p>
        <p><?php the_excerpt()?></p>
    </div>
</a>