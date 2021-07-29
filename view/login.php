<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/85b095fcc2.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="http://localhost/mybirdybackend/view/css/Login.css">
   <title>Login || My Birdy</title>
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
   <form class="login_form" action="LoginController/login" method="POST">
      <div class="login-header">
         <h2>Login</h2>
      </div>
      <label class="username">User Name</label>
      <input class="input_user" type="text" name="user_name" placeholder="User Name" required="required">
      <label class="password">PassWord</label>
      <input class="input_password" type="password" name="password" placeholder="Password" required="required">
      <input class="btn" type="submit" value="Login" name="submit">
   </form>
</body>
</html>