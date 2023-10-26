<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $supplier_id   = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql="INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total' ";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=penjualan');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=penjualan";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>