<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    
<nav class="navbar-alt">
           
           <div> 
                   <a href="latest.php">Latest</a>
                   <a href="#">Staff Picks</a>
                   <a href="album.php">Albums</a>
           </div>
   
           
           <h1 class="logo">
                  <a href="index.php">VinylsOnline</a>
              </h1>
           
   
   
              <div> 
                      <a href="search.php">Search</a>
                      <a href="sell.php">Sell</a>
                      <a href="login.php">Account</a>
                      
              </div>
       
       </nav>
       
    <!-- Login Section -->
    <section class="login-form">

    <!-- Opening Information -->
    <div class="split left">
    <img src="elements/pages/login.jpg" class="login-image">
    </div>

    <!-- Imaghe -->
    <div class="split right">
    <h2 class="login-header">Your Account</h2>
           
        <form action="php/checkLogin.php" method="post" class="registerForm">
        <input type="email" name="Email" placeholder="Email" required>
       <input type="password" name="Password" placeholder="Password" required>
       <input type="submit" name="LoginBtn" value="Login to Account">
    </form>

    <!-- IF User doesm't have a Account -->
    <a href="register.php" class="sign-up-link">Don't have an Account?,Sign Up</a>
    </div>

    </section>

</body>
</html>