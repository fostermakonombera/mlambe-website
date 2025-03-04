<?php
session_start();

include("conn.php");
//$sql = "SELECT * FROM posts ORDER BY created_at DESC";
//$result = $con->query($sql);
if (isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="SELECT * FROM posts WHERE id='$id'";
  $result = $con->query($sql);
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="pics/logo.jpg">
</head>
<body >
    
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
                    <a class="nav-link active bg-success rounded" aria-current="page" href="viewblog.php">Blog</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contacts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="our services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="faq.php">FAQ</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
          <div class="bg-white col-sm-12 vh-100">
          <div class="text-center col-sm-12">
          <h2 class="bg-success text-white rounded p-4">HOSPITAL BLOGS IN DETAILS<h2>
          </div>
          <div class="container-fluid col-sm-12 col-md-12 col-lg-12">
          <div class="row">
         
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card bg-image col-sm-12 col-md-6 col-lg-12  text-black  m-auto mb-3 py-4'>
            <div class='border shadow img-fluid'>
              <img  class='card-img-top'  src='uploads/" . htmlspecialchars($row['images']) . "'
                   alt='" . htmlspecialchars($row['title']) . "'>
            </div>
            <h2>" . htmlspecialchars($row['title']) . "</h2>
            
            <p>" . nl2br(htmlspecialchars($row['content'])) . "</p>
            <small >Posted on: " . $row['created_at'] . "</small>
            </div>
            </div>";
        }
    } else {
        echo "h3 class='text-center'>No posts available.</he>";
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
<br><a href="mailto:mlambemissionhosp@gmail.com" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0z" 
fill="none"/><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
mlambemissionhosp@gmail.com</a>
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368"><path d="M0 0h24v24H0z"
 fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57
  1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65
   3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>099729817 / 0881246332<br>
Copyright &copy;2025 Mlambe ICT Team. All rights Reserved</FOOTER>
</body>
</html>
