<?php
 $m = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
 switch ($m) {
     case 'tampil': default:
         include "penjualan/tampil.php"; break;
     case 'tambah':
         include "penjualan/tambah.php"; break;
     case 'simpan':
         include "penjualan/simpan.php"; break;
     case 'edit':
         include "penjualan/edit.php"; break;
     case 'update':
        include "penjualan/update.php"; break;
    case 'hapus':
        include "penjualan/hapus.php"; break;
 }