<?php /*Template Name: İletişim Sayfası */
 include(TEMPLATEPATH."/header.php");?>

 <!-- Mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <svg class="burger" version="1.1" height="100" width="100" viewbox="0 0 100 100">
                        <path class="line line1" d="M 30,65 H 70"></path>
                        <path class="line line2" d="M 70,50 H 30 C 30,50 18.644068,50.320751 18.644068,36.016949 C 18.644068,21.712696 24.988973,6.5812347 38.79661,11.016949 C 52.604247,15.452663 46.423729,62.711864 46.423729,62.711864 L 50.423729,49.152542 L 50.423729,16.101695"></path>
                        <path class="line line3" d="M 30,35 H 70 C 70,35 80.084746,36.737688 80.084746,25.423729 C 80.084746,19.599612 75.882239,9.3123528 64.711864,13.559322 C 53.541489,17.806291 54.423729,62.711864 54.423729,62.711864 L 50.423729,49.152542 V 16.101695"></path>
                    </svg>
                    <svg class="x" version="1.1" height="100" width="100" viewbox="0 0 100 100">
                        <path class="line" d="M 34,32 L 66,68"></path>
                        <path class="line" d="M 66,32 L 34,68"></path>
                    </svg>
                </div>

                <!-- Header misc. -->
            </header>


        
            <div class="container main__inner">
                <div class="main__content has-banner-aside">
                    <div class="contacts d-flex">
                        <div class="contacts__content-wrapper flex-grow-1 row no-gutters">
                            <div class="col-lg-6 col-12 d-flex">
                                    <?php include(TEMPLATEPATH."/sidebar.php"); ?>

                                
                                <div class="contacts__map-wrapper">
                                    <div class="contacts__map" data-sticky="">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="contacts__content">
                                    <div class="contacts__form-trigger">
                                        <button class="btn btn--default btn--default--dark" data-trigger-modal="contact">Mesaj bırakmak için tıklayın</button>
                                    </div>
                                    
                                            <h1 class="addresses-title"> </h1>

                                            <div class="row no-gutters row--fix-v-spacing addresses-blocks">
                                                
                                                        <div class="col-sm-6 col-12">
                                                            <div class="address-block">
                                                                <h6 class="address-block__title">BARBAROS MOTOR MAK.SAN.İÇ VE DIŞ.TİC.LTD.ŞTİ.</h6>
                                                                <address class="address-block__address"><i id="ileticoncss"class="fa-solid fa-location-dot"></i>
                                                                    Yeni Mah. Sinop Cad. No:89 Gerze/Sinop
                                                                </address>
                                                                <ul class="address-block__actions">
                                                                    <li class="address-block__actions__item">
                                                                        <button class="address-block__actions__link  " data-show-on-map="[41.811916, 35.174422]">
                                                                            <i id="ileticoncss"class="fa-solid fa-location-crosshairs"></i> Haritada Göster
                                                                        </button>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-tel=""><i id="ileticoncss" class="fa-solid fa-phone"></i> 0 (368) 718 3301</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-fax=""><i id="ileticoncss"class="fa-solid fa-fax"></i>0 (368) 718 4587</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-email=""><i id="ileticoncss"class="fa-solid fa-envelope"></i>  info@barbarosmotor.com</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-website=""><i id="ileticoncss"class="fa-solid fa-address-card"></i>www.barbarosmotor.com</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-sm-6 col-12">
                                                            <div class="address-block">
                                                                <h6 class="address-block__title">Sinop OSB Fabrika</h6>
                                                                <address class="address-block__address"><i id="ileticoncss"class="fa-solid fa-location-dot"></i>
                                                                    Demircikoy OSB, Sehit Omer HalisdemirCad. No:5/1 57000 Merkez Sinop Turkey
                                                                </address>
                                                                <ul class="address-block__actions">
                                                                    <li class="address-block__actions__item">
                                                                        <button class="address-block__actions__link  " data-show-on-map="[41.928615, 35.079400]">
                                                                            <i id="ileticoncss"class="fa-solid fa-location-crosshairs"></i>  Haritada Göster
                                                                        </button>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-tel=""><i id="ileticoncss" class="fa-solid fa-phone"></i>0 (368) 777 0100</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-fax=""><i id="ileticoncss" class="fa-solid fa-fax"></i>0 (368) 718 4587</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-email=""><i id="ileticoncss" class="fa-solid fa-envelope"></i> info@barbarosmotor.com</a>
                                                                    </li>
                                                                    <li class="address-block__actions__item">
                                                                        <a href="#" class="address-block__actions__link " data-address-website=""><i id="ileticoncss" class="fa-solid fa-address-card"></i>www.barbarosmotor.com</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <section id="about-sec3">
                                                            <a href="https://www.instagram.com/barbarosmotor/?igshid=YmMyMTA2M2Y%3D"><img class="services-img" src="icon/instabarbaros.png"/></a>
                                                            <a href="https://www.youtube.com/c/BarbarosMotorcom"><img class="services-img" src="icon/youtubebarbaros.png"/></a>
                                                            <a href="https://twitter.com/barbarosmotor"><img class="services-img" src="icon/twitterbarbaros.png"/></a>
                                                            
                                                        <h1 id="color-title">Bizi Takip Edin</h1>
                                                        <p id="color-para">Sende Barbaros Motorun Sosyal Medya Hesaplarını Takip Et Yeniliklerden Haberdar Ol !</p>
                                                         </section>

                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



 <?php  include(TEMPLATEPATH."/footer.php");  ?>