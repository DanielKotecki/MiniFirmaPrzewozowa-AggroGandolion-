<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <title>
          Ofert
        </title>

    </head>
    <body>
<div id="pojemnik">
<h3>Podaj e-mail na który wyślemy numer do firmy na który będziesz mógł sie skontaktować</h3>

   <form class="form" action="wyslij.php" method="post">
      <label id="label">E-mail</label>
     <input type="text" name="email" value="">
     <input type="submit" name="wyslij" value="Wyślij">
   </form>
</div>



    </body>
</html>
<?php
$email=$mysqli->query("SELECT email FROM users where id=$id");

 ?>
