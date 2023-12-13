<?php

$price =$_POST['price'];
$text =$_POST['text'];

$server = "84.201.184.150";
$login = "090303-pia-21_d";
$pass = "rDkQZuPP1s";
$name_db = "090303-pia-21_denchik";


$link = mysqli_connect($server, $login,$pass,$name_db);
$link->set_charset("utf8");

$sql = "INSERT INTO icecream (price, text) VALUES ('$price','$text')";
if ($link->query($sql) === TRUE){
    echo "данные отправленые";
} else{
    echo "Error: " . $sql . "<br>" . $sql->error;
}
?>
<button type="submit"><a href="products.php">На главную</a></button>