<?php /*Template Name: Ekibimiz Sayfası */
 include(TEMPLATEPATH."/header.php");

 ?>

           
            <!-- Banner -->
            <section class="banner banner--normal">
                    <?php include(TEMPLATEPATH."/sidebar.php"); ?>
                <!-- /.banner__side -->

                <div class="banner__inner">
                    <div class="banner__content">
                        <h6 class="banner__subtitle">Kurumsal</h6>
                        <h1 class="banner__title">Ekibimiz</h1>
                    </div>
                    <div class="banner__img-wrapper4">
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

                    <section class="mb-md" style='display:none'>
                        <div class="text-block">

                        </div>
                    </section>


                    <section id="pro-container-sec">
                        <div class="row text-center mb-md" >
                            <div class="col-12">
                                <div class="quote-block icon-quote">
                                    <span class="quote-block__quote">“</span><?php echo $ayar['ekip_baslik']; ?><span class="quote-block__quote">”</span>
                                </div>
                            </div>
                        </div>
                        <section id="teams">

                            <div>
                                <h1 id="teams-heading">Profesyonel</h1>
                                <h2 id="teams-hiden-heading">Ekibimiz</h2>
                               
                            </div>
                        </section>
                        <section id="professionals-img-sec">
                            <?php foreach ($ayar['ekip_gorsel'] as $ekip){ ?>
                            <article id="img-blog-card">
                                <div id="blog-img-sec">
                                    <img class="blog-img" src="<?php echo $ekip['ekip_acord1']['kisi1_img']['url']; ?>" alt="photo" />
                                </div>
                                <div id="blog-img-text">
                                    <h2 class="blog-heading"><?php echo $ekip['ekip_acord1']['kisi1_isim']; ?></h2>
                                    <p class="job-title"><?php echo $ekip['ekip_acord1']['kisi1_unvan']; ?></p>
                                </div>
                                <div id="social-icon-blog">
                                    <a class="social-link" href="<?php echo $ekip['ekip_acord1']['kisi1_facebook'];?>">
                                        <img class="icon" src="<?php echo $temayolu; ?>/icon/facebookekip.png" alt="facebook-logo" />
                                    </a>
                                    <a class="social-link" href="<?php echo $ekip['ekip_acord1']['kisi1_twitter'];?>">
                                        <img class="icon" src="<?php echo $temayolu; ?>/icon/twitterekip.png" alt="twitter-logo" />
                                    </a>
                                    <a class="social-link" href="<?php echo $ekip['ekip_acord1']['kisi1_linkedin'];?>">
                                        <img class="icon" src="<?php echo $temayolu; ?>/icon/linkedinekip.png" alt="linkedin-logo" />
                                    </a>
                                </div>
                            </article>
                        <?php } ?>
                          






















                        </section>

                    </section>

                </div>
                <!-- /.main__content -->
            </div>
            <!-- /.main__inner -->
 <?php  include(TEMPLATEPATH."/footer.php");  ?>