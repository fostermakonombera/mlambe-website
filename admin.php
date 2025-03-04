<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="pics/logo.jpg">
</head>
<body>
    
    <nav id="nav" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                    <h3>MLAMBE MISSION HOSPITAL</h3><h6>P.O BOX 45 LUNZU BLANTYRE</h6>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" 
              aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end align-center" id="navMain">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link " href="log out.php">Log out</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          <div class="text-center">
          <h2 class="bg-success text-white rounded p-4">WELCOME ADMIN,<?php if(isset($_SESSION['email'])){
                                               echo $_SESSION['email'];
                                             }
                                             else{
                                              header("location: Login.php");
                                              exit();
                                             } ?><h2>
          </div>

          <div class="container-fluid vh-100">
          <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-2 text-center">
         <div id="toggle-button" class="bg-white text-black rounded border shadow"><h3>MENU</h3></div><br>
         <div id="content" style="display:none;">
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="serviceform.php" class="nav-link">Add Services</a></div>
         <div class="py-5 mb-3 bg-success text-white rounded"><a href="addfaq.php" class="nav-link">Add FAQ</a></div>
         <div class="py-5 mb-3 bg-success text-white rounded"><a href="postblog.php" class="nav-link">Add Blog</a></div>
         </div>
         <script>
         const toggleButton=document.getElementById('toggle-button');
         toggleButton.addEventListener('click',()=>{if (content.style.display==='block')
         {content.style.display='none';}else{content.style.display='block';}});
         </script>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-10 text-center ">
         <h3 class="bg-white text-black shadow border">DASHBOARD</h3>
         <div class="row ">

         <div class="col-sm-12 col-md-6 col-lg-3 p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">FAQ</h4>
         <p><a href="viewfaq.php" class="nav-link">view FAQ</a></p>
         </div>

         <div class="col-sm-12 col-md-6 col-lg-3 p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">SERVICES OFFERED</h4>
         <p><a href="addservice.php" class="nav-link">view services</a></p>
         </div>

         <div class="col-sm-12 col-md-6 col-lg-3 p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">FEEDBACK</h4>
         <p><a href="viewfeedback.php" class="nav-link">view Feedback</a></p>
         </div>

         </div>

         
         <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-3  p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">BLOG/NEWS LETTER</h4>
         <p><a href="viewblogadmin.php" class="nav-link">view Blog</a></p>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-3  p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">USERS/ADMINS</h4>
         <p><a href="viewusers.php" class="nav-link">view Admin</a></p>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-3  p-4 m-auto mb-3 bg-success text-white rounded">
         <h4 class="text-center">ADD ADMIN/USERS</h4>
         <p><a href="adduser.php" class="nav-link">add</a></p>
         </div>
         
         </div><br><br><br><br><br><br><br><br>
         <br><br><br><br><br>
         </div>

          
<script> src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<footer class="footer text-center bg-success text-white">Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</footer>
</body>
</html>
