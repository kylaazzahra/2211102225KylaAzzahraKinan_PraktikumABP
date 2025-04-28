<?php 
$nama = "Kyla Azzahra Kinan";
$umur = 21;

echo "Hello, Kyla Azzahra Kinan!";
echo "</br>";
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";
?>

<?php 
$a = 10;
$b = 5;
echo $a + $b; // Penjumlahan 
echo "</br>";
echo $a - $b; // Pengurangan 
echo "</br>";
echo $a * $b; // Perkalian 
echo "</br>";
echo $a / $b; // Pembagian 
echo "</br>";
echo $a % $b; // Modulus sisa bagi
echo "</br>";
?>

<?php
$nilai = 80;
if ($nilai >= 75) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
echo "</br>";
?>


<?php
$hari = "Senin";
 
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}
?>


<?php for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
?>

<?php
$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}
?>

<?php
$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}
?>

<?php $hewan = ["Kucing", "Anjing", "Burung"]; 
echo $hewan[0]; // Output: Kucing ?>
