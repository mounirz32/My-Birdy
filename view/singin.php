<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="http://localhost/mybirdybackend/view/css/singin.css">
   <title>Sign In || My Birdy</title>
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
   <div class="singin-div">
      <div class="singin-header">
         <h2>Signin</h2>
      </div>
      <form class="singin_form" action="userController/register" method="post">
         <label class="user_name">User Name</label>
         <input type="text" placeholder="User Name" name="user_name" class="input-username" required="required">
         <label class="email">Email</label>
         <input type="email" placeholder="Your Email" class="Email-input" name="email" required="required">
         <label class="password">Password</label>
         <input type="password" name="pass" id="" class="input-pass" placeholder="Enter Your Password" required="required">
         <button type="submit" class="Sing-btn">Sing In</button>
      </form>
   </div>
</body>
</html>