<?php

use Carbon\Carbon; // Include Class in COntroller


function treeCondition($s) {
    if($s == "life")
        $result = "Hidup";
    else
        $result = "Mati";

    return $result;
}

function age($date) {
    return Carbon::parse($date)->diff(\Carbon\Carbon::now())->format('%m Bulan %d Hari');
}

function format_rupiah($angka, $kurs = '')
{
    if ($angka === '') {
        $angka = 0;
    }

    if ($kurs) {
        return $kurs . ' ' . number_format($angka);
    } else {
        return '' . number_format($angka, 0, ',', '.') . ',-';
    }
}


function jk($jk)
{
    if ($jk == "L") {
        $result = "Laki - Laki";
    } elseif ($jk == "P") {
        $result = "Perempuan";
    } else {
        $result = "-";
    }

    return $result;
}

function removeDot($str)
{
    return str_replace(',', '', str_replace('.', '', $str));
}


function statusColor($x)
{
    if($x == "y") {
        $color = "success";

    }elseif($x == "x") {
        $color = "danger";

    }else{
        $color = "warning";
    }

    return $color;
}


function statusLabel($x)
{
    if ($x == "y") {
        $label = "Diterima";

    } elseif ($x == "x") {
        $label = "Ditolak";

    } else {
        $label = "Belum Diproses";
    }

    return $label;
}
