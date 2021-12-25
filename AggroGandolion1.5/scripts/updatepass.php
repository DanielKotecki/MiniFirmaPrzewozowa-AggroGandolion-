<?php
session_start();
  if(!empty($_POST['pass_old']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])) {

  } else {
    $_SESSION['error'] = 'Uzupelnij wszystkie pola';
    header('location: ../login2.php?pass=');
  }

  ?>
