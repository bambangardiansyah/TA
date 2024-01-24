<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Blog</title>
    <link rel="stylesheet" href="css/single.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/footer.css">


</head>
<body>
<header id="header" class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand logo" href="/">
                    <img src="assets/images/artdex.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fas fa-bars"></i></span></button>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">BERANDA</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#portfolio">JELAJAHI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#team">TENTANG KAMI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#pricing">PREMIUM</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="/#contact">KONTAK</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="login">MASUK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<div class="wrapper">
    <div class="pict">
        <img src="assets/images/portfolio/img-10.jpg" alt="">
    </div>
    <div class="desc">
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="4" viewBox="0 0 128 512"><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#">Report</a>
            <a href="#">Download</a>
        </div>
        </div>
        <h2>Princess Cat</h2>
        <img id="penerbit" src="assets/images/team/img-1.jpeg" alt="">
        <h3>Iwanda Amelia</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <svg class="like" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
        <span>15k</span>
    </div>
    <div class="comment">
        <h2>Comment Section</h2>
        <div class="user">
            <h3>Name</h3>
            <img src="assets/images/portfolio/img-10.jpg" alt="">
            
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="add-comment">
            <h2>Add Comment</h2>
            <textarea name="" placeholder="Type Something Here...." id="" cols="30" rows="10"></textarea>
            <button class="add" >Add</button>
        </div>
    </div>
</div>
<footer>
        <div class="artdex">
            <h1>ArtDex</h1>
        </div>
        <div class="garis"></div>
        <div class="descriptions">
            <div class="fc">
                <h4>ABOUT ARTDEX</h4>
                <p>The software program "ARTDEX" is a program that has a function to provide space for artists to create their portfolios to be enjoyed by the wider media and is expected to be a media sharing in terms of art.</p>
            </div>
            <div class="fc">
                <h4>QUICK LINK</h4>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/#portfolio">EXPLORE</a></li>
                    <li><a href="/#team">ABOUT US</a></li>
                    <li><a href="/#pricing">PREMIUM</a></li>
                    <li><a href="/#contact">CONTACT US</a></li>
            </div>
            <div class="fc">
                <h4>CONTACT</h4>             
                    <li><i class="fa-solid fa-phone"></i>+62 812-3053-0736</li>
                    <li><i class="fa-brands fa-instagram"></i>art_dex.io</li>
                    <li><i class="fa-regular fa-envelope"></i>artdexio.com</li>
            </div>
        </div>
    </footer>
<script src="assets/js/single.js"></script>
</body>
</html>