<?php
$server= "localhost";
$user_db= "root";
$pass_db= "";
$db_name= "crudaliyanovita";

$koneksi=mysqli_connect("localhost","root","","crudaliyanovita");

if(mysqli_connect_error()){
  echo "koneksi gagal :".mysqli_connect_error(); 
}
