<?php

$servername =   'localhost';
$user       =   'root';
$pass       =   '';
$dbname     =   'data dictionary';

$conn = new mysqli ($servername,$user,$pass,$dbname);

if($conn->connect_error){
    echo 'Connection fail';
}
    // echo 'Connection success'; 
?>