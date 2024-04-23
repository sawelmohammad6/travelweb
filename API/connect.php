<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="travellovers";

$con = mysqli_connect($server_name,$username,$password,$database_name);
if(!$con)
{
    die("Connection Failed:". mysqli_connect_error());
    //echo 'done';
}
?>