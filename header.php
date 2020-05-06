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
            <a class="navbar-brand" href="<?php echo site_url() ?>">Overseas Network</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/carefree') ?>" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Carefree Bookings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Hotels</a>
                            <a class="dropdown-item" href="#">Experiences</a>
                            <a class="dropdown-item" href="#">Marketing Support</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Heroes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('/travelpros') ?>">Travel Pros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/events') ?>">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/concierge') ?>">Concierge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/doers') ?>">The Doers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-primary" target="_blank" href="www.overseasxpress.com">Book Now</a>
                    </li>
                    <li class="nav-item dropdown d-none">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Carefree Bookings</a>
                            <a class="dropdown-item" href="#">Travel Pros</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
