<?php
## Modify Load More Button

function load_more_posts()
{
    $paged = $_POST["paged"];
    $args = array(
        'posts_per_page' => 6,
        'post_type'   => 'post',
        'post_status' => 'publish',
        'paged' => $paged
    );

    $articles = new WP_Query($args);
    $ar_posts = array();
    $i = 1;

    if ($articles->have_posts()) :
        while ($articles->have_posts()) :
            $articles->the_post();

            $one_post = null;
            ob_start();
?>
            <li class="post" <?php if ($i == 1) : echo ' id="page-' . $paged . '"';
                                endif ?>>
                <a href="<?php the_permalink(); ?>">
                    <date><?php echo get_the_date('F jS, Y'); ?></date>
                    <strong><?php the_title(); ?></strong>
                    <? if (has_post_thumbnail()) : the_post_thumbnail();
                    endif; ?>
                    <?php the_excerpt(); ?>
                </a>
            </li>
<?
            $one_post .= ob_get_clean();
            $ar_posts[] = $one_post;
            $i++;
        endwhile;
    endif;
    echo json_encode($ar_posts);
    die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
