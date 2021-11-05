<!doctype html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palanquin&family=Palanquin+Dark:wght@400;700&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            echo wp_title('');
        } ?></title>

</head>
<body <?php body_class(); ?>>
<header class="main-header ">
    <nav class="main-header__nav container ">
        <a href="" class="main-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-uslugipielegniarskiekepno.svg"
                 alt="" class="logo__img">
        </a>

        <ul class="nav__list">
            <a href="" class="mobile-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uslugipielegniarskiekepno-logo.svg"
                     alt="" class="mobile-logo__img">
            </a>
            <li class="nav__item"><a class="nav__link" href="">O Nas</a></li>
            <li class="nav__item"><a class="nav__link" href="">Usługi</a></li>
            <li class="nav__item"><a class="nav__link" href="">Personel</a></li>
            <li class="nav__item"><a class="nav__link" href="">Kontakt</a></li>
        </ul>
        <a href="#" class=" btn main-header__button">Zadzwoń</a>
        <button class="main-header__hamburger"
                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                aria-label="Main Menu">
            <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1"
                      d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"/>
                <path class="line line2" d="M 20,50 H 80"/>
                <path class="line line3"
                      d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"/>
            </svg>
        </button>
    </nav>
</header>

