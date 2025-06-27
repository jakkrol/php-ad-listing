<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="login_page.js"></script>
</head>
<body>

    <div class="login-page">
        <div class="form container">
          <form class="login-form" action="register.php" method="GET">
            <input type="text" required="required" placeholder="email" name="email"/>
            <input type="password" required="required" placeholder="haslo" name="password"/>
            <input type="password" required="required" placeholder="powtorz haslo" name="repeat_password"/>

            <!-- <p>Dodatkowe informacje - nie potrzebne zostawić puste</p>
            <hr>
            <input type="text" placeholder="imie"/>
            <input type="text" placeholder="email"/>
            <input type="date" placeholder="data urodzenia"/>
            <input type="number" placeholder="numer"/>
            <input type="text" placeholder="aktualne stanowisko"/>
            <input type="text" placeholder="adres zamieszkania"/>
            <textarea name="podsumowanie">Enter text here...</textarea> -->
            
            <button type="submit" value="Register" name="start">Zarejestruj</button>
            <p class="message">Masz już konto? <a href="index.php">Zaloguj</a></p>
          </form>
        </div>
    </div>

</body>

<?php

$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');

if (isset($_GET['start']))
    {
        $email = $_GET['email'];
        $password = $_GET['password'];
        $repeat_pass = $_GET['repeat_password'];


        $query = "SELECT Id, Email, Haslo FROM uzytkownicy WHERE Email = '$email' OR Haslo = '$password'";
        $result=$connect->query($query);
        $wynik = $result->num_rows;
        $row = $result->fetch_object();
        if(($wynik == null OR $wynik == 0) AND ($email != null AND $password != null)){
            $query = "INSERT INTO uzytkownicy(Type, Email, Haslo) VALUES ('0', '$email', '$password')";
            $connect->query($query);

            header("Location: index.php");
        }

               
    }


?>

</html>