<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <img src="elements/pages/register.jpg" class="login-image">
    </div>

    <!-- Imaghe -->
    <div class="split right">
    
    <h2 class="login-header">Register Account</h2>
    
    <!-- WORKS - 17.02.22 - Error that occured was Photo Adding to DB that didn't have a Photo Field -->       
    <form action="php/addAdmin.php" method="POST" class="registerForm">
        <input type="text" name="FirstName" placeholder="First Name" required>
        <input type="text" name="LastName" placeholder="Last Name" required>
        <input type="email" name="Email" placeholder="Email" required>
        <input type="phone" name="Phone" placeholder="Phone" required>
        <input type="text" name="Password" placeholder="Password" required>
        <input type="submit" name="LoginBtn" value="Register Now">
     </form>
  
     <!-- IF User already has an Account -->
    <a href="login.php" class="sign-up-link">Already have an Account, Log-in</a>
    </div>

    </section>

</body>
</html>