<?php
/*
$hn= 'localhost';
$db ='apuntes';
$un ='root';
$pw ='joaquin12';
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acumulativa2";

if(!$con = new mysqli($servername, $username, $password, $dbname))
{

	die("failed to connect!");
}



?>

