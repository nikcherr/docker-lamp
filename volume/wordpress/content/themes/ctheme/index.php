<?php get_header(); ?>
<div id="templatemo_content">
    
    <?php if(have_posts()) :
        while(have_posts()): the_post(); ?>
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
        <?php endwhile; ?>
    <?php else: ?>
        Записей нет!
    <?php endif; ?>
    <?php the_posts_pagination(); ?>
    
</div>


<?php get_sidebar(); ?>
    
<div id="templatemo_sidebar_two">
    <div class="banner_250x200">
        <a href="" target="_parent"><img src="images/250x200_banner.jpg" alt="templates" /></a>
    </div>
        
    <div class="banner_125x125">
      	<a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 1" /></a>
        <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 2" /></a>
        <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 2" /></a>
    	<a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 1" /></a>
    </div>
       
    <div class="cleaner_h40"></div>
        
    <div class="sidebar_two_box">
        <h4>Useful Resources</h4>
        <ul class="templatemo_list">
            <li><a href="" target="_parent">Free CSS Templates</a></li>
            <li><a href="" target="_parent">Flash Templates</a></li>
            <li><a href="" target="_parent">Website Templates</a></li>
            <li><a href="" target="_parent">Web Design Blog</a></li>
            <li><a href="" target="_parent">Flash Web Gallery</a></li>
            <li><a href="#">Curabitur sed lacinia</a></li>
            <li><a href="#">Vestibulum laoreet tincidunt</a></li>
            <li><a href="#">Nullam nec mi enim</a></li>
            <li><a href="#">Aliquam quam nulla</a></li>
            <li><a href="#">Curabitur non felis massa</a></li>
        </ul>
    </div>       
</div>

<?php get_footer(); ?>