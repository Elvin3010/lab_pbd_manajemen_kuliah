<?php 
   $servername = "127.0.0.1";
   $username = "root";
   $password = "";
   $dbname = "manajemen_universitas";

   $connect = new mysqli($servername, $username , $password , $dbname);

   if ($connect->connect_error) {
   	die("Connection Failed:" + mysqli_connect_error());
   } else {
   	echo "Succesfully Connected";
   }

 ?>