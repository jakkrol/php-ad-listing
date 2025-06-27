<?php
session_start();
if(isset($_POST['Save'])){
$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
  $user_id = $_SESSION['zalogowany'];
  $Id = $_POST['Id'];
  
  $query = "INSERT INTO zapisane(user_id, ogloszenie_id) VALUES ('$user_id','$Id')";
  $connect->query($query);
  $connect->close();
}
else{
    $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
       
      $user_id = $_SESSION['zalogowany'];
      $Id = $_GET['Id'];
      
      $query = "DELETE FROM zapisane WHERE user_id='$user_id' AND ogloszenie_id='$Id'";
      $connect->query($query);
      $connect->close();

      header("Location: userSaved.php");
} 
?>