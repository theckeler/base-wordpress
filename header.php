<?php
global $post;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title><?php wp_title(''); ?></title>
    <meta name="title" content="<?php wp_title(' '); ?>" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="document-class" content="Completed" />
    <meta name="document-rights" content="Copyrighted Work" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="General" />
    <meta name="document-distribution" content="Global" />
    <meta name="document-state" content="Static" />
    <meta name="cache-control" content="Public" />
    <meta http-equiv="Content-Language" content="EN-US" />
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />

    <link rel="icon" type="image/png" href="<? echo get_bloginfo('stylesheet_directory'); ?>/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body>
    <a name="top" id="top"></a>

    <header id="header" class="header">
        <div class="wrapper">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="logo"><a href="/"><img src="<? echo get_bloginfo('stylesheet_directory'); ?>/_images/logo.svg"></a></div>
            <nav class="navigation" role="navigation" aria-label="Main">
                <?php wp_nav_menu(array('container' => false, 'menu' => 'main', 'menu_class' => '', 'container' => 'ul',)); ?>
            </nav>
        </div>
    </header>