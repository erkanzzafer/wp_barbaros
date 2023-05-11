     <?php $ayar=get_option('my_settings'); ?>
     <footer class="footer">
                <aside class="footer__side">
                    <button class="footer__side__to-top icon-arrow-up"><a href="#"><img id="arrowimg"
                                src="<?php echo $temayolu; ?>/icon/right-arrows.png" /></a></button>
                    <ul class="footer__side__list">
                        <li class="footer__side__item">
                            <a href="<?php echo $ayar['barbaros_linkedin']; ?>"
                                class="footer__side__link icon-socials-linkedin" target="_blank"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li class="footer__side__item">
                            <a href="<?php echo $ayar['barbaros_youtube']; ?>"
                                class="footer__side__link icon-socials-youtube" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="footer__side__item">
                            <a href="<?php echo $ayar['barbaros_instagram']; ?>"
                                class="footer__side__link icon-socials-instagram" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="footer__side__item">
                            <a href="<?php echo $ayar['barbaros_twitter']; ?>" class="footer__side__link icon-socials-twitter"
                                target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="footer__side__item">
                            <a href="<?php echo $ayar['barbaros_facebook']; ?>"
                                class="footer__side__link icon-socials-facebook" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </aside>
                <div class="footer__content">
                    <div class="footer__menus">
                        <div class="footer__menu">
                            <div id="blog-heading-container">
                                <h2 id="blog-heading">Kurumsal Bilgiler</h2>
                                <div id="line"></div>
                            </div>


                                   <?php wp_nav_menu( array(
            'menu' => 'primary',
            'theme_location'    => 'primary',
            'container'         => '',
            'menu_class'        => 'footer__menu__list',
            'li_class' => 'footer__menu__item',
            'a_class' => 'footer__menu__link',
            'active_class' => 'active',
          ) );
          ?>



                          
                        </div>
                        <!-- /.footer__menu -->
                        <div class="footer__menu">
                            <div id="blog-heading-container">
                                <h2 id="blog-heading">Öne Çıkanlar</h2>
                                <div id="line"></div>
                            </div>
                            <ul class="footer__menu__list">
                                <li class="footer__menu__item">
                                    <a href="urunlerimiz" class="footer__menu__link">Bartech</a>
                                </li>

                                <li class="footer__menu__item">
                                    <a href="urunlerimiz" class="footer__menu__link">Fırtına</a>
                                </li>

                                <li class="footer__menu__item">
                                    <a href="urunlerimiz" class="footer__menu__link">Yaman</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.footer__menu -->
                        <div class="footer__menu">
                            <div id="blog-heading-container">
                                <h2 id="blog-heading">Ürün Yardım</h2>
                                <div id="line"></div>
                            </div>
                            <ul class="footer__menu__list">
                                <li class="footer__menu__item">
                                    <a href="argeurge" class="footer__menu__link">Ar-Ge/Ür-Ge</a>
                                </li>
                                <li class="footer__menu__item">
                                    <a href="urunlerimiz" class="footer__menu__link">Ürünlerimiz</a>
                                </li>
                                <li class="footer__menu__item">
                                    <a href="https://www.barbarosmakina.com/catalog" class="footer__menu__link">Ürün
                                        Kataloğu</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.footer__menu -->
                        <div class="footer__menu">
                            <div id="blog-heading-container">
                                <h2 id="blog-heading">E-Bülten</h2>
                                <div id="line"></div>
                            </div>
                            <div class="site-wrapper">
                                <span class="ebultenyazicss">Bültenimize Üye Olun ! <br> Fırsatlardan İlk Sizin
                                    Haberiniz Olsun !</span>
                                <form class="email-form" action="" method="POST">
                                    <input class="email-form__input" id="email-input" type="email"
                                        placeholder="E-Posta Adresinizi Giriniz.">
                                    <input id="subscribe-button" class="email-form__button" type="submit"
                                        value="Gönder">
                                </form>
                            </div>
                        </div>
                        <!-- /.footer__menu -->
                    </div>
                    <!-- /.footer__menus -->
                    <div class="footer__copyrights">
                        <a href="#" class="footer__copyrights__logo">
                            <img src="<?php echo $temayolu; ?>/img/logo.webp" alt="Barbaros Motor">
                        </a>
                        <p class="footer__copyrights__text">
                            <?php echo $ayar['site_footer']; ?>
                        </p>
                        <!-- <a href="https://d-help.com/tr/" class="dlogofooter">
                            <img src="./icon/dlogo.png" alt="Digital-Help">
                        </a> -->
                        <ul class="footer__copyrights__list">
                            <li class="footer__copyrights__item">
                                <a href="#" class="footer__copyrights__link">Sorumluluk ve
                                    Haklar</a>
                            </li>
                            <li class="footer__copyrights__item">
                                <a href="#" class="footer__copyrights__link">Gizlilik
                                    İlkeleri</a>
                            </li>
                            <li class="footer__copyrights__item">
                                <a href="https://d-help.com/tr/" class="dclasshelp">
                                    <img src="<?php echo $temayolu; ?>/icon/dlogo.png" alt="Digital-Help">
                                </a>
                            </li>
                        </ul>
                        <div class="footer__copyrights__lang">
                            <i class="fa-solid fa-earth-asia"></i>
                            <select name="language" id="language">
                                <option value="turkce">Türkçe</option>
                                <option value="english">English</option>
                            </select>
                        </div>

                    </div>
                </div>
                <!-- /.footer__content -->
            </footer>
        </main>
        <!-- /.main -->
    </form>
   



</body>

 <script type="text/javascript" src="<?php echo $temayolu; ?>/runtime.main.js"></script>
    <script type="text/javascript" src="<?php echo $temayolu; ?>/app.main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('#language').bind('change', function () { // bind change event to select
            var url = $(this).val(); // get selected value
            if (url = 'english') { // require a URL
                window.location = '/en/'; // redirect
            }
            else {
                window.location = '/'; // redirect
            }
            return false;
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="gtag/js?id=UA-190597347-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-190597347-1');
    </script>
</html>