<?php
global $post;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php wp_title(''); ?> › (Ace of) Base</title>
    <meta name="description" content="" />
    <meta property="og:type" content="website" />
    <meta name="og:title" property="og:title" content="<?php wp_title(''); ?> › (Ace of) Base" />
    <meta name="og:description" property="og:description" content="" />
    <meta property="og:site_name" content="Consume:Design" />
    <meta property="og:url" content="https:consumedesign.com" />
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/favicon.ico" />
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