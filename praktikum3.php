<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 2 - Static Method</title>
</head>
<body>

<?php
class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}
?>

<h2>Kalkulator Matematika Sederhana</h2>
<form method="POST">
    <label>Angka 1 (A):</label><br>
    <input type="number" name="angka1" step="any" required><br><br>
    
    <label>Angka 2 (B):</label><br>
    <input type="number" name="angka2" step="any" required><br><br>

    <label>Sisi Persegi:</label><br>
    <input type="number" name="sisi" step="any" required><br><br>

    <button type="submit" name="submit">Hitung</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $sisi = $_POST['sisi'];

    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Penjumlahan ($a + $b) = " . Matematika::tambah($a, $b) . "<br>";
    echo "Pengurangan ($a - $b) = " . Matematika::kurang($a, $b) . "<br>";
    echo "Perkalian ($a * $b) = " . Matematika::kali($a, $b) . "<br>";
    echo "Pembagian ($a / $b) = " . Matematika::bagi($a, $b) . "<br>";
    echo "Luas Persegi (sisi $sisi) = " . Matematika::luasPersegi($sisi) . "<br>";
}
?>

</body>
</html>