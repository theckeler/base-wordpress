<? get_header(); ?>

<section class="content page index">
	<div class="wrapper">
		<h1>Blog</h1>

		<ul class="columns">
			<li class="column column-1">
				<div class="page-title">Viewing Category: <?php single_cat_title(); ?></div>
				<ul class="posts">
					<?php
					if (have_posts()) :
						while (have_posts()) :
							the_post();
					?>
							<li class="post">
								<a href="<?php the_permalink(); ?>">
									<date><?php echo get_the_date('F jS, Y'); ?></date>
									<strong><?php the_title(); ?></strong>
									<? if (has_post_thumbnail()) : the_post_thumbnail();
									endif; ?>
									<?php the_excerpt(); ?>
								</a>
							</li>
					<?
						endwhile;
					endif;
					?>
				</ul>
				<ul class="page-nav">
					<li><a id="load-more">Load More</a></li>
				</ul>
			</li>
			<li class="column column-2 widgets"><?php dynamic_sidebar('primary'); ?></li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>