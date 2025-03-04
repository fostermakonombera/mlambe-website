<?php
session_start();

include("conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$email=$_POST['email'];
$password=$_POST['password'];
//hash the password
//$password_hash=md5($password);
 $sql="SELECT email,password1 FROM admin WHERE email ='$email' AND password1 ='$password'";
 $result=$con->query($sql);
 if ($result->num_rows > 0){
   
   $_SESSION['email']=$email;
   $_SESSION['Logged']=true;
   header('Location:admin.php');
   exit;
 }
 else
 {
   
   $error="Invalid email or password";
  
 }
}
 $con->close();
?>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="pics/logo.jpg">
  
</head>
<body>
<?php if (isset($error)){
            ?>
            <script>
            window.onload=function(){
            alert("<?php echo $error;?>");}
            </script>
            <?php
          }?>
    
    <nav id="nav" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="pics/logo.jpg" width=50% height=50% class="rounded p-3">
                    
              </a>
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
                    <a class="nav-link active bg-success rounded" aria-current="page" href="#">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="our services.php">Services</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="faq.php">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="viewblog.php">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contacts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="aboutus.php">About</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
          <div class="container-fluid border-white vh-100"  style="background-image:url(pics/home.jpg);
                  background-size:cover;" ><br>
          <div class=" text-center text-success bg-opacity-100"  style="margin:0 auto;width:70%; border-radius:15px;"><br>
          <h3 class="text-success">MLAMBE HOSPITAL</h3><h5>LOGIN AS ADMIN</h5>
          <div> <img src="pics/pro.png" class="rounded-pill"></div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="fw-bold bg-white bg-opacity-25 text-white rounded">
         <label for="email" class="form-label">Username:</label><br>
          <input type="email" id="email" name="email" placeholder="Username/Email" required><br>
          <label for="password" class="form-label">Password:</label>
          <br><input type="password" id="password" name="password" placeholder="Password" required><br><br>
          <button type="submit" class="btn btn-white text-white fw-bold">Login</button><br>
           <a href="" class="nav-link">Forgot Password? Reset</a>
          </form><br>
     
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
