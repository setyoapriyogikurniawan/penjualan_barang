<?php
/**
 * Fungsi untuk menghasilkan kode random
 *
 * @param int $length Panjang kode yang diinginkan
 * @return string Kode random yang dihasilkan
 */
function kode_random($length) {
    $data = "1234567890";
    $string = 'PJ-';

    for ($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($data) - 1);
        $string .= $data[$pos];
    }
    return $string;
}

$kode = kode_random(10);
echo $kode;
?>