<?php
session_start();

require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_pass, $db_name);
@$connect->set_charset('utf8');

if($connect -> connect_errno!=0) {
  echo "Error: ".$connect->connect_errno;
}

else {
  $login = $_POST['login'];
  $pass = $_POST['pass'];

  $query = "SELECT login, pass from users where login = '$login' and pass = '$pass'";
  $query2 = "SELECT * FROM completed";

  if($result = @$connect->query($query))
  {
    $countUsers = $result->num_rows;
    if($countUsers == 1)
    {
      // talica asocjacyjna - pobieranie wiersza
      $row = $result->fetch_assoc();

      $_SESSION['login'] = $row['login'];


      // czyszczenie pamieci z zapytan
      $result->close();

      header('Location: ./platform/my_offers.php');
      exit;

    }
    else {

    }
  }

  // zamkniecie polaczenia
  $connect -> close();
}






 ?>
