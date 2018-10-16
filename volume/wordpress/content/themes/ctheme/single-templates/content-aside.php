<div class="post_section"><span class="bottom"></span>
    <span class="comment">
        <a href="<?php the_permalink() ?>#comments">
            <?php comments_number('0', '1', '%'); ?>
        </a>
    </span>
    <h2><a href="<?php the_permalink();?>"> 
        <?php the_title(); ?> </a>
    </h2>
    <strong>Дата:</strong> <?php the_date(); ?> | <strong>Автор:</strong> <?php the_author(); ?>
    <a href="#"><img src="<?php echo the_post_thumbnail_url();?>" alt="image 1" /></a>
    <?php the_content(); ?>
    <div class="cleaner"></div>
</div>