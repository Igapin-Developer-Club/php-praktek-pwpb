<?php
$satu=$_POST['satu'];
$dua=$_POST['dua'];
$operator=$_POST['operator'];
$tambah=$satu+$dua;
$kurang=$satu-$dua;
$kali=$satu*$dua;
$bagi=$satu/$dua;
if (empty($satu or $dua)) {
    
}
else if ($operator == "Pilih Salah Satu !")
{
echo "Maaf Anda Tidak Memilih Operator..!";
}
else if ($operator=="Penjumlahan")
{
echo "Hasilnya Adalah $tambah";
}
else if ($operator=="Pengurangan")
{
echo "Hasilnya Adalah $kurang";
}
else if ($operator=="Pembagian")
{
echo "Hasilnya Adalah $bagi";
}
else if ($operator=="perkalian")
{
echo "Hasilnya Adalah $kali";
}
?>