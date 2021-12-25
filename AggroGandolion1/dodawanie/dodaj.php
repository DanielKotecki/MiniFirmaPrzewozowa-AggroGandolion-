<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <title>
      Dodawanie Oferty
        </title>
          <link rel="stylesheet" href="./css/formularz.css">
    </head>
    <body>

  <?php include("connect.php") ?> <!--wyprowadzanie na ekran -->
<?php $result=$mysqli->query("SELECT * FROM dod_zle ORDER BY id ");
print_r($result);
// dodawanie

if (isset($_POST['dodaj'])) {
  $towar=$_POST['towar'];
  $waga=$_POST['waga'];
  $z_miej=$_POST['z_miej'];
  $do_miej=$_POST['do_miej'];
  $cena=$_POST['cena'];
  $data=$_POST['data'];
  $addr=$_POST['addr'];
  $zmienna=$mysqli->prepare("INSERT dod_zle(towar,waga,z_miej,do_miej,cena,data_dostawy,addr) VALUES (?,?,?,?,?,?,?)");

  $zmienna->bind_param("sississ",$towar,$waga,$z_miej,$do_miej,$cena,$data,$addr);
  $zmienna->execute();
  $zmienna->close();
header("Location:./../Wyświetlanie z bazy/wyswietlanie.php");
}

?>
<div id="form">



  <link rel="stylesheet" href="css/dodajStyle.css">
<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h1 id="naglowek">Dodaj Towar</h1><br>
  <div class="input_dod">

    <label>Towar</label><br>

    <input type="text" name="towar" id="towar">
  </div>
  <div class="input_dod">
    <label>Waga(kg)</label><br>
        <input type="number" name="waga"min="0" id="waga">
  </div>
  <div class="input_dod">
    <label>Skąd</label><br>
      <input type="text" name="z_miej" id="z_miejscowosci">
  </div>
  <div class="input_dod">
    <label>Dokąd</label><br>

    <input type="text" name="do_miej" id="do_miejsowosci">
  </div>
  <div class="input_dod">
    <label>Gratyfikacja</label><br>

    <input type="number" name="cena"min="0" id="cena">
  </div>
  <div class="input_dod">
    <label>Data dostawy</label><br>
        <input type="date" name="data" id="data">
  </div>
  <div class="input_dod">
    <label>Adr(opcjonalny)</label><br>
        <input type="text" name="addr" id="addr">
  </div>
<!--  <div class="input_dod">
    <input type="checkbox" name="check_reg" value="">
    <label>Zaakceptuj regulamin</label>
  </div>-->
  <div class="butt_dod">

    <input type="submit" name="dodaj" value="Dodaj" id="dodaj">
  </div>
</form>
</div>
    </body>
</html>
