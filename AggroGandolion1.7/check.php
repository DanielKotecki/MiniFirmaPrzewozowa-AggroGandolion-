<?php session_start(); ?>
<?php

echo $_POST['login'].$_POST['pass'];
if(isset($_POST['button']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
  require_once('./connect.php');
  if(!$connect->connect_errno) {
    echo $connect->connect_erno;
    $login = $connect->real_escape_string(htmlentities($_POST['login']));
    $login = $connect->real_escape_string(htmlentities($_POST['pass']));

    $sql = "SELECT * FROM `users` WHERE login = '$login' and pass = '$pass'";

    if($rersult = $connect->query($sql)) {
      if ($result->num_rows == 1) {
        $connect->close();
        $SESSION['logged']['login'] = $login;
        header('location: ./login.php');
      }
      else {

        $_SESSION['error'] = "Ty pizdo zle wpisales dane!";
        header('location: ./login.php');
       }
    }
    else {
      echo 'error';
    }
  }
  else {
    $_SESSION['error'] = 'Błąd serwera!';
    header('location: ./login.php');
  }

  $login = $_POST['login'];
  $pass = $_POST['pass'];
}
else {
  header('location: ./login.php');
}

?>
