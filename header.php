<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?> >

    <header>
        <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/img/overseasLogo.png') ?>" class="logo img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array (
                    'theme_location' =>'headerMenuLocation'
                ));
                ?>
            </div>
        </nav>
    </header>
