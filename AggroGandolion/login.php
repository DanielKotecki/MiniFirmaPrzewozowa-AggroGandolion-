<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/login.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Logowanie | Aggro-Gandolion</title>
  </head>
  <body class="loginBg">

<div class="container">
  <!-- form -->
  <form id="loginForm">
    <h2 id="loginH2">LOGOWANIE</h2>
    <div class="form-group">
      <label for="formGroupExampleInput" class="loginPar">Login</label>
      <input type="mail" class="form-control" id="loginMail" placeholder="np. JanuszNosacz69">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2" class="loginPar">Hasło</label>
      <input type="password" class="form-control" id="loginPassword" placeholder="*********">
    </div>
    <a href="#"><p id="forgotPassword">Nie pamiętam hasła</p></a>
    <center><input type="submit" id="loginButton" value="Zaloguj" /></center>
    <br>
    <p style="text-align:center">Nie masz konta? <a href="register.php">Zarejestruj się.</a></p>
  </form>
  <!-- end of form -->
</div>
<footer id="loginFooter">
		Autorzy: Tomasz Kamiński, Daniel Kotecki. Copyright 2019(c), wszystkie prawa zastrzeżone.
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
