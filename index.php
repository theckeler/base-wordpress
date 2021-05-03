<? get_header(); ?>

<section class="page index">
	<div class="wrapper">

		<ul class="rows">
			<li class="row row-1">
				<h1>Blog</h1>
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
									<span>Read More ›</span>
								</a>
							</li>
					<?
						endwhile;
					endif;
					?>
				</ul>
				<?php
				if ($wp_query->max_num_pages > 1) :
				?>
					<ul class="page-nav">
						<li><a id="load-more">Load More</a></li>
					</ul>
				<?php
				endif;
				?>
			</li>
			<li class="row row-2 widgets"><?php dynamic_sidebar('primary'); ?></li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>