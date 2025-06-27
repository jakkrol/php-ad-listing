<link href="userProfile.css" rel="stylesheet">
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];

$q="SELECT * FROM kursy WHERE User_id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {
                echo<<<html
                    <div class="display">
                        <p>$row->Nazwa</p>
                        <p>$row->Organizator</p>
                        <p>$row->Okres</p>
                    </div>
                html;
                }
                $result->free_result();

$connect->close();
?>