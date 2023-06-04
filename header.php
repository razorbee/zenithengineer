<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/logo7.png" alt="" />
    </div>
<header class="main-header main-header--one  clearfix">
            <div class="main-header--one__wrapper">
                <div class="auto-container">
                    <div class="main-header--one__inner">

                        <div class="main-header--one__left">
                            <div class="logo">
                                <a href="index.php" style="background: rgb(255 255 255 / 90%); padding:10px"><img src="assets/images/logo6.png" alt="" width="200"/></a>
                            </div>
                        </div>


                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <div class="stricky-one-logo">
                                    <div class="logo"  style="background: rgb(255 255 255 / 90%);">
                                        <a href="index.php" style="padding:10px"><img src="assets/images/logo6.png" alt="" width="200"/></a>
                                    </div>
                                </div>
 
                                <div class="main-header--one__middle">
                                    <ul class="main-menu__list">
                                        <li  <?= ($activePage == 'index') ? 'active':''; ?>">
                                            <a class="mobile-nav__toggler" href="index.php">Home</a>
                                            
                                        </li>
                                        <li class=" <?= ($activePage == 'index') ? 'active':''; ?>">
                                            <a  class="mobile-nav__toggler"  href="index.php#aboutus">About</a></li>

                                        <li class="dropdown " <?= ($activePage == 'index') ? 'active':''; ?>>
                                            <a class="mobile-nav__toggler"  href="index.php#product">Product</a>
                                            
                                        </li>
                                        <li class="dropdown  <?= ($activePage == 'decor') ? 'active':''; ?>">
                                            <a class="mobile-nav__toggler"  href="decor.php">Decor</a>
                                            
                                        </li>
                                        <li class="dropdown  <?= ($activePage == 'application') ? 'active':''; ?>">
                                            <a class="mobile-nav__toggler"  href="application.php">Application</a>
                                            
                                        </li>
                                        <li class="dropdown  <?= ($activePage == 'specification') ? 'active':''; ?>">
                                            <a class="mobile-nav__toggler" href="specification.php">Specification</a>
                                            
                                        </li>
                                        <li class="dropdown  <?= ($activePage == 'index') ? 'active':''; ?>"><a class="mobile-nav__toggler"  href="index.php#contactus">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>


                        <div class="main-header--one__right clearfix">

                            


                            <div class="social-icon">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                </ul>
                            </div>

                           

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo6.png" style="background: white; padding: 10px;"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


        <!-- Hidden Navigation Bar -->
        
        <!-- End Hidden Bar -->