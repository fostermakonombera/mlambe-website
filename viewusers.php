<?php
session_start();

include("conn.php");
$sql="SELECT * FROM admin";
$result=$con->query($sql);

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Users</title>
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
                    <a class="nav-link" href="log out.php">Log out</a>
                  </li>
                  
                  
                  
                </ul>
              </div>
            </div>
          </nav>
          
          <div class="text-center col-sm-12">
          <h2 class="bg-success text-white rounded p-4">ADMIN/USERS IN THE SYSTEM<h2>
          </div>
          <div class="container-fluid vh-100">
          <div class="row">

         <div class="col-sm-12 col-md-6 col-lg-2 text-center">
         <div id="toggle-button" class="bg-white text-success rounded shadow"><h3>MENU</h3></div>
         <div id="content" style="display:none;">
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="admin.php" class="nav-link">Dashboard</a></div>
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="adduser.php" class="nav-link">Add user</a></div>
         </div>
         <script>
         const toggleButton=document.getElementById('toggle-button');
         toggleButton.addEventListener('click',()=>{if (content.style.display==='block')
         {content.style.display='none';}else{content.style.display='block';}});
         </script>
         </div>

         <div class="col-sm-12 col-md-6 col-lg-10 text-center ">
         <h2 class="bg-white text-success rounded shadow">ADMINS</h2>
         
         <?php
         if($result->num_rows>0){
          
        
          echo"<table class='table-sm col-sm-12 table table-striped' border='2'>";
          echo"<tr>
                   <th>FirstName</th>
                   <th>Lastname</th>
                   <th>Email</th>
                   <th>Password</th>
                   <th>Actions</th>
          </tr>";
          while($row=$result->fetch_assoc()){
           
          echo"<tr>
                  <td>" . $row['fname'] . "</td>
                  <td>" . $row['lname'] . "</td>
                  <td>" . $row['email'] . "</td>
                  <td>" . $row['password1'] . "</td>
                  <td><a class='nav-link bg-danger rounded' href='deleteuser.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a>
                      
                </td>
         </tr>";
          
          }
         echo"</table>";
         
        }
          else{
            echo"<h3 class='text-center'>No results found</h3>";
          }
         ?>
         
         </div>
         </div>
         </div>
         
          
                 
<script> src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<FOOTER class="footer text-center bg-success text-white">

Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</FOOTER>
</body>
</html>
