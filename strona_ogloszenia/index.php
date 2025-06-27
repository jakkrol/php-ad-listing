<?php
    session_start();
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
    <link rel="stylesheet" href="login.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
 
    <div class="login-page">
        <div class="form container">
          <form class="login-form" method="GET" action="index.php">
            <input type="text" required="required" placeholder="email" name="email"/>
            <input type="password" required="required" placeholder="haslo" name="password"/>
            <button type="submit" value="Login" name="start">login</button>
            <p class="message">Nie posiadasz konta? <a href="register.php">Zarejestruj</a></p>
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

        if(isset($_GET['email']) && isset($_GET['password'])){
            $query = "SELECT Id, Email, Haslo, Type FROM uzytkownicy WHERE Email = '$email' AND Haslo = '$password'";
            $result=$connect->query($query);
            $wynik = $result->num_rows;
            $row = $result->fetch_object();
            $user_id = $row->Id;
            $type = $row->Type;
            
            if($wynik != null AND $wynik > 0 AND $type == 0){
                     $_SESSION['zalogowany'] = $row->Id;
                     header("Location: main.php");
                     exit();
                }
            if($wynik != null AND $wynik > 0 AND $type == 1){
                    $_SESSION['zalogowany'] = $row->Id;
               
                    $_SESSION['zalogowany_admin'] = $row->Id;
                    header("Location: admin_panel.php");
                    exit();
               }
        
      
            
            else{
              
            header("Location: index.php");
            exit();
            }
        }


       // $query = "SELECT user_id, login, password FROM users WHERE login = '$login' AND password = '$password'";
       // $result=$connect->query($query);
       // $wynik = $result->num_rows;
       // $row = $result->fetch_object();
       // if($wynik != null AND $wynik > 0){
       //     header("Location: shop.php?user_id=$row->user_id");
       // }
    }

?>
</html>