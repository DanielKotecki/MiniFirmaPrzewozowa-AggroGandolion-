<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/login.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <title>Logowanie | Aggro-Gandolion</title> -->
  </head>
  <body class="registerBg">

<div class="container">
  <!-- form -->
  <form id="registerForm">
    <h2 id="registerH2">FORMULARZ REJESTRACYJNY</h2>
    <p style="color:red; text-align:center;">Wszystkie pola są obowiązkowe!</p>
    <div class="form-group">
      <label for="formGroupExampleInput" class="registerPar">Login</label>
      <input type="login" class="form-control" id="registerMail" placeholder="np. JanuszNosacz69">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2" class="registerPar">Hasło</label>
      <input type="password" class="form-control" id="registerPassword" placeholder="*********">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2" class="registerPar">Powtórz hasło</label>
      <input type="password" class="form-control" id="registerPassword" placeholder="*********">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput" class="registerPar">E-mail</label>
      <input type="login" class="form-control" id="registerMail" placeholder="np. JanuszNosacz69@promocja.pl">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput" class="registerPar">Powtórz E-mail</label>
      <input type="login" class="form-control" id="registerMail" placeholder="np. JanuszNosacz69@promocja.pl">
    </div>
    <input type=checkbox id="RegisterRegulamin"> Akceptuję <a href="regulamin.html">regulamin</a> oraz <a href="privacyPolicy.html">politykę prywatności</a>
    <center><button id="registerRegisterButton" onclick="window.location.href='/register.php'">Rejestracja</button></center>
  </form>
  <!-- end of form -->
</div>
<footer id="registerFooter">
		Autorzy: Tomasz Kamiński, Daniel Kotecki. Copyright 2019(c), wszystkie prawa zastrzeżone.
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
