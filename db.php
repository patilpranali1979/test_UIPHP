<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test_ui";

$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn) {
    echo "not connected";
} 


?>

