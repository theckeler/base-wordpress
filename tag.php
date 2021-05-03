<? get_header(); ?>

<div class="content page tag">
	<h1>Viewing Tag: <?php echo str_replace('-', ' ', $tag); ?></h1>
	<?php
	while (have_posts()) :
		the_post();
	?>
		<div class="post">
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>:</h2>
			<div class="page-subnav">Tags: <?php the_tags('', '', ''); ?></div>
			<div class="page-content"><?php the_excerpt(); ?></div>
			<? include('_single-gallery.php'); ?>
		</div>
	<?
	endwhile;
	?>
</div>
<div class="tag-cloud">
	<div class="page-subnav">
		More Tags: <?php wp_tag_cloud('unit=px&smallest=12&largest=20&number=50&orderby=count'); ?>
		<div class="clear-all"></div>
	</div>
</div>
<div class="page-nav">
	<?php next_posts_link('&laquo; Previous'); ?>
	<?php previous_posts_link('Next &raquo;'); ?>
	<p class="clear-all"></p>
</div>
</div>
<?php get_footer(); ?>