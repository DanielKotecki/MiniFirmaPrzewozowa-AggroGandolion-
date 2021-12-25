<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <title>
          Ofert
        </title>
      <link rel="stylesheet" href="./css/styleWyswietlanie.css">
      <link rel="stylesheet" href="./css/fontello/css/arrow.css">
      <link rel="stylesheet" href="./css/header.css">
    </head>
    <body>
<div id="Top">
      <div id="LogoL">

      </div>
      <div id="zakladki">
        <a href="./../mainPage.html">
        <div class="op">
        <h3>Strona główna</h3>
      </div></a>
      <a href="./../dodawanie/dodaj.php">
        <div class="op">
          <h3>Dodaj ofertę</h3>
        </div></a>
        <a href="./wyswietlanie.php">
        <div class="op">
        <h3>Oferty</h3>
        </div></a>
        <div style="clear:both"></div>

      </div>
      <div id="wyloguj">
        <h3 id="wy">Wyloguj</h3>
      </div>
      <div style="clear:both"></div>

</div>
<!-- <div id="pojemnik"> -->
  <?php include("./connect.php");
  $rezultat=$mysqli->query("SELECT * FROM dod_zle ORDER BY id");
 while ($of = mysqli_fetch_array($rezultat)) {
   echo '<div class="oferta">';

    echo '<div id="obrazekL">';
      echo '<img src="./css/building-ceiling-empty-209251 (2).jpg"/>';
    echo "</div>";
    echo '<div id="DaneR1">';
      echo '<h3 class="in">'.'Informacje'.'</h3>';
     echo '<h3 class="dane">'.'Droga: '.'('.$of['z_miej'].')'.'<i class="icon-right">'.'</i>'.'('.$of['do_miej'].')'.'</h3>';
      echo '<h3 class="dane">'.'Waga: '.$of['waga'].'kg'.'</h3>';
     echo '<h3 class="dane">'.'Cena: '.$of['cena'].'zł'.'</h3>';
     echo '<h3 class="dane">'.'Data dostawy: '.$of['data_dostawy'].'</h3>';
     echo '<h3 class="dane">'.'Adr(opcjonalny): '.$of['addr'].'</h3>';
      echo "</div>";
      echo '<div id="DaneR2">';
      echo '<h3 class="naglowek">'.$of['towar'].'</h3>';
      echo'<input type="submit" id="przy" value="Przyjmuję"> ';
      echo "</div>";
      echo '<div style="clear:both">'; echo "</div>";

   echo "</div>";
 }

  ?>
<!-- </div> -->
    </body>
</html>
