
<!DOCTYPE html>
<?php $ayar=get_option('my_settings'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">

    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,user-scalable=1">

        <?php if (is_single() or is_page()) { ?>
        <title><?php echo get_the_title() ." | ". get_bloginfo('name');?> </title>
    <?php }else { ?>
          <title><?php echo get_bloginfo('name'); ?></title>
      <?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo $ayar['site_favicon']['url']; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="msapplication-TileColor" content="#a3a3a4">
    <meta name="msapplication-config" content="<?php echo $temayolu; ?>/assets/media/favicons/browserconfig.xml">
    <meta name="theme-color" content="#a3a3a4">
    <meta name="keywords" content="<?php echo $ayar['site_keywords']; ?>">
    <!-- Fonts -->
    <link href="css?family=Source+Sans+Pro:300,400,600,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo $temayolu; ?>/app.main.css" rel="stylesheet">

  
</head>

<body data-page="home">
    <header id="header3">
        <div clas="upmenu">
            <ul class="streamers">
                <img src="icon/call.png" width="20" height="20" />
                <li class="streamer" id="streamer1"><a class="nav-link1 " href="tel:03617183301">0(361) 718 3301</a>
                </li>
                <img src="icon/mail.png" width="20" height="20" />
                <li class="streamer" id="streamer1"><a class="nav-link1 "
                        href="mailto:info@barbarosmotor.com">info@barbarosmotor.com</a></li>
                <img src="icon/location.png" width="20" height="20" />
                <li class="streamer" id="streamer1"><a class="nav-link1 "
                        href="https://goo.gl/maps/h82uqZhs9Ucu3wFk8">Yeni Mah. Sinop Cad. No:89 Gerze/Sinop</a></li>
            </ul>

        </div>
    </header>
    <form method="post" action="./" id="form1">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">


        <!-- Main wrapper -->
        <main class="main">
            <!-- Include header -->
            <header class="header">
                <div class="header__bg"></div>

                <!-- Logo -->
                <div class="header__logo">
                    <a href="/" class="header__logo__link" title="Barbaros Motor">
                        <img class="barbaroslogo" src="<?php echo $ayar['site_logo']['url']; ?>" width="160" />
                    </a>
                </div>

                <!-- Main NAV -->
                           


           <?php wp_nav_menu( array(
            'menu' => 'primary',
            'theme_location'    => 'primary',
            'container'         => '',
            'menu_class'        => 'header__nav',
            'li_class' => 'header__nav__item',
            'a_class' => 'header__nav__link',
            'active_class' => 'active',
          ) );
          ?>


          

                <div class="mobile-menu-trigger">
                    <svg class="burger" version="1.1" height="100" width="100" viewbox="0 0 100 100">
                        <path class="line line1" d="M 30,65 H 70"></path>
                        <path class="line line2"
                            d="M 70,50 H 30 C 30,50 18.644068,50.320751 18.644068,36.016949 C 18.644068,21.712696 24.988973,6.5812347 38.79661,11.016949 C 52.604247,15.452663 46.423729,62.711864 46.423729,62.711864 L 50.423729,49.152542 L 50.423729,16.101695">
                        </path>
                        <path class="line line3"
                            d="M 30,35 H 70 C 70,35 80.084746,36.737688 80.084746,25.423729 C 80.084746,19.599612 75.882239,9.3123528 64.711864,13.559322 C 53.541489,17.806291 54.423729,62.711864 54.423729,62.711864 L 50.423729,49.152542 V 16.101695">
                        </path>
                    </svg>
                    <svg class="x" version="1.1" height="100" width="100" viewbox="0 0 100 100">
                        <path class="line" d="M 34,32 L 66,68"></path>
                        <path class="line" d="M 66,32 L 34,68"></path>
                    </svg>
                </div>

            </header>
                          


         