<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
header("Location: index.php");
exit();
}
$Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="applySend.php">
    <div class="form-input py-2">  
    <!-- <div class="form-group">
          <input type="text" class="form-control" name="name"
                 placeholder="Enter your name" required>
        </div>                                -->
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
            <input type="hidden" name="ogloszenie" value="<?php echo $Id ?>">
          <input type="submit" class="btnRegister"
                 name="submit" value="Submit">
        </div>
   </div>
</form>
</body>
</html>