<?php
$conn=mysqli_connect("localhost","root","","osrmntja");
function conn(){
    $conn=mysqli_connect("localhost","root","","osrmntja");
    return $conn;
}