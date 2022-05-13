<?php
$absen = $_POST['nama'];
$tugas = $_POST['nt'];
$uts = $_POST['nu'];
$uas = $_POST['na'];
$praktek = $_POST['np'];

if ($absen != "") {
    $nilaiabsen = 10 / 100;
    $nt = $tugas * 10 / 100;
    $nu = $uts * 30 / 100;
    $na = $uas * 40 / 100;
    $np = $praktek * 10 / 100;
    $nilaiakhir = $nilaiabsen + $nt + $nu + $na + $np;
    if ($nilaiakhir > 80) {
        echo "Nilai Akhir : A";
    } elseif ($nilaiakhir > 70 && $nilaiakhir <= 80) {
        echo "Nilai Akhir : B";
    } elseif ($nilaiakhir > 60 && $nilaiakhir <= 70) {
        echo "Nilai Akhir : C";
    } elseif ($nilaiakhir > 50 && $nilaiakhir <= 60) {
        echo "Nilai Akhir : D";
    } elseif ($nilaiakhir >= 50) {
        echo "Nilai Akhir : E";
    }
}
