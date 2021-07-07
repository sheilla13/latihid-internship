<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Homepage | LatihID</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fontAwesome.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/hero-slider.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl-carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <!-- Desktop Navbar -->
    <div class="d-none d-md-block">
        <div class="wrap">
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="primary-nav-button" type="button">Menu</button>
                            <a href="#">
                                <div class="logo">
                                    <img src="<?php echo base_url('assets/img/logo.png') ?>" width="20" height="200" alt="Venue Logo">
                                </div>
                            </a>
                            <nav id="primary-nav" class="dropdown cf">
                                <ul class="dropdown menu">

                                    <li>
                                        <a href="#">Program</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">LatihID Modul</a></li>
                                            <li><a href="#">LatihID Talks</a></li>
                                            <li><a href="#">LatihID PETA</a></li>
                                            <li><a href="#">LatihID ExpertClass</a></li>
                                            <li><a href="#">LatihID MAJU</a></li>
                                            <li><a href="#">LatihID Mentoring</a></li>
                                            <li><a href="#">LatihID Academy</a></li>
                                            <li><a href="#">LatihID Coaching</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Modul Saya</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Progress Modul</a></li>
                                            <li><a href="#">Pembelian</a></li>
                                        </ul>
                                    </li>

                                    <li class='active'><a href="#">Artikel</a></li>

                                    <li><a href="#">Tentang Kami</a></li>

                                    <li><a href="#">Ayo Kolaborasi</a></li>
                                    
                                    <li>
                                        <a href="#">Bantuan</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Kontak Kami</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        
        <section class="banner" id="top" style="background-image: url(<?php echo base_url('assets/img/banner1.png') ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="banner-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                <h2 align="center">Kenapa memilih LatihID?</h2>
                        <div class="col-md-4" align="center" style="font-family: sans-serif;">
                        <div class="left-content">
                            <br> 
                            <img src="<?php echo base_url('assets/img/gbr1.svg') ?>" width="200" height="200" alt="Venue Logo">                    
                            <h4>Fokus pada UMKM</h4>
                            <p style="font-size:17px">Program-program LatihID berfokus untuk mengembangkan kualitas bisnis UMKM Indonesia.</p>
                            <br>
                            <img src="<?php echo base_url('assets/img/gbr2.svg') ?>" width="200" height="200" alt="Venue Logo">
                            <h4>Akses Kapan Saja</h4>
                            <p style="font-size:17px">Akses 24/7 untuk semua program pelatihan LatihID, tanpa batasan waktu.</p>
                        </div>
                    </div>

                    <div class="col-md-4" align="center" style="font-family: sans-serif;">
                        <div class="left-content">
                            <br>
                            <img src="<?php echo base_url('assets/img/gbr3.svg') ?>" width="200" height="200" alt="Venue Logo">                          
                            <h4>Bebas Akses Dimana Saja</h4>
                            <p style="font-size:17px">Program pelatihan LatihID dapat diakses dengan beragam perangkat teknologi di mana saja, tanpa batasan jarak atau tempat.</p>
                            <br>
                            <img src="<?php echo base_url('assets/img/gbr4.svg') ?>" width="200" height="200" alt="Venue Logo">
                            <h4>Kelas Gratis & Terjangkau</h4>
                            <p style="font-size:17px">Nikmati kelas gratis dan terjangkau untuk modul, webinar, dan program-program LatihID lainnya.</p>
                        </div>
                    </div>

                    <div class="col-md-4" align="center" style="font-family: sans-serif;">
                        <div class="left-content">
                            <br>  
                            <img src="<?php echo base_url('assets/img/gbr5.svg') ?>" width="200" height="200" alt="Venue Logo">                        
                            <h4>Akses Seumur Hidup</h4>
                            <p style="font-size:17px">Dapatkan akses program pelatihan LatihID seumur hidup, dengan hanya melakukan sekali login.</p>
                            <br>
                            <img src="<?php echo base_url('assets/img/gbr6.svg') ?>" width="200" height="200" alt="Venue Logo">
                            <h4>Konten yang Praktis</h4>
                            <p style="font-size:17px">Pelatihan praktis yang dapat langsung diterapkan di lapangan usaha.</p>
                        </div>
                    </div>

        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2 align="center">Modul LatihID</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">

                <?php $no = 0; foreach($modul as $row): 
					$harga = number_format($row->harga,2,',','.');
					?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="<?php echo base_url('assets/img/') . $row->foto; ; ?>" alt="">
                            </div>

                            <div class="down-content">
                                <h4><?php echo $row->nama; ?></h4>

                                <p><i class="fa fa-database"></i> <?php echo ucwords($row->kategori); ?></p>

                                <span><strong>Rp<?php echo $harga; ?></strong></span>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php endforeach; ?>
                    
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4" align="center">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="<?php echo base_url('assets/img/footer_logo.png') ?>" width="65" height="85" alt="Venue Logo">
                        </div>
                        <p>LatihID adalah suatu platform penyedia pelatihan gratis dan berkualitas untuk UMKM di Indonesia</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <div class="useful-links">
                        <div class="row">
                            <div class="col-xs-6">
                            <div class="footer-heading">
                                <h4>Menu</h4>
                            </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Beranda</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Modul</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Tentang Kami</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Hubungi Kami</a></li><br>
                                </ul>
                            </div>

                            <div class="col-xs-6">
                            <div class="footer-heading">
                                <h4>Info</h4>
                            </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Ayo Kolaborasi</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Kebijakan Privasi</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Syarat Penggunaan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>© 2021 Copyright LatihID</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>