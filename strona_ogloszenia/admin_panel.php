<?php
session_start();
if(!isset($_SESSION['zalogowany_admin'])){
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
    <title>Document</title>
</head>
<body>
    <h1>Witaj w panelu admina</h1>
    <a href="admin_Add.php">Dodaj ogloszenie</a>
</body>
</html>