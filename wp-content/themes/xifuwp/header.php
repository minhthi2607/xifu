<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Xifu</title>

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body <?php body_class(); ?>>
    <header class="header header-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <?php
                if (!empty(tr_options_field('theme_options.logo_header'))) :
                ?>
                    <div class="navbar-logo">
                        <a href="<?= get_site_url() ?>">
                            <?= wp_get_attachment_image(tr_options_field('theme_options.logo_header'), 'large') ?>
                        </a>
                    </div>
                <?php
                endif;
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bars fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    global $wp;
                    $menuItems = get_menu_by_location('main-menu');
                    $build_tree = recursive_mitems_to_array($menuItems);
                    $urlCurrent = home_url($wp->request) . '/';
                    if (!empty($build_tree)) : ?>
                        <ul class="navbar-nav me-auto">
                            <?php foreach ($build_tree as $item) : ?>
                                <li class="ml-40 nav-item<?php if ($item['item']->url == $urlCurrent) echo ' active' ?><?php if (!empty($item['children'])) echo ' dropdown'; ?>">
                                    <a class="nav-link<?php if (!empty($item['children'])) echo ' dropdown-toggle visible-mobi' ?>" href="<?= $item['item']->url ?>" <?php if (!empty($item['children'])) echo ' data-toggle="dropdown"' ?>>
                                        <?= $item['item']->title ?>
                                    </a>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="d-flex position-user-cart-tablet">
                    <div class="header-icon">
                        <a href="<?= wc_get_page_permalink('myaccount') ?>">
                            <?= wp_get_attachment_image(tr_options_field('theme_options.icon_user'), 'large') ?>
                        </a>
                    </div>
                    <div class="header-icon ml-20">
                        <a href="<?= wc_get_page_permalink('cart') ?>">
                            <?= wp_get_attachment_image(tr_options_field('theme_options.icon_cart'), 'large') ?>
                            <div class="count-product"><?php echo count(WC()->cart->cart_contents); ?></div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="content-wrapper">
    





