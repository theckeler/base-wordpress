<?php
## Modify where images are loading from for local hosting.

if ($_SERVER['SERVER_PORT'] == '8080') :
    // Replace src paths
    add_filter('wp_get_attachment_url', function ($url) {
        if (file_exists($url)) :
            return $url;
        endif;
        return str_replace(WP_HOME, 'https://nas.dreamhosters.com', $url);
    });

    // Replace srcset paths
    add_filter('wp_calculate_image_srcset', function ($sources) {
        foreach ($sources as &$source) {
            if (!file_exists($source['url'])) :
                $source['url'] = str_replace(WP_HOME, 'https://nas.dreamhosters.com', $source['url']);
            endif;
        }
        return $sources;
    });
endif;
