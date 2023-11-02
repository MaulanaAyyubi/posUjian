<div class="content">
    <div class="row">
        <a href="?m=penjualan&s=tambah" class="btn btn-info">Tambah Penjualan</a>
        <h2>Modul Penjualan</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Supplier Id</th>
                    <th>total Penjualan</th>
                    <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include_once('koneksi.php');
                $sql = 'SELECT penjualan.id, supplier.nama, penjualan.total FROM supplier JOIN penjualan ON supplier.id=penjualan.supplier_id';
                $query = mysqli_query($koneksi,$sql);
                if (mysqli_num_rows($query) == 0) {
                    echo "<tr><td colspan='5'>Data Kosong</td></tr>";
                } else {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['nama'] . "</td>";
                        echo "<td>Rp " . number_format($r['total'],0,',','.') . "</td>";
                        echo '<td><a href="?m=penjualan&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=penjualan&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Penjualan akan menghilangkan SEMUA data yang ada pada Penjualan tersebut, yakin Penjualan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>