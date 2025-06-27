<link href="userProfile.css" rel="stylesheet">
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];

$q="SELECT * FROM uzytkownicy WHERE Id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {
                echo<<<html
                <div class="row">
                <div class="col-sm-4 col-xs-12">
                <img src="test.jpg" class="img-fluid" alt="UserPhoto">
                </div>
                <div class="col-sm-4 col-xs-6 text-left">
                <label class="prefix">Imie:</label><label id="imie">$row->Imie</label><br>
                <label class="prefix">Nazwisko:</label><label id="nazwisko">$row->Nazwisko</label><br>
                <label class="prefix">Numer telefonu:</label><label id="numer">$row->Numer_tel</label>
                </div>
                <div class="col-sm-4 col-xs-6 text-left">
                <label class="prefix">Data urodzenia:</label><label id="data_ur">$row->Data_ur</label><br>
                <label class="prefix">Numer telefonu:</label><label id="numer">$row->Numer_tel</label><br>
                <label class="prefix">Stanowisko:</label><label id="akt_stanowisko">$row->Stanowisko</label>
                </div>
                </div>
                html;   
                }
                $result->free_result();

$connect->close();
?>


                <!-- <p>
                  <label class="prefix">Imie:</label><label id="imie">$row->Imie</label>
                  <label class="prefix">Nazwisko:</label><label id="nazwisko">$row->Nazwisko</label>
                </p>
                <p>
                  <label class="prefix">Data urodzenia:</label><label id="data_ur">$row->Data_ur</label>
                  <label class="prefix">Numer telefonu:</label><label id="numer">$row->Numer_tel</label>
                </p>
                <p>
                  <label class="prefix">Zamieszkanie:</label><label id="akt_zamieszkanie">$row->Zamieszkanie</label>
                  <label class="prefix">Stanowisko:</label><label id="akt_stanowisko">$row->Stanowisko</label>
                </p> -->