<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="stylesheet" href="styles.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>   
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10"></link>
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- Optional Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</head>

<body class="bg-dark">
   <div class="section ">
      <div class="container ">
         <div class="image">
         <a href="Login.php" class="return"><img width="50" height="50" src="https://img.icons8.com/ios/50/FFFFFF/circled-left--v1.png" alt="circled-left--v1"/></a>
            <div class="logo">
               <img class="logo-image" src="IMG_5789__1_-removebg-preview.png" alt="logo">
               <h1>Road 1 Pharmacy</h1>
            </div>
         </div>
         <div class="form-section bg-dark" >
            <form  method="post" action="../actions/register.php">
               <?php
                  if(isset($error) && !empty($error)){
                     echo '<div class="alert alert-danger">';
                     foreach($error as $message){
                        echo "<p>$message</p>";
                     }
                     echo '</div>';
                  }
               ?>
               <div class="input-form">
                  <input type="text" class="input bg-dark" name="username" required placeholder="Username">
                  <label for="username">Username</label>
               </div>
               <div class="input-form">
                  <input type="password1" class="input bg-dark"  name="password1" required placeholder="Password">
                  <label for="username">Password</label>
               </div>
               <div class="input-form">
                  <input type="password2" class="input bg-dark"  name="password2" required placeholder="Confirm Password">
                  <label for="username">Confirm Password</label>
               </div>
                  <button type="submit" name="submit" class="btn btn-primary button">Sign up</button>
            </form>
            <div class="other-sign-in">
               <!--<p>Fast sign up with your favorite social profile</p>
               <div class="icons">
                  <a href="https://www.google.com"><i class="bi bi-google h2" style="color: orangered;"></i></a>
                  <a href="https://www.facebook.com"><i class="bi bi-facebook h2" style="color: blue;"></i></a>
                  <a href="https://www.twitter.com"><i class="bi bi-twitter h2" style="color: skyblue;"></i></a>
               </div>-->
                  <p>If you are alreay a member please <a href="Login.php">Sign In</a></p>
            </div> 
         </div>
      </div>
   </div>
</body>
</html>