<link href="userProfile.css" rel="stylesheet">
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];

$q="SELECT * FROM doswiadczenie WHERE User_id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {
                echo<<<html
                    <div class="row display">
                        <div class="col-sm-3 col-xs-12">
                            <label class="prefix">Stanowisko:</label><label>$row->Stanowisko</label><br>
                            <label class="prefix">Lokalizacja:</label><label>$row->Lokalizacja</label>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <label class="prefix">Firma:</label><label>$row->Firma</label><br>     
                            <label class="prefix">Okres:</label><label>$row->Okres</label>
                        </div>
                    </div>
                html;   
                }
                $result->free_result();

$connect->close();
?>


<!-- <label class="prefix">Stanowisko:</label><label>$row->Stanowisko</label>
                        <label class="prefix">Lokalizacja:</label><label>$row->Lokalizacja</label>                        
                        <label class="prefix">Firma:</label><label>$row->Firma</label>            
                        <label class="prefix">Okres:</label><label>$row->Okres</label>  -->