@extends('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous">
</head>
<body>
<div class="container2">
    <div class="form-container2">
        <!-- Formulir Anda di sini -->
          <form action="register" method="post">
        <h3>Masuk</h3>
        <div class="inputan">
            <!-- <label for="Email">Email</label> -->
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="inputan">
            <!-- <label for="Password">Password</label> -->
            <input type="password" name="pass" id="pass" placeholder="Password">
        </div>
        <button type="submit">Submit</button>
        <p>Belum memiliki akun? <a href="register">Daftar disini</a></p>
    </form>
    </div>
</div>
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