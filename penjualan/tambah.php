<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Penjualan</h1>
    </div>
    <div class="col-4">
        <a href="?m=penjualan&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
</div>
<div class="col">
<form action="?m=penjualan&s=simpan" method="post">
    <?php
    require_once('koneksi.php');
    $sql = "SELECT id, nama FROM supplier ORDER BY nama";
    $query = mysqli_query($koneksi, $sql);
    ?>
    <div class="mb-2">
        <label for="">Nama Supplier</label>
       <select name="supplier_id" class="form-control" required autofocus>
           <?php
           while($r=mysqli_fetch_array($query)) {
           ?>
                <option value="<?=$r['id']?>"><?=$r['nama']?></option>
                <?php } ?>
                ?>
       </select>
    </div>
    <div class="mb-2">
        <label for="">total</label>
        <input type="number" name="total" class="form-control">
    </div>
    <div class="mb-2">
        <input type="reset" class="btn btn-warning">
        <input type="submit" name="simpan" class="btn btn-primary">
        </div>
         </form>
      </div>
    </div>
</section>