<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $sql="INSERT INTO supplier SET nama='$nama', alamat='$alamat', kontak='$kontak' ";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=supplier');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=supplier";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>