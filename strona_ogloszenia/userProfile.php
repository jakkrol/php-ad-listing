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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <link href="userProfile.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="main.php">Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Profil</a>
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
    </div>
  </div>
</nav>
<div class="container">
  <!-- Opis  -->
  <div class="box">
    <h3 class="title">
      <Boxtitle>Opis</Boxtitle>
      <button class="button" type="button" onclick="EditUser()">Edytuj</button>
    </h3>
        <div id="UserProfile" class="container">
        <?php include("UserProfileDisplay\displayOpis.php") ?>
        </div>

        <div id="UserProfileForm">
        <?php include("UserProfileDisplay\displayOpisForm.php") ?>
        </div>
        
   
  </div>
  <!-- Opis  -->
  <!-- Doswiadczenie  -->
<div class="box">
  <h3 class="title">
    <Boxtitle>Doświadczenie zawodowe</Boxtitle>
    <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDoswiadczenie" aria-expanded="false" aria-controls="collapseExample">Dodaj</button>
  </h3>
  <div class="collapse" id="collapseDoswiadczenie">
    <div class="card card-body">
      <form id="myForm" method="POST">
            <input type="text" name="stanowisko" id="stanowisko"/>
            <input type="text" name="lokalizacja" id="lokalizacja"/>
            <input type="text" name="firma" id="firma"/>
            <input type="text" name="okres" id="okres"/>
            <input type="reset" value="Submit" onclick="SubmitDoswiadczenie();"></input>
      </form>
    </div>
</div>
  <div id="resultsDoswiadczenie" class="container">
    <?php include("UserProfileDisplay\displayDoswiadczenie.php") ?>
  </div>
  
</div>
  <!-- Doswiadczenie  -->
  <!-- Kursy  -->
  <div class="box">
  <h3 class="title">
    <Boxtitle>Kursy</Boxtitle>
    <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKursy" aria-expanded="false" aria-controls="collapseExample">Dodaj</button>
  </h3>
  <div class="collapse" id="collapseKursy">
    <div class="card card-body">
      <form id="myForm" method="POST">
            <input type="text" name="nazwaKurs" id="nazwaKurs"/>
            <input type="text" name="organizatorKurs" id="organizatorKurs"/>
            <input type="text" name="okresKurs" id="okresKurs"/>
            <input type="reset" value="Submit" onclick="SubmitKursy();"></input>
      </form>
    </div>
</div>
  <div id="resultsKursy" class="container">
  <?php include("UserProfileDisplay\displayKursy.php") ?>
  </div>
  
</div>
  <!-- Kursy  -->
  <!-- Jezyki  -->
  <div class="box">
  <h3 class="title">
    <Boxtitle>Języki</Boxtitle>
    <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJezyki" aria-expanded="false" aria-controls="collapseExample">Dodaj</button>
  </h3>
  <div class="collapse" id="collapseJezyki">
    <div class="card card-body">
      <form id="myForm" method="POST">
            <input type="text" name="jezyk" id="jezyk"/>
            <input type="text" name="poziom" id="poziom"/>
            <input type="reset" value="Submit" onclick="SubmitJezyk();"></input>
      </form>
    </div>
</div>
  <div id="resultsJezyk" class="container">
  <?php include("UserProfileDisplay\displayJezyki.php") ?>
  </div>
  
</div>
  <!-- Jezyki  -->
  <!-- Wyksztalcenie  -->
   <div class="box">
  <h3 class="title">
    <Boxtitle>Wyksztalcenie</Boxtitle>
    <button class="button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWyksztalcenie" aria-expanded="false" aria-controls="collapseExample">Dodaj</button>
  </h3>
  <div class="collapse" id="collapseWyksztalcenie">
    <div class="card card-body">
      <form id="myForm" method="POST">
            <input type="text" name="szkolaWyksztalcenie" id="szkolaWyksztalcenie"/>
            <input type="text" name="poziomWyksztalcenie" id="poziomWyksztalcenie"/>
            <input type="text" name="kierunekWyksztalcenie" id="kierunekWyksztalcenie"/>
            <input type="text" name="okresWyksztalcenie" id="okresWyksztalcenie"/>
            <input type="reset" value="Submit" onclick="SubmitWyksztalcenie();"></input>
      </form>
    </div>
</div>
  <div id="resultsWyksztalcenie" class="container">
  <?php include("UserProfileDisplay\displayWyksztalcenie.php") ?>
  </div>
  
</div>
<!-- Wyksztalcenie  -->
<!-- Umietnosci -->
<div class="box">
    <h3 class="title">
      <Boxtitle>Umiętności</Boxtitle>
      <button class="button" type="button" onclick="EditUmietnosci()">Edytuj</button>
    </h3>
        <div id="UserUmietnosci" class="container">
          <ul class="umietnosci_list">
            <?php include("UserProfileDisplay\displayUmietnosci.php") ?>
          </ul>
        </div>
        <div id="UserUmietnosciForm">
          <?php include("UserProfileDisplay\displayUmietnosciForm.php") ?>
        </div>
  </div>
<!-- Umietnosci -->
<!-- Linki -->
<div class="box">
    <h3 class="title">
      <Boxtitle>Linki</Boxtitle>
      <button class="button" type="button" onclick="EditLinki()">Edytuj</button>
    </h3>
        <div id="UserLinki" class="container">
          <ul class="linki_list">
            <?php include("UserProfileDisplay\displayLinki.php") ?>
          </ul>
        </div>
        <div id="UserLinkiForm">
          <?php include("UserProfileDisplay\displayLinkiForm.php") ?>
        </div>
  </div>
<!-- Linki -->

</div>





</body>
</html>