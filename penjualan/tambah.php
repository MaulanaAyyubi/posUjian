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
    <div class="mb-2">
        <label for="">Supplier Id</label>
        <input type="number" name="supplier_id" class="form-control" autofocus>
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