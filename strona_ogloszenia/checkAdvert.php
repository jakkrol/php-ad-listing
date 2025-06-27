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
    <link rel="stylesheet" href="checkAdvert.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="save.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_POST['ogloszenie'];
        $connect=new mysqli('localhost', 'root', '', 'system_ogloszen'); 
        $query="SELECT * FROM ogloszenie WHERE Id = $id";
        $result=$connect->query($query);
        $row = $result->fetch_object();
        echo <<< html
        <div class="container-fluid">
            <div class="box">
                <p class="title">$row->stanowisko</p>
                <p class="firma">$row->firma</p>
                <p class="adres">$row->adres_firmy</p>
                <p class="adres">$row->umowa</p>
                <p class="adres">$row->wymiar_zatrudnienia</p>
                <p class="adres">$row->data</p>
                <p class="adres">$row->rodzaj</p>
            </div>




            <div class="box">
                <p class="title">Technologie</p>
                <ul>
        html;
                $text = $row->technologie;
                $ar = explode(",", $text);
                for($i = 0; $i < count($ar); $i++){
                    echo "<li>".$ar[$i]."</li>";
                }
        echo<<<html
                </ul>
            </div>





            <div class="box">
                <p class="title">Obowiązki</p>
                <ul>
        html;
                $text = $row->obowiazki;
                $ar = explode(",", $text);
                for($i = 0; $i < count($ar); $i++){
                    echo "<li>".$ar[$i]."</li>";
                }

        echo<<<html
                </ul>
            </div>





            <div class="box">
                <p class="title">Wymagania</p>
                <ul>
        html;
                $text = $row->wymagania;
                $ar = explode(",", $text);
                for($i = 0; $i < count($ar); $i++){
                    echo "<li>".$ar[$i]."</li>";
                }

        echo<<<html
                </ul>
            </div>




            <div class="box">
            <p class="title">Oferuje</p>
            <ul>
    html;
            $text = $row->oferuje;
            $ar = explode(",", $text);
            for($i = 0; $i < count($ar); $i++){
                echo "<li>".$ar[$i]."</li>";
            }

    echo<<<html
            </ul>
        </div>

        <button onclick="location.href='apply.php?Id=$row->Id'" type="button">Aplikuj</button>
        <button class="Save" onclick="Save($row->Id)">Zapisz</button>


        html;
        $user_id = $_SESSION['zalogowany'];
        $query = "SELECT Id FROM zapisane WHERE user_id = '$user_id' AND ogloszenie_id = '$row->Id'";
        $result=$connect->query($query);
        $wynik = $result->num_rows;
        $row = $result->fetch_object();
        if(($wynik != null AND $wynik != 0)){
  
            echo '<script type="text/javascript">alreadySaved();</script>';
        }
        
        echo<<<html
        </div>
        html;
    ?>
</body>
</html>