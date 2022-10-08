<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/20.png">


<!-- Site Title  -->
<title>TEAM20 Community</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
<link rel="stylesheet" href="assets/css/style-dark.css?ver=1930" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=1930">




</head>


    <body class="nk-body body-wider theme-dark mode-onepage">

	<div class="nk-wrap">
		<header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
		    <!-- Header @s -->
            <div class="header-main">
                <div class="header-container container">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <a href="index.php" class="logo-link">
                                <img class="logo-dark" src="images/20.png" srcset="images/20.png 2x" alt="logo">
                                <img class="logo-light" src="images/02.png" srcset="images/02.png 2x" alt="logo">
                            </a>


                        </div>

                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>

                        <!-- Menu @s -->
                        <div class="header-navbar header-navbar-s1">
                            <nav class="header-menu" id="example-menu-04">
                                
                                <ul class="menu-btns animated" data-animate="fadeInDown" data-delay=".85">
                                    <li><a href="index.php" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme btn-round"><span>Back</span></a></li>
                                    <!-- <li><a href="#" data-toggle="modal" data-target="#login-popup" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme btn-round"><span>Try App</span></a></li> -->
                                </ul>
                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>                                                
                </div>
            </div><!-- .header-main @e -->
            <!-- Banner @s -->

<main class="nk-pages">
<!-- // -->
<section class="section bg-theme tc-light" id="blog">
                <div class="container">
                    <div class="section-head text-center wide-auto-sm">
                        <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="news">ICO Crypto News</h2>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block nk-block-blog">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".2">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='1'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                        <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php echo $data['tag'] ?></a></h4>
                                        <p><?php echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".3">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='2'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php  echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php  echo $data['tag'] ?></a></h4>
                                        <p><?php  echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".4">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='3'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php  echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php  echo $data['tag'] ?></a></h4>
                                        <p><?php  echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".5">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='4'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php  echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php  echo $data['tag'] ?></a></h4>
                                        <p><?php  echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".6">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='5'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php  echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php  echo $data['tag'] ?></a></h4>
                                        <p><?php  echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            <div class="col-lg-4 col-sm-9">
                                <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".7">
                                <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "SELECT * FROM crud_icn WHERE id='6'");
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="blog-photo">
                                    <?php echo "<img src='admin/gambar/" . $data['gambar'] . "'>"; ?>
                                    </div>
                                    <div class="blog-text">
                                        <ul class="blog-meta">
                                            <li><a href="#"><?php  echo $data['tanggal'] ?></a></li>
                                            <li><a href="#"><?php  echo $data['name'] ?></a></li>
                                        </ul>
                                        <h4 class="title title-sm"><a href="#"><?php  echo $data['tag'] ?></a></h4>
                                        <p><?php  echo $data['keterangan'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div><!-- .blog -->
                            </div><!-- .col -->
                            
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                    
                </div>
            </section>
            <section class="section section-contact bg-white" id="contact">
                <div class="container">
                    <div class="section-head text-center wide-auto-sm">
                        <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="Contact">Contact TEAM20 Community</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Any question? Reach out to us and we’ll get back to you shortly.</p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block block-contact">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8 col-lg-10">
                                <ul class="contact-list contact-list-s1 flex-wrap flex-md-nowrap pdb-l">
                                    <!-- <li class="animated" data-animate="fadeInUp" data-delay=".3">
                                        <em class="contact-icon fas fa-phone"></em>
                                        <div class="contact-text">
                                            <span>+44 0123 4567</span>
                                        </div>
                                    </li> -->
                                    <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                        <em class="social-icon fab fa-twitter"></em>
                                        <div class="contact-text">
                                            <span>Join us on Twitther</span>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".4">
                                        <em class="contact-icon fas fa-envelope"></em>
                                        <div class="contact-text">
                                            <span>cs@team20fund.com</span>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                        <em class="social-icon fab fa-telegram"></em>
                                        <div class="contact-text">
                                            <span>Join us on Telegram</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                            <div class="col-xl-8 col-lg-10">
                                <div class="contact-wrap p-0">
                                    <form id="contact-form-01" class="contact-form nk-form-submit" action="form/contact.php" method="post">
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".6">
                                            <input name="contact-name" type="text" class="input-line required">
                                            <label class="field-label field-label-line">Your Name</label>
                                        </div>
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".7">
                                            <input name="contact-email" type="email" class="input-line input-line-center required email">
                                            <label class="field-label field-label-line">Your Email</label>
                                        </div>
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".8">
                                            <textarea name="contact-message" class="input-line input-line-center input-textarea required"></textarea>
                                            <label class="field-label field-label-line">Your Message</label>
                                        </div>
                                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                        <div class="field-wrap animated" data-animate="fadeInUp" data-delay=".9">
                                            <button type="submit" class="btn btn-round btn-lg btn-grad">Submit</button>
                                            <div class="form-results"></div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <!-- // -->
        </main>
        <footer class="nk-footer bg-theme-alt section-connect">
            <div class="section section-m pb-0 tc-light ov-h">
                <div class="container py-4">
                    <!-- Block @s -->
                    <div class="nk-block pb-lg-5">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6 col-md-9">
                                <div class="wide-auto-sm section-head section-head-sm pdb-r">
                                    <h4 class="title title-md animated" data-animate="fadeInUp" data-delay=".1">Don't miss out, Stay updated</h4>
                                </div>
                                <form action="form/subscribe.php" class="nk-form-submit" method="post">
                                    <div class="field-inline field-inline-round field-inline-s2-sm bg-theme-dark-alt shadow-soft animated" data-animate="fadeInUp" data-delay=".2">
                                        <div class="field-wrap">
                                            <input class="input-solid input-solid-md required email" type="text" name="contact-email" placeholder="Enter your email">
                                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                        </div>
                                        <div class="submit-wrap">
                                            <button class="btn btn-md btn-round btn-grad h-100">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="form-results"></div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .block @e -->
                </div>
                <div class="nk-ovm shape-contain shape-center-top shape-p"></div>
            </div>
            <div class="section section-footer section-s tc-light bg-transparent">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block block-footer">
                        <div class="row">
                            <div class="col">
                                <div class="wgs wgs-text text-center mb-3">
                                    <ul class="social pdb-m justify-content-center">
                                        <!-- <li><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li> -->
                                        <li><a href="https://twitter.com/team20fund"><em class="social-icon fab fa-twitter"></em></a></li>
                                        <li><a href="https://t.me/+L1jdtRMxVBRiNTE1"><em class="social-icon fab fa-telegram"></em></a></li>
                                        <li><a href="https://discord.gg/s8nsuXbmPP"><em class="social-icon fab fa-discord"></em></a></li>
                                        <!-- <li><a href="#"><em class="social-icon fab fa-bitcoin"></em></a></li> -->
                                        <li><a href="https://medium.com/"><em class="social-icon fab fa-medium-m"></em></a></li>
                                        
                                    </ul>
                                    <div class="copyright-text copyright-text-s3 pdt-m">
                                        <p><span class="d-sm-block">Copyright &copy; 2022, Cryptocurrency &nbsp; <a href="./">TEAM20 Community</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .block @e -->
                </div>
            </div>
        </footer>
	</div>
	
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="assets/js/jquery.bundle.js?ver=1930"></script>
	<script src="assets/js/scripts.js?ver=1930"></script>
	<script src="assets/js/charts.js"></script>
</body>

</html>