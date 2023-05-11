﻿<?php /*/*Template Name: Index Sayfası */
include(TEMPLATEPATH."/header.php"); ?>

                <!-- Mobile menu trigger -->
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


            <!-- Hero banner -->
            <section class="banner banner--hero mb-md">
                <aside class="banner__side">
                    <ul class="banner__side__langs">
                        <li class="banner__side__langs__item">
                            <a href="/" class="banner__side__langs__link">EN</a>
                        </li>
                    </ul>
                    <ul class="banner__side__quick-access">
                        <li class="banner__side__quick-access__item">
                            <a href="bayiform" class="banner__side__quick-access__link"><img id="lefticoncss"
                                    src="<?php echo $temayolu; ?>/icon/bayi.png"><span>Bayi Başvurusu</span></a>
                        </li>
                        <li class="banner__side__quick-access__item">
                            <a href="iletisim" class="banner__side__quick-access__link"><img id="lefticoncss"
                                    src="<?php echo $temayolu; ?>/icon/iletisim.png"><span>İletişim</span></a>
                        </li>
                        <li class="banner__side__quick-access__item">
                            <a href="argeurge" class="banner__side__quick-access__link"><img id="lefticoncss"
                                    src="<?php echo $temayolu; ?>/icon/argeurge.png"><span>Ar-Ge/Ür-Ge</span></a>
                        </li>
                    </ul>
                </aside>
                <!-- /.banner__side -->
                <div class="banner__slider" data-autoplay="4000">
                    <div class="banner__slide">
                        <h1 class="banner__slide__text">
                            <span> </span><br>
                            <br>

                        </h1>
                        <div class="banner__slide__img-wrapper" id="youtube-res">
                            <!-- <video id="myVideo" class="image-bg cover-bg dsn-video" preload="none" autoplay loop
                            muted>
                            <source src="https://www.youtube.com/watch?v=9jktpSIehYs" type="video/mp4">

                        </video> -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9jktpSIehYs?autoplay=1&mute=1&controls=0&playlist=9jktpSIehYs&loop=1"></iframe>

                        </div>
                    </div>

                    <div class="banner__slide">
                        <h1 class="banner__slide__text">
                            <span> </span><br>
                            <br>

                        </h1>
                        <div class="banner__slide__img-wrapper">
                            <img src="<?php echo $temayolu; ?>/site/slider1.jpg" />
                        </div>
                    </div>


                    <div class="banner__slide">
                        <h1 class="banner__slide__text">
                            <span> </span><br>
                            <br>

                        </h1>
                        <div class="banner__slide__img-wrapper">
                            <img src="<?php echo $temayolu; ?>/site/slider2.jpg" />
                        </div>
                    </div>

                </div>

                <div class="banner__slider-nav">
                    <button class="banner__slider-nav__prev" type="button" disabled="disabled"><i id="sliderarrowicon"
                            class="fa-solid fa-angle-left"></i></button>
                    <div class="banner__slider-nav__num">
                        <span class="banner__slider-nav__num__current">01</span>
                        <span class="banner__slider-nav__num__progress"></span>
                        <span class="banner__slider-nav__num__total"></span>
                    </div>
                    <button class="banner__slider-nav__next" type="button"><i id="sliderarrowicon"
                            class="fa-solid fa-angle-right"></i></button>
                </div>
                <button class="banner__scroll-down" type="button"></button>

            </section>

            <!-- Inner body content wrapper -->
            <div class="container main__inner">
                <div class="main__content">
                    <!-- Quote -->
                    <section class="tight-container-xxl mb-md">
                        <div class="row text-center">
                            <div class="col-12">
                                <div class="quote-block icon-quote">
                                    <span class="quote-block__quote">“</span>Barbaros Motor ile zamandan kazanıp
                                    veriminizi artırın. <span class="quote-block__quote">”</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Latest news -->
                    <section class="tight-container-xxl mb-md latest-news">


                        <div class="row latest-news__cols">
                            <div class="col-md-4 col-12">

                                <a href="urunlerimiz" class="news-square" data-parallax="positionY"
                                    data-parallax-ratio-lg="60" data-parallax-ratio-md="-60" data-parallax-ratio-sm="60"
                                    data-parallax-ratio="20">
                                    <div class="news-square__img-wrapper">
                                        <div class="img-block lazy-loading" style="padding-bottom: 66%;">
                                            <img src="<?php echo $temayolu; ?>/site/capalama2.jpg" data-src="<?php echo $temayolu; ?>/site/capalama2.jpg"
                                                alt="Kadın Çiftçi Kredisi Projesine “Sürdürülebilir İş Ödülü”"
                                                data-parallax="scale" data-parallax-ratio=".3">
                                            <span class="lazy-loading__loader"></span>
                                            <noscript><img src="<?php echo $temayolu; ?>/site/capalama2.jpg"></noscript>
                                        </div>
                                    </div>
                                    <h6 class="news-square__title">
                                        Capalama Makineleri
                                    </h6>
                                    <p class="news-square__text">
                                        Bartech, Yaman, Fırtına çapa makineleri uygun fiyatları ile yüksek verimle
                                        çapalama yapabilirsiniz.
                                    </p>
                                </a><!-- /.news-square -->
                                <!-- /.news-square -->


                                <a href="hayvancilikmakine" class="news-square news-square--mr"
                                    data-parallax="positionY" data-parallax-ratio-lg="30" data-parallax-ratio-md="-30"
                                    data-parallax-ratio-sm="30" data-parallax-ratio="10">
                                    <div class="news-square__img-wrapper">
                                        <div class="img-block lazy-loading" style="padding-bottom: 56%;">
                                            <img src="<?php echo $temayolu; ?>/site/hayvanci2.jpg" data-src="<?php echo $temayolu; ?>/site/hayvanci2.jpg"
                                                alt="barbaros Holding, 26. İstanbul Tiyatro Festivali’ni Açıyor!"
                                                data-parallax="scale" data-parallax-ratio=".2">
                                            <span class="lazy-loading__loader"></span>
                                            <noscript><img src="<?php echo $temayolu; ?>/site/hayvanci2.jpg"></noscript>
                                        </div>
                                    </div>
                                    <h6 class="news-square__title">
                                        Hayvancılık Makineleri
                                    </h6>
                                    <p class="news-square__text">
                                        Barbaros Motor hayvancılık ekipmanları ile hem zamandan kazanır hem de
                                        veriminizi arttırırsınız.
                                    </p>
                                </a><!-- /.news-square -->


                            </div>
                            <!-- /.col-12 -->
                            <div class="col-md-4 col-12">
                                <div class="quote-block quote-block--centered icon-quote">
                                    Benzersiz ürünlerimizle sizlere hizmet sunuyoruz.
                                </div>

                                <a href="tarimmakine" class="news-square" data-parallax="positionY"
                                    data-parallax-ratio-lg="70" data-parallax-ratio-md="-60" data-parallax-ratio-sm="50"
                                    data-parallax-ratio="20">
                                    <div class="news-square__img-wrapper">
                                        <div class="img-block lazy-loading" style="padding-bottom: 38%;">
                                            <img src="<?php echo $temayolu; ?>/site/tarim2.jpg" data-src="<?php echo $temayolu; ?>/site/tarim2.jpg" alt=""
                                                data-parallax="scale" data-parallax-ratio=".3">
                                            <span class="lazy-loading__loader"></span>
                                            <noscript><img src="<?php echo $temayolu; ?>/site/tarim2.jpg"></noscript>
                                        </div>
                                    </div>
                                    <h6 class="news-square__title">
                                        Tarım Makineleri
                                    </h6>
                                    <p class="news-square__text">
                                        Orman, bahçe, tarım motorları ve ekipmanlarına ilişkin 40 yılı aşkın tecrübeye
                                        sahibiz.
                                    </p>
                                </a><!-- /.news-square -->


                            </div>
                            <!-- /.col-12 -->
                            <div class="col-md-4 col-12">

                                <a href="endustriyelmakine" class="news-square" data-parallax="positionY"
                                    data-parallax-ratio-lg="-20" data-parallax-ratio-md="20"
                                    data-parallax-ratio-sm="-20" data-parallax-ratio="30">
                                    <div class="news-square__img-wrapper">
                                        <div class="img-block lazy-loading" style="padding-bottom: 50%;">
                                            <img src="#" data-src="<?php echo $temayolu; ?>/site/endustri2.jpg"
                                                alt="barbaros İnşaat, Dünyanın En Büyük Uluslararası 250 Müteahhidi Arasında!"
                                                data-parallax="scale" data-parallax-ratio=".1">
                                            <span class="lazy-loading__loader"></span>
                                            <noscript><img src="./site/endustri2.jpg"></noscript>
                                        </div>
                                    </div>
                                    <h6 class="news-square__title">
                                        Endüstriyel Makineler
                                    </h6>
                                    <p class="news-square__text">
                                        Salça, Hamur Kabartma, Yayık ve Pelet Makineleri ile geniş ürün yelpazelerine
                                        sahibiz.
                                    </p>
                                </a><!-- /.news-square -->



                                <a href="kesimmotorlari" class="news-square" data-parallax="positionY"
                                    data-parallax-ratio-lg="-20" data-parallax-ratio-md="20"
                                    data-parallax-ratio-sm="-20" data-parallax-ratio="30">
                                    <div class="news-square__img-wrapper">
                                        <div class="img-block lazy-loading" style="padding-bottom: 50%;">
                                            <img src="<?php echo $temayolu; ?>/site/kesim2.jpg" data-src="<?php echo $temayolu; ?>/site/kesim2.jpg"
                                                alt="barbaros İnşaat, Dünyanın En Büyük Uluslararası 250 Müteahhidi Arasında!"
                                                data-parallax="scale" data-parallax-ratio=".1">
                                            <span class="lazy-loading__loader"></span>
                                            <noscript><img src="<?php echo $temayolu; ?>/site/kesim2.jpg"></noscript>
                                        </div>
                                    </div>
                                    <h6 class="news-square__title">
                                        Kesim Motorları
                                    </h6>
                                    <p class="news-square__text">
                                        Bartech, Yaman, Fırtına çapa makineleri uygun fiyatları ile yüksek verimle
                                        çapalama yapabilirsiniz.
                                    </p>
                                </a><!-- /.news-square -->



                            </div>
                            <!-- /.col-12 -->
                        </div>
                    </section>

                    <!-- Quote & more latest news -->
                    <section class="tight-container-xxl mb-md pull-up-news has-v-logo">
                        <div class="barbaros-v-logo">
                            <img src="./img/yanlogo2.png" data-parallax="positionY" data-parallax-ratio-lg="-745"
                                data-parallax-ratio-md="-200" data-parallax-ratio-sm="-10" data-parallax-ratio="-10" />
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-5 col-12">
                                <div class="quote-block icon-quote">
                                    Ekipmanlar
                                </div>
                                <p>Makine ve Motorlar haricinde sizlere çalışma alanlarınızda yardımcı veya koruyucu
                                    ekipmanlar geliştiriyor. Sizlere daha iyi hizmet sunmak için bu alanda kendimize
                                    güveniyoruz.</p>
                            </div>
                            <div class="col-xl-6 offset-xl-1 col-md-7 col-12">
                                <div class="more-latest-news">
                                    <ul class="more-latest-news__list">

                                        <li class="more-latest-news__item">
                                            <img class="more-latest-news__link ekipmanfour" src="<?php echo $temayolu; ?>/site/ekipman2.jpg">
                                        </li>

                                        <!-- <li class="more-latest-news__item">
                                            <img class="more-latest-news__link  ekipmanfour" src="./img/capalamamakineleri.jpg">
                                        </li>

                                        <li class="more-latest-news__item">
                                            <img class="more-latest-news__link  ekipmanfour" src="./img/capalamamakineleri.jpg">
                                        </li>

                                        <li class="more-latest-news__item">
                                            <img class="more-latest-news__link  ekipmanfour" src="./img/capalamamakineleri.jpg">
                                        </li> -->


                                    </ul>
                                    <a href="ekipman" class="btn btn--more ">Tümünü görmek
                                        için tıklayın <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Numbers & Investors relations -->
                    <section class="tight-container-xxl mb-md">
                        <div class="row">
                            <div class="col-xl-8 col-md-7 col-12">
                                <div class="section-title mb-sm">Sayılarla Barbaros</div>

                                <div class="row numbers">
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="number-block" data-parallax="positionY" data-parallax-ratio-lg="200"
                                            data-parallax-ratio-md="0" data-parallax-ratio-sm="0"
                                            data-parallax-ratio="0">
                                            <h4 class="number-block__number-wrapper">
                                                <span class="number-block__number">50</span><span
                                                    class="number-block__suffix">+Yıl</span>
                                            </h4>
                                            <p class="number-block__text">
                                                Geçmişin Gücü Geleceğin Teknolojisi ile 50 Yılın Üstünde Birlikteyiz
                                            </p>
                                        </div>
                                        <!-- /.number-block -->
                                    </div>
                                    <!-- /.col-12 -->
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="number-block" data-parallax="positionY" data-parallax-ratio-lg="100"
                                            data-parallax-ratio-md="0" data-parallax-ratio-sm="0"
                                            data-parallax-ratio="0">
                                            <h4 class="number-block__number-wrapper">
                                                <span class="number-block__number">40</span><span
                                                    class="number-block__suffix">Şirket</span>
                                            </h4>
                                            <p class="number-block__text">
                                                Yeni Yapılanmayla Yarınlara 40 şirketimiz ile birlikte devam ediyoruz.
                                            </p>
                                        </div>
                                        <!-- /.number-block -->
                                    </div>
                                    <!-- /.col-12 -->
                                    <div class="col-xl-3 col-sm-6 col-12" data-parallax="positionY"
                                        data-parallax-ratio-lg="50" data-parallax-ratio-md="0"
                                        data-parallax-ratio-sm="0" data-parallax-ratio="0">
                                        <div class="number-block">
                                            <h4 class="number-block__number-wrapper">
                                                <span class="number-block__number">10</span><span
                                                    class="number-block__suffix">Bin Çalışan</span>
                                            </h4>
                                            <p class="number-block__text">
                                                Profesyonel ve Güçlü Ekibimizle Daha iyi ve kaliteli üretim ağına
                                                sahibiz.
                                            </p>
                                        </div>
                                        <!-- /.number-block -->
                                    </div>
                                    <!-- /.col-12 -->
                                    <div class="col-xl-3 col-sm-6 col-12" data-parallax="positionY"
                                        data-parallax-ratio-lg="-70" data-parallax-ratio-md="0"
                                        data-parallax-ratio-sm="0" data-parallax-ratio="0">
                                        <div class="number-block">
                                            <h4 class="number-block__number-wrapper">
                                                <span class="number-block__number">10</span><span
                                                    class="number-block__suffix">Milyar Ciro</span>
                                            </h4>
                                            <p class="number-block__text">
                                                En kaliteli ürün ve hizmet üretimini gerçekleştirerek, tüm paydaşlarımız
                                                için değer yaratıyoruz.
                                            </p>
                                        </div>
                                        <!-- /.number-block -->
                                    </div>
                                    <!-- /.col-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-12 -->

                            <div class="col-xl-4 col-md-5 col-12">
                                <div class="investors-relations">
                                    <h4 class="investors-relations__title">Kurumsal</h4>
                                    <a href="kurumsal" class="investors-relations__block">
                                        <h6 class="investors-relations__block__title">
                                            Hakkımızda
                                        </h6>
                                        <p class="investors-relations__block__text">
                                            1971 yılında ÖZER TİCARET olarak Barbaros Özer’in babası İsmet Özer
                                            tarafından ticari faaliyetlerine başlamıştır.
                                        </p>
                                    </a>
                                    <a href="kurumsal" class="investors-relations__block">
                                        <h6 class="investors-relations__block__title">
                                            Kalite Politikamız
                                        </h6>
                                        <p class="investors-relations__block__text">
                                            Barbaros Motor Tarım Makineleri imalatında,yeni marka, Tasarım ve Patentleri
                                            ile gelişerek büyüyen, güncel teknolojileri kullanarak, müşteri
                                            beklentilerini karşılayan...
                                        </p>
                                    </a>
                                    <a href="hakkimizda" class="investors-relations__btn">Tümünü
                                        görmek için tıklayın</a>
                                </div>
                            </div>
                            <!-- /.col-12 -->
                        </div>
                    </section>

                    <!-- Quote -->
                    <section class="tight-container-xxl mb-md">
                        <div class="row">
                            <div class="col-lg-10 col-12">
                                <div id="landing-heading-sec">
                                    <h2 id="landing-section-heaing-hiden">BARBAROS</h2>
                                    <h1 id="landing-section-heading">MARKALAR</h1>

                                </div>

                            </div>
                            <div class="logoslider">
                                <div class="logoslide-track">
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/bartech.png" alt="brand-number-one-1" height="40" width="150"
                                            alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/farmate.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/Yaman_Tillers.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/yongjia.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/bartechplus.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/maruyama.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/pferd_logo.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/qinli.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/knc_logo.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/taro.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/topso.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/yaprak-logo.png" height="40" width="150" alt="" />
                                    </div>
                                    <div class="logoslide">
                                        <img src="<?php echo $temayolu; ?>/marka/trimmy_logo.png" height="40" width="150" alt="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.main__content -->
            </div>
            <!-- /.main__inner -->
            <!-- Include footer -->
       <?php include(TEMPLATEPATH."/footer.php"); ?>