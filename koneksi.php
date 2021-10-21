<?php 

$host="localhost";
$username="root";
$password="";
$databasename="akedemikkk";
$con=@mysqli_connect($host,$username,$password,$databasename);


if(!$con){
    echo"eror:".mysqli_connect_eror();
        exit();
}

?>