<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
header("Location: index.php");
exit();
}
?>


<?php
$file_tmp = $_POST['ogloszenie'];
echo $file_tmp; 
$user_id = $_SESSION['zalogowany'];
    if (isset($_POST['submit'])) {
 
        if (isset($_FILES['pdf_file']))
        {
          $file_name = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
          $user_id = $_SESSION['zalogowany'];
          $ogloszenie_id = $_POST['ogloszenie'];
          move_uploaded_file($file_tmp,"./pdf/".$file_name);

          $connect=new mysqli('localhost', 'root', '', 'system_ogloszen'); 
          $insertquery =
          "INSERT INTO aplikacje(user_id,ogloszenie_id,cv) VALUES('$user_id','$ogloszenie_id','$file_name')";
          $iquery = mysqli_query($connect, $insertquery);


        echo "<script>
        alert('Aplikacja została złożona :)');
        window.location.href='main.php';
        </script>";
        }
        else
        {
           echo<<<html
           echo "<script>
           alert('Wystąpił błąd podczas składania aplikacji :)');
           window.location.href='main.php';
           </script>";
          html;
        }
    }
?>