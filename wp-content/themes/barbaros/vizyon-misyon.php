<?php /*Template Name: Vizyon Misyon Sayfası */
 include(TEMPLATEPATH."/header.php");

 ?>

            
            <!-- Banner -->
            <section class="banner banner--normal">
                    <?php include(TEMPLATEPATH."/sidebar.php"); ?>
                <!-- /.banner__side -->

                <div class="banner__inner">
                    <div class="banner__content">
                        <h6 class="banner__subtitle">Kurumsal</h6>
                        <h1 class="banner__title">Vizyon & Misyon</h1>
                    </div>
                    <div class="banner__img-wrapper3">

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

                    <section class="mb-md" style='display:none'>
                        <div class="text-block">
                            
                        </div>
                    </section>
                    <div class="row text-center mb-md">
                        <div class="col-12">
                            <div class="quote-block icon-quote">
                                <span class="quote-block__quote">“</span><?php echo $ayar['viz_baslik']; ?> <span class="quote-block__quote">”</span> 
                            </div>
                        </div>
                    </div>
                    <section id="intro-section" >

                        <article id="color">
                            <img class="services-img" src="<?php echo $ayar['vm_tab']['vizyon_gorsel']['url']; ?>"/>
                        <h2 id="color-title"><?php echo $ayar['vm_tab']['vizyon_baslik']; ?></h1>
                        <p id="color-para">​<?php echo $ayar['vm_tab']['vizyon_aciklama']; ?></p>
                        </article>
             
                        <article id="color1">
                            <img class="services-img" src="<?php echo $ayar['vm_tab']['misyon_gorsel']['url']; ?>"/>
                            <h2 id="color-title"><?php echo $ayar['vm_tab']['misyon_baslik']; ?></h1>
                            <p id="color-para">​<?php echo $ayar['vm_tab']['misyon_aciklama']; ?></p>
                             </article>
            
                    </section>
                    
                    <div class="row mb-sm">
                        <div class="col-md-4 col-12">
                            <div class="heading-block">
                                <h2 class="heading-block__title"><?php echo $ayar['vm_tab']['deger_baslik']; ?></h2>
                            </div>
                            <div class="img-block-wrapper" style='display:none'>
                                <div class="img-block lazy-loading" style="padding-bottom: 100%;">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="./images/11.jpg" alt="">
                                    <span class="lazy-loading__loader"></span>
                                    <noscript><img src="images/spacer.gif"></noscript>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="text-block has-heading-before">
                                    <ul class="text-block__list">
                                    <?php echo $ayar['vm_tab']['deger_aciklama'];?>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.main__content -->
            </div>
            <!-- /.main__inner -->


 <?php  include(TEMPLATEPATH."/footer.php"); ?>