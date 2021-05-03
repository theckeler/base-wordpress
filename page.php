<? get_header(); ?>

<div class="content page <? echo $post->post_name ?>">
	<div class="wrapper">

		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
		<?
			endwhile;
		endif;
		?>

	</div>
</div>

<? get_footer(); ?>