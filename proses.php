<?php
mysql_connect('localhost','root','');
mysql_select_db('baru');
$id=$_POST['id'];
$judul=$_POST['judul'];
$artis=$_POST['artis'];
$album=$_POST['album'];
$tahun=$_POST['tahun'];
$sql=mysql_query("insert into musik set id='$id', judul='$judul', artis='$artis', album='$album', tahun='$tahun'");
if($sql){
header("location:musik-view.php");
}
else{
echo"Failed";}
?>