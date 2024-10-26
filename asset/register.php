<?php
include "formlog.html";
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'datawebshop';

$conn = new mysqli($server, $user, $pass, $database);
if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8' ");
    echo 'Da ket noi';
    //include "formlog.html";
} else {
    echo 'Ket noi that bai';
}
