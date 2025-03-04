<?php
session_start();

include("conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
  
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    
  
    
    //inserting data into database
    $sql = "INSERT INTO admin (fname,lname,email,password1) VALUES ('$fname',' $lname',' $email',' $password')";
    //die($sql);
   if($con->query($sql)===TRUE){
     echo"<script>
              alert('User added successfully');
           </script>";
   }
   else{
     echo"<script>
               alert('Failed to add,try again!!');
          </script>";
   }
    
    
}
 $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adding admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="pics/logo.jpg">
</head>
<body class="vh-100">
    
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
          <div class="bg-white">
          <div class="text-center">
          <h2 class="bg-success text-white rounded p-4">WELCOME ADMIN,<?php if(isset($_SESSION['email'])){
                                               echo $_SESSION['email'];
                                             }
                                             else{
                                              header("location: Login.php");
                                              exit();
                                             } ?><h2>
          </div>
          <div class="container-fluid">
          <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-2 text-center">
         <div id="toggle-button" class="bg-white text-success rounded shadow"><h3>MENU</h3></div>
         <div id="content" style="display:none;">
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="admin.php" class="nav-link">Dashboard</a></div>
         
         </div>
         <script>
         const toggleButton=document.getElementById('toggle-button');
         toggleButton.addEventListener('click',()=>{if (content.style.display==='block')
         {content.style.display='none';}else{content.style.display='block';}});
         </script>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-10 text-center ">
         <h3 class="bg-white text-success rounded shadow">ADD NEW ADMIN/USER</h3>
        
  
    <div class="mx-auto" style="width:50%;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-white text-black ">
      <!-- FirstName Field -->
      <div class="form-group">
        <label for="name">First Name:</label>
        <input type="text" class="form-control border-success " id="fname" name="fname" placeholder="Enter your first name" required>
      </div><br>
      
      <!-- LastName Field -->
      <div class="form-group">
        <label for="name">Last Name:</label>
        <input type="text" class="form-control border-success " id="lname" name="lname" placeholder="Enter your last name" required>
      </div><br>

      <!-- Email Field -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control border-success" name="email" placeholder="Enter your email" required>
      </div><br>

      <!-- Password -->
      <div class="form-group">
        <label for="name">Password:</label>
        <input type="password" class="form-control border-success " id="password" name="password" placeholder="Enter your password" required>
      </div><br>

      <!-- Submit Button -->
      <div class="form-group">
        <button type="submit" class="form-control border-success" >Add</button>
      </div><br>
    </form><br>
</div>
  </div>
          </div>
      </div>    
          

          
<script> src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<FOOTER class="footer text-center bg-success text-white">
<br><a href="mailto:mlambemissionhosp@gmail.com" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0z" 
fill="none"/><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
mlambemissionhosp@gmail.com</a>
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0z"
 fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57
  1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65
   3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>0996937756 / 0885744412<br>
Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</FOOTER>
</body>
</html>
