<?php

include("./class/function.php");

$obj = new Clint_Side;

// $display_product = $obj->display_product_public();

session_start();

?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <?php include_once("./includes/head.php") ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <?php include_once("./includes/navbar.php") ?>
        <div class="main">
            <section class="module bg-dark-60 about-page-header" data-background="https://wallpaperaccess.com/full/4348623.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">About</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="font-alt">We’re a digital creative agency</h5><br />
                            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="font-alt"><span class="icon-tools-2"></span> Development
                            </h6>
                            <div class="progress">
                                <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                            </div>
                            <h6 class="font-alt"><span class="icon-strategy"></span> Branding
                            </h6>
                            <div class="progress">
                                <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                            </div>
                            <h6 class="font-alt"><span class="icon-target"></span> Marketing
                            </h6>
                            <div class="progress">
                                <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                            </div>
                            <h6 class="font-alt"><span class="icon-camera"></span> Photography
                            </h6>
                            <div class="progress">
                                <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Meet Our Team</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                            <div class="team-item">
                                <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo" />
                                    <div class="team-detail">
                                        <h5 class="font-alt">Hi all</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                        <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Jim Stone</div>
                                    <div class="team-role">Art Director</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                            <div class="team-item">
                                <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo" />
                                    <div class="team-detail">
                                        <h5 class="font-alt">Good day</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                        <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Andy River</div>
                                    <div class="team-role">Creative director</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                            <div class="team-item">
                                <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo" />
                                    <div class="team-detail">
                                        <h5 class="font-alt">Hello</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                        <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Adele Snow</div>
                                    <div class="team-role">Account manager</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                            <div class="team-item">
                                <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo" />
                                    <div class="team-detail">
                                        <h5 class="font-alt">Yes, it's me</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                        <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Dylan Woods</div>
                                    <div class="team-role">Developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module module-video bg-dark-30" data-background="https://wallpaperaccess.com/full/4348626.jpg" style="background-attachment:fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="module-title font-alt align-left">Our office</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="font-serif">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p class="font-serif">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                        </div>
                        <div class="col-sm-3">
                            <p class="font-serif">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=UPAr2cSUcFw', containment:'.module-video', startAt:0, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div> -->
                <!-- <div class="video-controls-box">
                    <div class="container">
                        <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
                    </div>
                </div> -->
            </section>
            <section class="module" id="alt-features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Our advantages</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                            <div class="alt-services-image align-center"><img src="https://i.redd.it/jj2ufv0qoyo91.jpg" alt="Feature Image"></div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                                <h3 class="alt-features-title font-alt">Branding</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                                <h3 class="alt-features-title font-alt">Development</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-target"></span></div>
                                <h3 class="alt-features-title font-alt">Marketing</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-tools"></span></div>
                                <h3 class="alt-features-title font-alt">Design</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-camera"></span></div>
                                <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                                <h3 class="alt-features-title font-alt">Mobile</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                                <h3 class="alt-features-title font-alt">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                            <div class="alt-features-item">
                                <div class="alt-features-icon"><span class="icon-basket"></span></div>
                                <h3 class="alt-features-title font-alt">Shop</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="module-small bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">About Titan</h5>
                                <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                                <p>Email:<a href="#">somecompany@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Recent Comments</h5>
                                <ul class="icon-list">
                                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Blog Categories</h5>
                                <ul class="icon-list">
                                    <li><a href="#">Photography - 7</a></li>
                                    <li><a href="#">Web Design - 3</a></li>
                                    <li><a href="#">Illustration - 12</a></li>
                                    <li><a href="#">Marketing - 1</a></li>
                                    <li><a href="#">Wordpress - 16</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Popular Posts</h5>
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail" /></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                            <div class="widget-posts-meta">23 january</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail" /></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                            <div class="widget-posts-meta">15 February</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider-d">
            <footer class="footer bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>