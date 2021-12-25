<?php
include("connect.php");
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  mysqli_query($mysqli,"INSERT INTO completed SELECT * FROM dod_zle where id='$id'");
mysqli_query($mysqli,"DELETE FROM dod_zle where id='$id'");
    header("Location:./wyswietlanie.php ");
}
