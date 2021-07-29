<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="http://localhost/mybirdybackend/view/css/contact.css">
   <title>Document</title>
</head>
<body>
   <header class="main-header">
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
   </header>
   <section class="form-contact">
      <div class="title-contact">
         <h1 class="contact-header">
            Contact Us
         </h1>
      </div>
      <div class="container-1">
         <form class="form-contact" action="" method="">
            <label for="" class="first">First Name</label>
            <input class="input-first" type="text" name="first-name" placeholder="Your first name">
            <label for="" class="last">Last Name</label>
            <input class="input-last" type="text" name="last-name" placeholder="Your last name">
            <label for="" class="email">Email</label>
            <input class="email-input" type="email" name="email" placeholder="Your Email">
            <label class="sujet">Your Issue</label>
            <input type="text" class="sujet-input" placeholder="Enter Your Issue">
            <label for="" class="msg">Message</label>
            <input class="msg-input" type="text" name="message" placeholder="Enter Your Message">
            <input class="btn" type="submit" value="Send">
         </form>
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