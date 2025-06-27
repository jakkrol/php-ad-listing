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
                    <input type="text" name="linki" id="linki" value="$row->Linki"/>
                    <input type="reset" value="Submit" onclick="SubmitLinki();"></input>
                </form>
                html;   
                }
                $result->free_result();

$connect->close();
?>

