<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Home-Picture</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<style>
    nav{
        background-color: black;
    }
</style>
<header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img src="assets/images/artdex.png" alt="logo">
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">JELAJAHI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">TENTANG KAMI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">PREMIUM</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="/">KONTAK</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="/">MASUK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
<section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <!-- <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                      
                    </div>
                </div>
            </div> -->
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <ul>
                            <li class="filter" class="active" data-filter="all">ALL</li>
                            <li class="filter" data-filter=".rupa">2D</li>
                            <li class="filter" data-filter=".patung">3D</li>
                        </ul>
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix abstrak rupa">
                    <a href="sblog"></a>
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-1.png)">
                    </div>
                    </a>
                </div>
                
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-2.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-3.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-4.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-5.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-6.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix  patung">
                <a href="sblog">   
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-7.png)">
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung">
                    <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-8.png)">
                    </div>
                    </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung">
                    <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-9.png)">
                    </div>
                    </a>
                </div>
                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script> -->
</body>
</html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup htdoc xampp\Featherinest\resources\views/homepict.blade.php ENDPATH**/ ?>