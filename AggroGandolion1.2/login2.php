<?php
  session_start();
  echo  'Witaj ', $_SESSION['logged']['login'], ' na stronie!';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hehehe</title>
  </head>
  <body>

    <?php
    $sql = "SELECT * FROM `users` WHERE login = '$login' and pass = '$pass'";

    if($rersult = $connect->query($sql)) {
      if ($result->num_rows == 1) {
        $connect->close();
        $SESSION['logged']['login'] = $login;
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $city = $row['city'];
        echo <<<DATA
        email: $email<br>
        miasto: $city<br>
DATA;

        header('location: ./login.php');
      }
      else {

        $_SESSION['error'] = "Ty pizdo zle wpisales dane!";
        header('location: ./login.php');
       }
    }
  else {
    $_SESSION['error'] = 'Błąd serwera!';
    header('location: ./login.php');
    $login = $_POST['login'];
    $pass = $_POST['pass'];
  }


else {
  header('location: ./login.php');
}

if(isset($_GET['pass']))  {
  echo "Form";
  ?>
    <form action="./script/updatepass.php" method="post">
      <input type="password"  name="pass_old" placeholder="Podaj stare haslo">Stare haslo<Br><br>
      <input type="password"  name="pass_old" placeholder="Podaj nowe haslo">Nowe haslo<Br><br>
      <input type="password"  name="pass_old" placeholder="Podaj nowe haslo">Powtorz nowe haslo haslo<Br><br>
        <input type="submit" nam="button" value="zmien haslo" />
    </form>

  <?php
} else {
  echo "<a href=\"./login2.php?pass=\">Zmień hasło</a>";

}
?>

  </body>
</html>
