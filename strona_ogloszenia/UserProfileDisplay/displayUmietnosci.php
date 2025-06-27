<link href="userProfile.css" rel="stylesheet">
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];


$q="SELECT * FROM uzytkownicy WHERE Id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {

                $text = $row->Umietnosci;
                $ar = explode(",", $text);
                for($i = 0; $i < count($ar); $i++){
                    echo "<li>".$ar[$i]."</li>";
                }

                }
                $result->free_result();

$connect->close();
?>
