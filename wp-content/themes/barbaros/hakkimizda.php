<?php /*Template Name: Hakkımızda Sayfası */
     include(TEMPLATEPATH."/header.php");

?>





            <!-- Banner -->
            <section class="banner banner--normal">
                 <?php include(TEMPLATEPATH."/sidebar.php"); ?>
                <!-- /.banner__side -->

                <div class="banner__inner">
                    <div class="banner__content">
                        <h6 class="banner__subtitle">Kurumsal</h6>
                        <h1 class="banner__title">Hakkımızda</h1>
                    </div>
                    <div class="banner__img-wrapper1">
                        <!-- <img src="./banner/Hakkmızdaa1.jpg"
                            data-src="./banner/Hakkmızdaa1.jpg" alt="Sayılarla barbaros"
                            class="banner__img">
                        <span class="lazy-loading__loader"></span>
                        <noscript><img src="./banner/Hakkmızdaa1.jpg"></noscript> -->
                    </div>
                </div>
            </section>
            <!-- Inner body content wrapper -->
            <div class="container main__inner main__inner--has-aside light-grey-bg">

                <!-- Page inner sidebar -->
                <aside class="sidebar sidebar--accent-bg">
                    <div class="sidebar__content" data-sticky="">
                        <nav class="sidebar__nav">
                            <ul class="sidebar__nav__list">


                                <li class="sidebar__nav__item ">
                                    <a href="hakkimizda" class="sidebar__nav__link">Hakkımızda</a>

                                </li>

                                <li class="sidebar__nav__item ">
                                    <a href="kalitepolitikamiz" class="sidebar__nav__link">Kalite Politikamız</a>

                                </li>

                                <li class="sidebar__nav__item ">
                                    <a href="vizyonmisyon" class="sidebar__nav__link">Vizyon & Misyon</a>

                                </li>

                                <li class="sidebar__nav__item has-children">
                                    <a href="ekibimiz" class="sidebar__nav__link">Profesyonel Ekibimiz</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="main__content">


                    
                    <section class="">
                            

                                    <div class="row text-center mb-md" >
                                        <div class="col-12">
                                            <div class="quote-block icon-quote">
                                                <span class="quote-block__quote">“</span><?php echo $ayar['hakkimizda_giris']; ?><span class="quote-block__quote">”</span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row mb-md" >
                                        <div class="col-md-6 col-12 order-md-0">
                                            <div class="text-block">
                                                <h5 class="text-block__title" ><?php echo $ayar['hakkimizda_baslik2']; ?></h5>
                                                <p class="text-block__text">
                                                    <p> ​<?php echo $ayar['hakkimizda_aciklama']; ?><br>
                                                    </p>
                                                
                                            </div>
                                            </div><div class="col-md-6 order-md-1 col-12">
                                            <div  class="img-block-wrapper">
                                                <div class="img-block lazy-loading" style="padding-bottom: 66%;">
                                                    <img src="<?php echo $ayar['hakkimizda_resim']['url']; ?>" data-src="<?php echo $ayar['hakkimizda_resim']['url']; ?>" alt="Barbaros Motor" data-parallax="scale" data-parallax-ratio=".3">
                                                    <span class="lazy-loading__loader"></span>
                                                    <noscript><img src="./site/hakkimiz.jpg"></noscript>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row text-center mb-md" style="display:none">
                                        <div class="col-12">
                                            <div class="quote-block icon-quote">
                                                <span class="quote-block__quote">“</span><span class="quote-block__quote">”</span>
                                            </div>
                                        </div>
                                    </div>
                                       
                    </section>

                </div>
                <!-- /.main__content -->
            </div>
            <!-- /.main__inner -->
 <?php  include(TEMPLATEPATH."/footer.php"); ?>