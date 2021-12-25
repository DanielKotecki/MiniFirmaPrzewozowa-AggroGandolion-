<?php
$errorTowar='';
$errorWaga='';
$errorZ_miej='';
$errorDo_miej='';
$errorCena='';
$errorData='';
$errorAddr='';
$errorCheck='';
$Towar='';
$Waga='';
$Z_miej='';
$Do_miej='';
$Cena='';
$Data='';
$Addr='';
$regu='';

 //Sprawdzenie pól formularza -
  if (isset($_POST['dodaj']))
 {
 $Towar=$_POST['towar'];
 $Waga=$_POST['waga'];
 $Z_miej=$_POST['z_miej'];
 $Do_miej=$_POST['do_miej'];
 $Cena=$_POST['cena'];
 $Data=$_POST['data'];
 $Addr=$_POST['addr'];
 /*$regu=$_POST['check_reg'];*/

       if (! $Towar) {
         $errorTowar="Pole Wymagane";
       }
       if (! $Waga) {
         $errorWaga="Pole Wymagane";
       }
       if (! $Z_miej) {
         $errorZ_miej="Pole Wymagane";
       }
       if (! $Do_miej) {
         $errorDo_miej="Pole Wymagane";
       }
       if (! $Cena) {
         $errorCena="Pole Wymagane";
       }
       if (! $Data) {
         $errorData="Pole Wymagane";
       }
       if (! $Addr) {
         $errorAddr="Pole Wymagane";
       }
       /*if ($regu !='on') {
         $errorCheck="Pole Wymagane";
       }*/
 }

 ?>
<div id="nazwaDodaj">
  <h1>Dodaj</h1><br>
</div>

  <link rel="stylesheet" href="css/dodajStyle.css">
<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="input_dod">

    <label>Towar</label><br>
    <?php if ($errorTowar!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorTowar"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="towar" class="iinput">
  </div>
  <div class="input_dod">
    <label>Waga(t)</label><br>
    <?php if ($errorWaga!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorWaga"; ?>
      </span><br>
    <?php } ?>
    <input type="number" name="waga" class="iinput">
  </div>
  <div class="input_dod">
    <label>z miejscowości</label><br>
    <?php if ($errorZ_miej!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorZ_miej"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="z_miej" class="iinput">
  </div>
  <div class="input_dod">
    <label>do miejscowości</label><br>
    <?php if ($errorDo_miej!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorDo_miej"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="do_miej" class="iinput">
  </div>
  <div class="input_dod">
    <label>cena</label><br>
    <?php if ($errorCena!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorCena"; ?>
      </span><br>
    <?php } ?>
    <input type="number" name="cena" class="iinput">
  </div>
  <div class="input_dod">
    <label>Data dostawy</label><br>
    <?php if ($errorData!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorData"; ?>
      </span><br>
    <?php } ?>
    <input type="date" name="data" class="iinput">
  </div>
  <div class="input_dod">
    <label>addr wymagany:</label><br>
    <?php if ($errorAddr!=null) { ?>
      <span class="poprwanoscformularza">
        <?php echo "$errorAddr"; ?>
      </span><br>
    <?php } ?>
    <input type="text" name="addr" class="iinput">
  </div>
<!--  <div class="input_dod">
    <input type="checkbox" name="check_reg" value="">
    <label>Zaakceptuj regulamin</label>
  </div>-->


<div class="input_dod">

    <label></label><br>
    <input type="submit" name="dodaj" value="Dodaj" id="dodaj">
</div>
</form>




<!-- Dodawanie  -->

<?php
if ($errorTowar=''&&
$errorWaga=''&&
$errorZ_miej=''&&
$errorDo_miej=''&&
$errorCena=''&&
$errorData=''&&
$errorAddr=''&&
$errorCheck='') {

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
}
}
 ?>
