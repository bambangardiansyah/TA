<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesign.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="images/icon.png" alt="Logo-License">
            <li><h3>RetGoo License Management</h3>
            <p>Bussiness Automation</p></li>
        </div>
        <ul class="navlist">
            <li class="dropdown">
                <a href="#" class="dropbtn"><span id="spanlang">Language</span> <i class='bx bx-chevron-down'></i></a>
                <div class="dropdown-content">
                    <a href="#" onclick="changeLanguage('id')" data-lang="id">Bahasa Indonesia</a>
                    <a href="#" onclick="changeLanguage('en')" data-lang="en" class="active">English</a>
                </div>
            </li>
        </ul>
    </header>

    
    <section class="login" id="login">
        <div class="login-content">
            <h2 id="h2lang">Login your account</h2>
            <p ><span id="plang">Doesn't have an account yet?</span> <a href="/register"><span id="reglang">Register</span></a></p>
            <div class="form-input">
                <form action="/" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="email" name="email" placeholder="Email" required autofocus><br>
                    <input type="password" name="password" id="inputPass" placeholder="Password" required><br>
                    <a href="/"><button id="loglang">LOGIN</button></a>
                </form>
            </div>
            <div class="continue">
                <hr>
                    <span id="orlang">Or Continue With</span>
                <hr>
            </div>
           <div class="agoogle"><a href="#"><img src="images/googlesign.png" alt="Google-Img"><span>Google</span></a></div>
        </div>

        <div class="login-img">
            <img src="images/laptopsign.png" alt="laptop">
        </div>
    </section>

    <script src="js/sign.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Featherinest\resources\views/register.blade.php ENDPATH**/ ?>