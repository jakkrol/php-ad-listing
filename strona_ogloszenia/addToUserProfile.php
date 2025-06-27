<?php
session_start();
//opis
if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
  $user_id = $_SESSION['zalogowany'];
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $data = $_POST['data_ur'];
  $numer = $_POST['numer'];
  $zamieszkanie = $_POST['zamieszkanie'];
  $stanowisko = $_POST['stanowisko'];
  
  $query = "UPDATE uzytkownicy SET Imie='$imie', Nazwisko='$nazwisko', Data_ur='$data', Numer_tel='$numer', Zamieszkanie='$zamieszkanie', Stanowisko='$stanowisko' WHERE Id='$user_id'";
  $connect->query($query);
  $connect->close();
}
//opis
//umietnosci
if(isset($_POST['umietnosci'])){
  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
  $user_id = $_SESSION['zalogowany'];
  $umietnosci = $_POST['umietnosci'];

  $query = "UPDATE uzytkownicy SET Umietnosci='$umietnosci' WHERE Id='$user_id'";
  $connect->query($query);
  $connect->close();
}
//umietnosci
//linki
if(isset($_POST['linki'])){
  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
  $user_id = $_SESSION['zalogowany'];
  $linki = $_POST['linki'];

  $query = "UPDATE uzytkownicy SET Linki='$linki' WHERE Id='$user_id'";
  $connect->query($query);
  $connect->close();
}
//linki
//doswiadczenie
if (isset($_POST['stanowisko']) && isset($_POST['lokalizacja']))
{
  $user_id = $_SESSION['zalogowany'];
  $stanowisko = $_POST['stanowisko'];
  $lokalizacja = $_POST['lokalizacja'];
  $firma = $_POST['firma'];
  $okres = $_POST['okres'];



  echo<<<html
  <div class="display">
      <p>$stanowisko</p>
      <p>$lokalizacja</p>                        
      <p>$firma</p>            
      <p>$okres</p>            
  </div>
html; 


  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
            $query = "INSERT INTO doswiadczenie(User_id, Stanowisko, Lokalizacja, Firma, Okres) VALUES ('$user_id', '$stanowisko', '$firma', '$lokalizacja','$okres' )";
            $connect->query($query);
  $connect->close();
}
//doswiadczenie



//kursy
if (isset($_POST['nazwa']))
{
  $user_id = $_SESSION['zalogowany'];
  $nazwa = $_POST['nazwa'];
  $organizator = $_POST['organizator'];
  $okres = $_POST['okres'];

  echo<<<html
  <div class="display">
      <p>$nazwa</p>
      <p>$organizator</p>                        
      <p>$okres</p>                     
  </div>
html; 


  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
            $query = "INSERT INTO kursy(User_id, Nazwa, Organizator, Okres) VALUES ('$user_id', '$nazwa', '$organizator', '$okres' )";
            $connect->query($query);
  $connect->close();

}
//kursy

//jezyk
if (isset($_POST['jezyk']))
{
  $user_id = $_SESSION['zalogowany'];
  $jezyk = $_POST['jezyk'];
  $poziom = $_POST['poziom'];

  echo<<<html
  <div class="display">
      <p>$jezyk</p>
      <p>$poziom</p>                                             
  </div>
html; 


  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
            $query = "INSERT INTO jezyki(User_id, Jezyk, Poziom) VALUES ('$user_id', '$jezyk', '$poziom')";
            $connect->query($query);
  $connect->close();
}
//jezyk

//wyksztalcenie
if (isset($_POST['szkola']))
{
  $user_id = $_SESSION['zalogowany'];
  $szkola = $_POST['szkola'];
  $poziom = $_POST['poziom'];
  $kierunek = $_POST['kierunek'];
  $okres = $_POST['okres'];

  echo<<<html
  <div class="display">
      <p>$szkola</p>
      <p>$poziom</p>                                             
      <p>$kierunek</p>                                             
      <p>$okres</p>                                             
  </div>
html; 


  $connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
   
            $query = "INSERT INTO wyksztalcenie(User_id, Szkola, Poziom, Kierunek, Okres) VALUES ('$user_id', '$szkola', '$poziom', '$kierunek', '$okres')";
            $connect->query($query);
  $connect->close();
}
//wyksztalcenie


?>