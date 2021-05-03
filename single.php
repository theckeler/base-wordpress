<? get_header(); ?>

<section class="page single">
	<div class="wrapper">
		<ul class="rows">
			<li class="row row-1">
				<?
				while (have_posts()) : the_post();
				?>
					<h1><?php the_title(); ?></h1>
					<date>Posted by <?php the_author(); ?> on <?php echo get_the_date('F jS, Y'); ?></date>

					<?php the_content(); ?>
				<?
				endwhile;
				?>

				<ul class="page-nav">
					<li><?php previous_post_link('%link'); ?></li>
					<li class="new"><?php next_post_link('%link'); ?></li>
				</ul>
			</li>
			<li class="row row-2 widgets"><?php dynamic_sidebar('primary'); ?></li>
		</ul>
	</div>
</section>

<? get_footer(); ?>