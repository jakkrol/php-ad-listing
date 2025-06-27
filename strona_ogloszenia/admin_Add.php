<?php
session_start();
if(!isset($_SESSION['zalogowany_admin'])){
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
    <link rel="stylesheet" href="adminAdd.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="container">
      <div class="box">
        <p class="title">Dodaj Ogłoszenie</p>
<form action='admin_Add.php' method='GET' class='form'>

    <label for='stanowisko'>Stanowisko</label>
    <input class='text-input' id='stanowisko' name='stanowisko'>

    <label class='label' for='firma'>Firma</label>
    <input class='text-input' id='firma' name='firma'>

    <label class='label' for='adres'>Adres</label>
    <input class='text-input' id='adres' name='adres'>

    <p>
      <label class='label' for='umowa'>Umowa</label>
      <select class='select' id='umowa' name='umowa'>
        <option selected value=''></option>
        <option value='B2B'>B2B</option>
        <option value='UoP'>UoP</option>
      </select>
    </p>
    <p>
      <label class='label' for='zatrudnienie'>Zatrudnienie</label>
      <select class='select' id='zatrudnienie' name='zatrudnienie'>
        <option selected value=''></option>
        <option value='caly etat'>cały etat</option>
        <option value='1/2 etatu'>1/2 etatu</option>
      </select>
    </p>
    <p>
      <label class='label' for='rodzaj'>Rodzaj pracy</label>
      <select class='select' id='rodzaj' name='rodzaj'>
        <option selected value=''></option>
        <option value='zdalna'>zdalna</option>
        <option value='stacjonarna'>stacjonarna</option>
        <option value='hybrydowa'>hybrydowa</option>
      </select>
    </p>

  <p>
    <label class='label' for='data'>Data ważności</label>
    <input type="date" class='text-input' id='data' name='data'>
  </p>


  <p>
    <label class='label' for='technologie'>Technologie</label>
    <input class='text-input' id='technologie' name='technologie' placeholder="Wypisywać należy po ','">
  </p>
  <p>
    <label class='label' for='obowiazki'>Obowiazki</label>
    <input class='text-input' id='obowiazki' name='obowiazki' placeholder="Wypisywać należy po ','">
  </p>
  <p>
    <label class='label' for='wymagania'>Wymagania</label>
    <input class='text-input' id='wymagania' name='wymagania' placeholder="Wypisywać należy po ','">
  </p>
  <p>
    <label class='label' for='oferuje'>Oferuje</label>
    <input class='text-input' id='oferuje' name='oferuje' placeholder="Wypisywać należy po ','">
  </p>
 
    <label class='label' for='opis'>Opis</label><br>
    <textarea class='textarea' cols='50' id='about' name='opis' rows='4'></textarea>
  </p>


    <button type="submit" value="Submit" name="start">Wyślij</button>

</form>
      </div>
    </div>

</body>


<?php

$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');




if (isset($_GET['start']))
    {
      echo "tutaj";
        $stanowisko = $_GET['stanowisko'];
        $firma = $_GET['firma'];
        $adres = $_GET['adres'];
        $umowa = $_GET['umowa'];
        $zatrudnienie = $_GET['zatrudnienie'];
        $rodzaj = $_GET['rodzaj'];
        $data = $_GET['data'];
        $technologie = $_GET['technologie'];
        $obowiazki = $_GET['obowiazki'];
        $wymagania = $_GET['wymagania'];
        $oferuje = $_GET['oferuje'];
        $opis = $_GET['opis'];
        

            $query = "INSERT INTO ogloszenie(stanowisko, firma, adres_firmy, umowa, wymiar_zatrudnienia, data, rodzaj, technologie, opis, obowiazki, wymagania, oferuje) VALUES ('$stanowisko', '$firma', '$adres', '$umowa', '$zatrudnienie', '$data', '$rodzaj', '$technologie', '$opis', '$obowiazki', '$wymagania', '$oferuje')";
            $connect->query($query);
            
            header("Location: admin_panel.php");
    }

?>
</html>