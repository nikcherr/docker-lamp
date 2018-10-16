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
    <div class="category">Tags: <a href="#">Freebies</a>, <a href="#">Templates</a></div> 
    <?php if(is_category() || is_home()):?>
        <div class="button float_r"><a href="<?php the_permalink();?>" class="more">Узнать больше</a></div>
    <?php endif; ?>
    <div class="cleaner"></div>
</div>