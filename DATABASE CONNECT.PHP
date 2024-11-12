<?php
// hostname
$servername= "localhost";
//username
$username="root";
//password
$password="";
//data base name
$dbname= "IVON";
$conn=  new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error ){
    die( "connection failed:" . $conn->connect_error);
}
//echo "connected successfully";


?>