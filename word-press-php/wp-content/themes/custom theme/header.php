<html>

<head>
    <title>Tutorial theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
</head>

<body>
    
<div class="container">
    <div id="ttr_header" class="row">

        <?php
        $pagename = get_query_var('pagename');
        wp_nav_menu(array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class'
        ));
        ?>
    </div>
    <?php if ($pagename) : ?>
        <div id="page-tittle" class="row">
            <h4 style=" text-transform : uppercase; text-align:center">
                <?php echo   $pagename ?>
            </h4>
        </div>
        <?php else : ?>
                    <p></p>
    <?php endif; ?>
