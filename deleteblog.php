<?php 
include("conn.php");

$id=$_GET['id'];
$sql="DELETE FROM posts WHERE id='$id'";
if($con->query($sql)===TRUE)
{
         echo"<script>
              alert('Deleted successfully');
           </script>";
header('Location:viewblogadmin.php');
exit;
}
else
{
    echo"<script>
              alert('Failed to delete,try again!!');
           </script>";
}
$con->close();
?>