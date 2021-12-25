<?php
$host="localhost";
$db_user="root";
$db_password="";
$db_name="zlecenia";
$mysqli = @new mysqli($host,$db_user,$db_password,$db_name);
$mysqli->set_charset("utf8");
if(mysqli_connect_errno()){
  echo "Błąd bazy danych";
}

 ?>
