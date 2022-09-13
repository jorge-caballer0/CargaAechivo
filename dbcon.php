<?php
$conn = mysqli_connect('localhost','root','','archivos_en_linea');
if(!$conn){
    die("Cannot connect to the database. Error: ".mysqli_error($conn));
}
?>