<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="intro-page">
    <!-- ADD TO HOME PAGE BODY TAG class="intro-page" -->
    <!-- HEADER -->
    <header class="header">
        <div class="container-fluid">
            <div class="header__wrap">
                <div class="header__logo">
                    <a href="#" class="logo"><img src="<?php print_r(ot_get_option( 'logo' )); ?>"></a>
                </div>
                <div class="header__nav">
                    <div class="header-nav">
                        <?php wp_nav_menu(    array (
                            'items_wrap'      => '<ul id="navigacija">%3$s</ul>',
                            'theme_location' => 'main',
                            'link_before' => '<span>','link_after'=>'</span>'
                            )); ?>
                        </div>
                    </div>
                    <div class="header__right">
                        <?php $header_buttons = ot_get_option( 'meniu_mygtukas', array() ); 
                        foreach ($header_buttons as $header_button) { ?>
                        <a href="<?php echo $header_button['nuoroda']; ?>" class="btn btn_red header__btn"><?php echo $header_button['title']; ?></a>
                        <?php } ?>
                        <div class="header__search">
                            <div class="header__search-toggle"></div>
                        </div>
                        <div class="header__language">
                            <div class="header-language">
                                <div class="header-language__current">
                                    lt
                                </div>
                                <div class="header-language__dropdown">
                                    <a href="#" class="header-language__item">en</a>
                                    <a href="#" class="header-language__item">ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-toggle">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>
        <div class="nav-content">
            <div class="nav-content__menus">
                <div class="nav-content__menu" id="nav-visit">
                    <a href="#nav-visit" class="nav-content__menu-title">
                        Aplankyk
                    </a>
                    <div class="nav-content__menu-list">
                        <?php wp_nav_menu(    array (
                            'theme_location' => 'aplankyk',
                            'link_before' => '<div class="nav-content__menu-item nav-content__menu-link">','link_after'=>'</div>'
                            )); ?>
                        </div>
                    </div>
                    <div class="nav-content__menu" id="nav-collection">
                        <a href="#nav-collection" class="nav-content__menu-title">
                            Kolekcija
                        </a>
                        <div class="nav-content__menu-list">
                           <?php wp_nav_menu(    array (
                            'theme_location' => 'kolekcija',
                            'link_before' => '<div class="nav-content__menu-item nav-content__menu-link">','link_after'=>'</div>'
                            )); ?>
                        </div>
                    </div>
                    <div class="nav-content__menu" id="nav-museum">
                        <a href="#nav-museum" class="nav-content__menu-title">
                            Muziejus
                        </a>
                        <div class="nav-content__menu-list">
                            <?php wp_nav_menu(    array (
                                'theme_location' => 'muziejus',
                                'link_before' => '<div class="nav-content__menu-item nav-content__menu-link">','link_after'=>'</div>'
                                )); ?>
                            </div>
                            
                        </div>
                    </div>
                    <div class="nav-content__footer">
                        <div class="nav-content__contacts">
                            <div class="nav-content__contacts-left">
                                <div class="nav-content__contacts-title">
                                    Galerija
                                </div>
                                <?php echo ot_get_option( 'footer_kontaktai_galerija' ); ?>
                            </div>
                            <div class="nav-content__contacts-right">
                                <div class="nav-content__contacts-title">
                                    kontaktai
                                </div>
                                <?php echo ot_get_option( 'footer_kontaktai_kontaktai' ); ?>
                            </div>
                        </div>
                        <div class="nav-content__socials socials">
                            <a href="#" class="socials__item">
                                <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M304 96h80v-96h-80c-61.757 0-112 50.243-112 112v48h-64v96h64v256h96v-256h80l16-96h-96v-48c0-8.673 7.327-16 16-16z"
                                    fill="currentColor"></path>
                                </svg>
                            </a>
                            <a href="#" class="socials__item">
                                <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 46.1c68.4 0 76.5 0.3 103.4 1.5 25 1.1 38.5 5.3 47.5 8.8 11.9 4.6 20.5 10.2 29.4 19.1 9 9 14.5 17.5 19.2 29.4 3.5 9 7.7 22.6 8.8 47.5 1.2 27 1.5 35.1 1.5 103.4s-0.3 76.5-1.5 103.4c-1.1 25-5.3 38.5-8.8 47.5-4.6 11.9-10.2 20.5-19.1 29.4-9 9-17.5 14.5-29.4 19.2-9 3.5-22.6 7.7-47.5 8.8-27 1.2-35.1 1.5-103.4 1.5s-76.5-0.3-103.4-1.5c-25-1.1-38.5-5.3-47.5-8.8-11.9-4.6-20.5-10.2-29.4-19.1-9-9-14.5-17.5-19.2-29.4-3.5-9-7.7-22.6-8.8-47.5-1.2-27-1.5-35.1-1.5-103.4s0.3-76.5 1.5-103.4c1.1-25 5.3-38.5 8.8-47.5 4.6-11.9 10.2-20.5 19.1-29.4 9-9 17.5-14.5 29.4-19.2 9-3.5 22.6-7.7 47.5-8.8 26.9-1.2 35-1.5 103.4-1.5zM256 0c-69.5 0-78.2 0.3-105.5 1.5-27.2 1.2-45.9 5.6-62.1 11.9-16.9 6.6-31.2 15.3-45.4 29.6-14.3 14.2-23 28.5-29.6 45.3-6.3 16.3-10.7 34.9-11.9 62.1-1.2 27.4-1.5 36.1-1.5 105.6s0.3 78.2 1.5 105.5c1.2 27.2 5.6 45.9 11.9 62.1 6.6 16.9 15.3 31.2 29.6 45.4 14.2 14.2 28.5 23 45.3 29.5 16.3 6.3 34.9 10.7 62.1 11.9 27.3 1.2 36 1.5 105.5 1.5s78.2-0.3 105.5-1.5c27.2-1.2 45.9-5.6 62.1-11.9 16.8-6.5 31.1-15.3 45.3-29.5s23-28.5 29.5-45.3c6.3-16.3 10.7-34.9 11.9-62.1 1.2-27.3 1.5-36 1.5-105.5s-0.3-78.2-1.5-105.5c-1.2-27.2-5.6-45.9-11.9-62.1-6.3-17-15-31.3-29.3-45.5-14.2-14.2-28.5-23-45.3-29.5-16.3-6.3-34.9-10.7-62.1-11.9-27.4-1.3-36.1-1.6-105.6-1.6v0z"
                                    fill="currentColor"></path>
                                    <path d="M256 124.5c-72.6 0-131.5 58.9-131.5 131.5s58.9 131.5 131.5 131.5 131.5-58.9 131.5-131.5c0-72.6-58.9-131.5-131.5-131.5zM256 341.3c-47.1 0-85.3-38.2-85.3-85.3s38.2-85.3 85.3-85.3c47.1 0 85.3 38.2 85.3 85.3s-38.2 85.3-85.3 85.3z"
                                    fill="currentColor"></path>
                                    <path d="M423.4 119.3c0 16.955-13.745 30.7-30.7 30.7s-30.7-13.745-30.7-30.7c0-16.955 13.745-30.7 30.7-30.7s30.7 13.745 30.7 30.7z"
                                    fill="currentColor"></path>
                                </svg>
                            </a>
                            <a href="#" class="socials__item">
                                <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 416.32">
                                    <path d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"
                                    fill="currentColor"></path>
                                </svg>
                            </a>
                            <a href="#" class="socials__item">
                                <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 360">
                                    <path d="M506.798 77.701c0 0-5-35.3-20.401-50.8-19.5-20.401-41.3-20.5-51.301-21.701-71.6-5.2-179.099-5.2-179.099-5.2h-0.201c0 0-107.5 0-179.099 5.2-9.999 1.2-31.8 1.3-51.301 21.701-15.4 15.5-20.3 50.8-20.3 50.8s-5.099 41.4-5.099 82.9v38.8c0 41.4 5.099 82.9 5.099 82.9s5 35.3 20.3 50.8c19.501 20.401 45.1 19.7 56.5 21.899 41 3.9 174.1 5.099 174.1 5.099s107.6-0.2 179.2-5.3c10-1.2 31.8-1.3 51.301-21.7 15.4-15.5 20.401-50.8 20.401-50.8s5.099-41.4 5.099-82.9v-38.8c-0.101-41.4-5.2-82.9-5.2-82.9zM203 246.5v-143.899l138.3 72.2-138.3 71.7z"
                                    fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <div class="search__center">
                        <form action="#" class="search__form">
                            <div class="search__top">
                                <input type="text" class="form-control" placeholder="Paieškos frazė..">
                            </div>
                            <div class="search__actions">
                                <button class="btn btn_default search__close-btn" type="button">uždaryti</button>
                                <button class="btn btn_default" type="submit">Ieškoti</button>
                            </div>
                        </form>
                    </div>
                </div>
    <!-- HEADER END-->