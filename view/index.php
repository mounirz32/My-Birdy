<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="http://localhost/mybirdybackend/view/css/main.css">
   <title>Document</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
         <a href="index.html" class="navbar-brand link"><h4 class="logo"><span class="span-logo">My Birdy</span></h4></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
         </button>
         
         <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a href="http://localhost/mybirdybackend/home" class="nav-link">Home</a>
               </li>
               <li class="nav-item">
                  <a href="http://localhost/mybirdybackend/about" class="nav-link">About</a>
               </li>
               <li class="nav-item">
                  <a href="http://localhost/mybirdybackend/contactController" class="nav-link">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <section class="text-light p-5 text-center text-sm-start head">
      <div class="container">
         <div class="img-btn">
            <div class="container">
               <h1 class="header-title">My Birdy the tool
                    <span class="sub-title">that you need</span></h1>
               <p class="para-title">
                  make your breeding 
                  more profetionnal
               </p>
               <a href="http://localhost/mybirdybackend/UserController"><button class="btn btn-success btn-md ">Sing In</button></a>
               <a href="http://localhost/mybirdybackend/LoginController"><button class="btn btn-success btn-md ms-1">Login</button></a>
            </div>
            <img class="img-header" src="http://localhost/mybirdybackend/view/img/header_img.png" alt="">
         </div>
      </div>
   </section>
   <section class="functionalty">
      <div class="text-header">
         <h1>Our Functionalty</h1>
      </div>
      <div class="container carts">
         <div class="func">
            <a href=""><i class="fas fa-chart-line"></i></a>
            <h3>Tracker</h3>
         </div>
         <div class="func">
            <a href="#"><i class="fas fa-seedling"></i></a>
            <h3>Nutrution</h3>
         </div>
         <div class="func">
            <a href="#"><i class="fas fa-heartbeat"></i></a>
            <h3>Health</h3>
         </div>
      </div>
   </section>
   <section class="newsletter">
      <div class="container actu">
         <div class="news-letter">
            <h1 class="news-title">Our News Letter</h1>
         </div>
         <div class="news-input">
            <input type="text" name="newsletter" placeholder="Your Email" class="input-letter">
            <button type="submit" class="btn btn-primary">Subscribe</button>
         </div>
      </div>
   </section>
   <section class="main-section">
      <div class="container section">
         <h3 class="quote">“The bird who dares to fall is the bird who learns to fly.”</h3>
      </div>
      <div class="quote-img">
         <img src="http://localhost/mybirdybackend/view/img/header_img-2.png" alt="">
      </div>
   </section>
   <footer class="main-footer bg-dark">
      <div class="container content">
         <nav class="footer-nav">
            <ul class="nav-items">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
         </nav>
         <div class="footer-logo">
            <a href="index.html" class="navbar-brand link"><h4 class="main-logo">My Birdy</h4></a>
         </div>
         <div class="social-media">
            <i class="fab fa-instagram icon"></i>
            <i class="fab fa-facebook-square icons"></i>
         </div>
      </div>
   </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>