<?php get_header(); ?>

<div id="templatemo_content">
	<div class="postsFlow clearfix">
		<?php the_post(); ?>
		<article class="page-full">
			<h2><?php the_title() ?></h2>
			<div><?php the_content() ?></div>
		</article>
	</div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

