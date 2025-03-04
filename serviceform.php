<?php
session_start();

include("conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
   $img_name = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
  
    $title = $_POST['ns'];
    $descr= $_POST['descr'];
    
  
    
    $img_ex = pathinfo($img_name , PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

   $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $path =  "photos/".$new_img_name;
    move_uploaded_file($tmp_name , $path);
    #echo "$new_img_name";
    //inserting in database
    $sql = "INSERT INTO services (pic,title,s_description) VALUES ('$new_img_name',' $title','$descr')";
    //die($sql);
   if($con->query($sql)===TRUE){
     echo"<script>
              alert('Service added successfully');
           </script>";
   }
   else{
     echo"<script>
              alert('Failed to add service,please try again!!');
           </script>";
   }
    
    
}
 $con->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>addservice</title>
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
         <div id="toggle-button" class="bg-success text-white rounded"><h3>MENU</h3></div>
         <div id="content" style="display:none;">
         <div class="bg-success text-white py-5 mb-3 rounded"><a href="admin.php" class="nav-link">Dashboard</a></div>
         <div class="py-5 mb-3 bg-success text-white rounded"><a href="addfaq.php" class="nav-link">Add FAQ</a></div>
         <div class="py-5 mb-3 bg-successs text-white rounded"><a href="addblog.php" class="nav-link">Add Blog</a></div>
         </div>
         <script>
         const toggleButton=document.getElementById('toggle-button');
         toggleButton.addEventListener('click',()=>{if (content.style.display==='block')
         {content.style.display='none';}else{content.style.display='block';}});
         </script>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-10 text-center ">
         <h3 class="bg-success text-white rounded">ADD NEW SERVICE</h3>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group ">
    <label for="pic">Select Service Picture</label>
    <input type="file" class="form-control border-success" placeholder="Enter picture" name="image" id="image" required>
  </div>
  <div class="form-group">
    <label for="title">Type name of service:</label>
    <input type="text" class="form-control border-success" placeholder="Name of service in capital letters please!!" name="ns" id="ns" required>
  </div>
  <div class="form-group">
    <label for="desc">Add Description of service:</label>
    <textarea type="text" class="form-control border-success" rows="5" placeholder="Description of service" name="descr"  id="descr" required></textarea>
  </div><br>
  <button type="submit" value="upload" class="btn btn-success text-white">Submit</button>
</form>
         </div>
         </div><br><br><br><br><br><br><br><br><br>
          </div>
          
          

          
<script> src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<FOOTER class="footer text-center bg-success text-white">Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</FOOTER>
</body>
</html>
