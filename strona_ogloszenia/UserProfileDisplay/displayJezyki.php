<link href="userProfile.css" rel="stylesheet">
<?php


$connect=new mysqli('localhost', 'root', '', 'system_ogloszen');
$user_id = $_SESSION['zalogowany'];

$q="SELECT * FROM jezyki WHERE User_id = $user_id";
    $result=$connect->query($q);
            while($row=$result->fetch_object())
                {
                echo<<<html
                    <div class="display">
                        <p>$row->Jezyk</p>
                        <p>$row->Poziom</p>                                           
                    </div>
                html;   
                }
                $result->free_result();

$connect->close();
?>