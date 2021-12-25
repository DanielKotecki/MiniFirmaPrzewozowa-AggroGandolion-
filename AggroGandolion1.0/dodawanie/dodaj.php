<?php
$errorTowar='';
$errorWaga='';
$errorZ_miej='';
$errorDo_miej='';
$errorCena='';
$errorData='';
$Towar='';
$Waga='';
$Z_miej='';
$Do_miej='';
$Cena='';
$Data='';



 ?>


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

if ((empty($_POST["towar"]))||(empty($_POST["waga"]))||
(empty($_POST["z_miej"]))||(empty($_POST["do_miej"]))||(empty($_POST["cena"]))||(empty($_POST["data"]))) {
  $errorTowar="Pole Wymagane";
  $errorWaga="Pole Wymagane";
  $errorZ_miej="Pole Wymagane";
  $errorDo_miej="Pole Wymagane";
  $errorCena="Pole Wymagane";
  $errorData="Pole Wymagane";

}

?>

<div id="form">



  <link rel="stylesheet" href="css/dodajStyle.css">
<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h1 id="naglowek">Dodaj Towar</h1><br>
  <div class="input_dod">

    <label>Towar</label><br>
    <?php if ($errorTowar!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorTowar"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="towar" id="towar">
  </div>
  <div class="input_dod">
    <label>Waga(kg)</label><br>
    <?php if ($errorWaga!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorWaga"; ?>
      </span><br>
    <?php } ?>

        <input type="number" name="waga"min="0" id="waga">
  </div>
  <div class="input_dod">
    <label>Skąd</label><br>
    <?php if ($errorZ_miej!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorZ_miej"; ?>
      </span><br>
    <?php } ?>
      <input type="text" name="z_miej" id="z_miejscowosci">
  </div>
  <div class="input_dod">
    <label>Dokąd</label><br>
    <?php if ($errorDo_miej!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorDo_miej"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="do_miej" id="do_miejsowosci">
  </div>
  <div class="input_dod">
    <label>Gratyfikacja</label><br>
    <?php if ($errorCena!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorCena"; ?>
      </span><br>
    <?php } ?>
    <input type="number" name="cena"min="0" id="cena">
  </div>
  <div class="input_dod">
    <label>Data dostawy</label><br>

    <?php if ($errorData!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorData"; ?>
      </span><br>
    <?php } ?>

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
    <input type="button" id="dodaj" value="Wróć do ofert" onclick="window.location.href = './../Wyświetlanie z bazy/wyswietlanie.php'" />

  </div>
</form>
</div>
    </body>
</html>
<!-- Dodawanie -->
<?php


if ((!empty($_POST["towar"]))&&(!empty($_POST["waga"]))&&
(!empty($_POST["z_miej"]))&&(!empty($_POST["do_miej"]))&&(!empty($_POST["cena"]))&&(!empty($_POST["data"])))  {
  if ( isset($_POST['dodaj'])) {

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



}}




 ?>
