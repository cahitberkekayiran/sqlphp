<?php
$sifree=$_POST['sifre'];
$id=$_POST['id'];


$baglanti=mysqli_connect("localhost","root","","dbuyeislem2");
$yapacagimizislem=mysqli_query($baglanti,"select * from tblislem where Id='$id' and sifre='$sifree'");
$adet=mysqli_num_rows($yapacagimizislem);

if($adet>0){
    header("location:uyegiris.html");
} else{
    echo"böyle bir üye yoktur";
}