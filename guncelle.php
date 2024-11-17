<?php

$adi=$_POST['ad'];
$soyadi=$_POST['soyad'];
$sifree=$_POST['sifre'];
$id=$_POST['id'];

$baglanti=mysqli_connect("localhost","root","","dbuyeislem2");
$yapacagimizislem=mysqli_query($baglanti,"update tblislem set ad='$adi', soyad='$soyadi', sifre='$sifree' where Id='$id'");
if($yapacagimizislem){
    echo"Başarılı";
} else{
    echo"Başarısız";
}

?>