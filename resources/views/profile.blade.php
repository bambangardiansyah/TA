@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>ArtDex</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="...">



    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <style>
        nav{
            background-color: black;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar-nav">
    
     <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div> -->
    <!-- // Preloader -->
    

    <!-- ====== Header ====== -->
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
                        <li class="nav-item active"><a class="nav-link" href="#home">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">JELAJAHI</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">TENTANG KAMI</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">PREMIUM</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">KONTAK</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="login">MASUK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
  
    <div class="container">
  <div class="svg-container">
    <!-- SVG Anda di sini -->
    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
  </div>
  <p>Check Out</p>
</div>  

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
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    </a>
                </div>
                
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-10.jpg)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-3.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-4.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-5.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung ">
                <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-6.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix  patung">
                <a href="sblog">   
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-7.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung">
                    <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-8.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    </a>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix patung">
                    <a href="sblog">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-9.png)">
                    <h3 class="ttt">Title</h3>
                    <p class="ppp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    </a>
                </div>
                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>

     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
