<?php
session_start();

include("conn.php");
$sql="SELECT * FROM services";
$result=$con->query($sql);

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>our services</title>
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
          <div class="bg-white vh-100">
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
         <div id="toggle-button" class="bg-white text-success shadow rounded"><h3>MENU</h3></div>
         <div id="content" style="display:none;">
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="admin.php" class="nav-link">Dashboard</a></div>
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="serviceform.php" class="nav-link">Add Services</a></div>
         
         </div>
         <script>
         const toggleButton=document.getElementById('toggle-button');
         toggleButton.addEventListener('click',()=>{if (content.style.display==='block')
         {content.style.display='none';}else{content.style.display='block';}});
         </script>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-10 text-center ">
         <h2 class="bg-white text-success shadow rounded">SERVICES</h2>
        
         <?php
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo"<div class='card text-center bg-whhite text-black shadow'>
            <!--<img src='".$row['pic']."' alt='Department picture'>-->
            <h3 '>".$row['title']."</h3>
            <p>".$row['s_description']."</p>
            <small class='text-end rounded text-danger'>
                      <a class='nav-link' href='deleteservice.php?id=".$row['id']."'><b>Delete</b></a>
                      <a class='nav-link' href='edit.php?id=".$row['id']."'><b>Edit</b></a>
            </small>
            </div><br>
            ";
          }
        }
          else{
            echo"<h3 class='text-center'>No results found</h3>";
          }
         ?>
          
         </div>
         </div>
         </div>
          </div>
          
          

          
<script> src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<FOOTER class="footer text-center bg-success text-white">Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</FOOTER>
</body>
</html>
