<?php get_header(); ?>

<div id="templatemo_content">
	<?php the_post(); ?>
	<article class="postItem-full">
		<?php get_template_part('single-templates/content', get_post_format()) ?>
	</article>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>