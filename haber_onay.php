<?php
require_once("vtbaglan.php");
$id = $_POST["haber_id"];
mysqli_query($baglanti, "update icerik set onay='1' where haber_id='$id'") or die("Sorgu hatasi");
echo "<script>alert('Haber Yayınlandı..')</script>";
header("Refresh: 0;url=admin_anasayfa.php");

?>