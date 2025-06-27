<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
header("Location: index.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body onload="search()">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userProfile.php">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Moje
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Moje aplikacje</a></li>
            <li><a class="dropdown-item" href="userSaved.php">Zapisane</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" id="searcher" type="search" placeholder="Szukaj" aria-label="Search">
      </form>
    </div>
  </div>
</nav>

<div class="MainContainer container-fluid row">
    <div class="leftBox col-3">

    </div>
    <div class="rightBox row container col-9">
    <?php
    $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
    $query="SELECT * FROM ogloszenie";
    $result=$connect->query($query);
    while($row = $result->fetch_object()){
    echo <<< html
    
        <div class="box col-12">
        <form method="POST" action="checkAdvert.php">
            <p class="title">$row->stanowisko</p>
            <p class="firma">$row->firma</p>
            <p class="adres">$row->adres_firmy</p>
            <hr>
            <button type="submit" value='$row->Id' name="ogloszenie">Zobacz</button>   
        </form>     
        </div>
   
    html;
    }
    ?>
    </div>
</div>
    <script src="search.js"></script>
</body>
</html>