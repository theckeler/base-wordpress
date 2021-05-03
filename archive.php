<?php get_header(); ?>

<div class="content page max-container archive">
	<h1><? echo post_type_archive_title('', false) ?></h1>
	<span>
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
				<a href="<? the_permalink() ?>">
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
				</a>
		<?
			endwhile;
		endif;
		?>
	</span>
</div>

<? get_footer(); ?>