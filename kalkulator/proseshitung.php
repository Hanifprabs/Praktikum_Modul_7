<?php
// Get the form data
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// Ensure that the inputs are numeric
if (is_numeric($angka1) && is_numeric($angka2)) {
    if ($operator == "tambah") {
        $hasil = $angka1 + $angka2;
    } else if ($operator == "kurang") {
        $hasil = $angka1 - $angka2;
    } else if ($operator == "kali") {
        $hasil = $angka1 * $angka2;
    } else if ($operator == "bagi") {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } else {
            $hasil = "Error: Pembagi tidak boleh nol";
        }
    } else if ($operator == "modulo") {
        if ($angka2 != 0) {
            $hasil = $angka1 % $angka2;
        } else {
            $hasil = "Error: Pembagi tidak boleh nol";
        }
    } else {
        $hasil = "Operator tidak valid";
    }

    echo "<br> Hasil dari $angka1 $operator $angka2 adalah $hasil";
} else {
    echo "Error: Input harus berupa angka";
}
?>
