<?php

$adi=$_POST['ad'];
$soyadi=$_POST['soyad'];
$sifree=$_POST['sifre'];
$id=$_POST['id'];

$baglanti=mysqli_connect("localhost","root","","dbuyeislem2");
$yapacagimizislem=mysqli_query($baglanti,"insert into tblislem(Id,ad,soyad,sifre) values('$id','$adi','$soyadi','$sifree')");
if($yapacagimizislem){
    echo"Başarılı";
} else{
    echo"Başarısız";
}

?>