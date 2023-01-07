<?php
$host="localhost";
$database="db1";
$password="password";
$user="::1";

$connection = mysqli_connect($host , $database , $password , $user);

if($connection)
{
    echo"Establised";
}
else
{
    die("Error");
}
$name=_POST("name");
$name=_POST("email");
$name=_POST("Phone");
$sql = "INSERT INTO  contact(name,email,phone)VALUES($name,$email,$Phone)";
if(mysqli_query($connection,$sql))
{
    echo"inserted";
}
else
{
    echo"rejected";
}
mysqli_close($connection);
