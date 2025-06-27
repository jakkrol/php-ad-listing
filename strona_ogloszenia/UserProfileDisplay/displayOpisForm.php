<link href="userProfile.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];

$q="SELECT * FROM uzytkownicy WHERE Id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {
                echo<<<html
                <form id="myForm" method="POST">
                <label class="prefix">Imie:</label><input type="text" name="imieF" id="imieF" value="$row->Imie"/>
                <label class="prefix">Nazwisko:</label><input type="text" name="nazwiskoF" id="nazwiskoF" value="$row->Nazwisko"/>
                <label class="prefix">Data urodzenia:</label><input type="date" name="data_urF" id="data_urF" value="$row->Data_ur"/>
                <label class="prefix">Numer telefonu:</label><input type="text" name="numerF" id="numerF" value="$row->Numer_tel"/>
                <label class="prefix">Zamieszkanie:</label><input type="text" name="zamieszkanieF" id="zamieszkanieF" value="$row->Zamieszkanie"/>
                <label class="prefix">Stanowisko:</label><input type="text" name="stanowiskoF" id="stanowiskoF" value="$row->Stanowisko"/>
                    <input type="reset" value="Submit" onclick="SubmitOpis();"></input>
                </form>
                html;   
                }
                $result->free_result();

$connect->close();
?>

