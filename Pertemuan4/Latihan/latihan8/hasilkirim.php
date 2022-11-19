<?php
if (empty($_POST['name'])) {
    header("Location:kosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>