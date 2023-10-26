<?php
 $m = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
 switch ($m) {
     case 'tampil': default:
         include "supplier/tampil.php"; break;
     case 'tambah':
         include "supplier/tambah.php"; break;
     case 'simpan':
         include "supplier/simpan.php"; break;
     case 'edit':
         include "supplier/edit.php"; break;
     case 'update':
        include "supplier/update.php"; break;
    case 'hapus':
        include "supplier/hapus.php"; break;
 }