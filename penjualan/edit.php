<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Edit Penjualan</h1>
        </div>
        <div class="col-4">
            <a href="?m=penjualan&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM penjualan WHERE id='$id'";
        $query  = mysqli_query($koneksi, $sql);
        $row    = mysqli_fetch_array($query);
        $sqls   = "SELECT * FROM supplier ORDER BY nama";
        $querys = mysqli_query($koneksi, $sqls);
        // $rows   = mysqli_fetch_array($querys);        ?>
        <div class="col">
            <form action="?m=penjualan&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama Supplier</label>
                    <select name="supplier_id" class="form-control" required autofocus>
                        <?php
                        while($r=mysqli_fetch_array($querys)) {
                        ?>
                            <option value="<?=$r['id']?>" <?= $r['id']==$row['supplier_id']?'selected':'' ?>><?=$r['nama']?></option>
                        <?php } ?>
                        ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Total Penjualan</label>
                    <input type="number" name="total" value="<?= $row['total'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>